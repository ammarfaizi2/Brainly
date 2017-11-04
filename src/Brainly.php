<?php

namespace Brainly;


/**
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
			$this->cacheMap = json_decode(file_get_contents($lpath."/cache"), true);
			if (! is_array($this->cacheMap)) {
				$this->cacheMap = [];
			}
		} else {
			$this->cacheMap = [];
		}
		$this->cachefile = $lpath."/cache/".$this->hash;
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

	private function isCached()
	{

	}

	private function isPerfectCache()
	{

	}

	private function getCache()
	{

	}

	/**
	 * Search data.
	 */
	private function _exec()
	{
		if ($this->isCached() && $this->isPerfectCache()) {
			return $this->getCache();
		} else {
			$this->search($this->query, $this->limit);
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
		$ch = curl_init("https://brainly.co.id/api/28/api_tasks/suggester?limit=".((int) $limit)."&query=".urlencode($query));
		curl_setopt_array($ch, 
			[
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_SSL_VERIFYPEER => false,
				CURLOPT_SSL_VERIFYHOST => false,
				CURLOPT_CONNECTTIMEOUT => 15,
				CURLOPT_TIMEOUT => 15
			]
		);
		$out = curl_exec($ch);
		$no  = curl_errno($ch) and $out = "Error ({$no}) : ".$out;
		return $out;
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