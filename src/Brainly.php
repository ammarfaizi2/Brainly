<?php

namespace Brainly;

/**
 *
 * Ammar Faizi https://www.facebook.com/ammarfaizi2 
 *
 * @author Ammar Faizi <ammarfaizi2@gmail.com>
 * @license MIT
 * @version 0.0.1
 */
final class Brainly
{

	/**
	 * @var string
	 */
	private $query;

	/**
	 * @var array
	 */
	private $cacheMap = [];

	/**
	 * @var string
	 */
	private $cacheMapFile;

	/**
	 * @var string
	 */
	private $cacheFile;

	/**
	 * @var array|null
	 */
	private $cacheData;

	/**
	 * @var int
	 */
	private $limit;

	/**
	 * @param string $query
	 */
	public function __construct($query)
	{
		$this->query = strtolower($query);
		$this->hash  = sha1($this->query);
		$this->limit = 100;
		$this->__init__();
	}

	/**
	 * Init data.
	 */
	private function __init__()
	{
		$lpath = defined("data") ? data."/branily" : getcwd()."/brainly";
		is_dir($lpath) or mkdir($lpath);
		is_dir($lpath."/cache") or mkdir($lpath."/cache");
		if (file_exists($lpath."/cache.map")) {
			$this->cacheMap = json_decode(
				file_get_contents(
					$lpath."/cache.map"
				), 
				true
			);
			if (! is_array($this->cacheMap)) {
				$this->cacheMap = [];
			}
		} else {
			$this->cacheMap = [];
		}
		$this->cacheFile = $lpath."/cache/".$this->hash;
		$this->cacheMapFile = $lpath."/cache.map";
	}

	/**
	 * Set limit query.
	 *
	 * @param int $int
	 */
	public function limit($int)
	{
		$this->limit = (int) $int;
	}

	/**
	 * Check the current query is cached or not.
	 *
	 * @return bool
	 */
	private function isCached()
	{
		return isset($this->cacheMap[$this->hash]);
	}

	/**
	 * Check the current cache is perfect or not.
	 *
	 * @return bool 
	 */
	private function isPerfectCache()
	{
		if ($this->cacheMap[$this->hash] + 0x93a80 > time()) {
			$this->cacheData = json_decode(
				file_get_contents(
					$this->cacheFile
				), 
				true
			);
			return is_array($this->cacheData);
		}
		return false;
	}

	/**
	 * Get cached data.
	 *
	 * @return array
	 */
	private function getCache()
	{
		return $this->fixer(
			$this->cacheData
		);
	}

	/**
	 * Search data.
	 */
	private function _exec()
	{
		var_dump($this->isCached());die;
		if ($this->isCached() && $this->isPerfectCache()) {
			return $this->getCache();
		} else {
			die;
			return $this->fixer(
				$this->search(
					$this->query, 
					$this->limit
				)
			);
		}
	}

	/**
	 * Online search
	 *
	 * @param string $query
	 * @param int    $limit
	 * @return string
	 */
	private static function search($query, $limit = 10)
	{
		$ch = curl_init(
			"https://brainly.co.id/api/28/api_tasks/suggester?limit=".((int) $limit)."&query=".urlencode($query)
		);
		curl_setopt_array(
			$ch, 
			[
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_SSL_VERIFYPEER => false,
				CURLOPT_SSL_VERIFYHOST => false,
				CURLOPT_CONNECTTIMEOUT => 15,
				CURLOPT_TIMEOUT => 15
			]
		);
		$out = curl_exec($ch);
		if (
			$no  = curl_errno($ch) and 
			$out = "Error ({$no}) : ".$out
		) {
			throw new \Exception($out, 1);
		}
		// file_put_contents("a.tmp", json_encode(json_decode($out), 128));
		// $out = file_get_contents("a.tmp");
		return $out;
	}

	/**
	 * Fix raw data.
	 *
	 * @param string $data
	 * @return array
	 */
	private function fixer($data)
	{
		if ($this->writeCache($data)) {
			$data = json_decode($data, true);
			if ($data['success'] === true) {
				if (isset($data['data']['tasks']['items'])) {
					$r = [];
					foreach ($data['data']['tasks']['items'] as $k => $v) {
						$responses = [];
						foreach ($v['responses'] as $j => $q) {
							$responses[] = [
								"content" => $q['content']
							];
						}
						$r[] = [
							"content" 	=> $v['task']['content'],
							"responses"	=> $responses
						];
					}
				}
			}
			return $r;
		} else {
			return false;
		}
	}

	/**
	 * Write cache.
	 *
	 * @param string $data
	 * @return bool
	 */
	private function writeCache($data)
	{
		$this->cacheMap[$this->hash] = time();
		$handle = fopen($this->cacheMapFile, "w");
		flock($handle, LOCK_EX);
		$write1 = fwrite($handle, 
			json_encode(
				$this->cacheMap, 
				JSON_UNESCAPED_SLASHES
			)
		);
		fclose($handle);
		$handle = fopen($this->cacheFile, "w");
		flock($handle, LOCK_EX);
		$write2 = fwrite($handle, $data);
		fclose($handle);
		return (
			(bool) $write1 && (bool) $write2
		);
	}

	/**
	 * Execute and get result.
	 * 
	 * @return string
	 */
	public function exec()
	{
		return $this->_exec();
	}
}