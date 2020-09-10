<?php

namespace Brainly;

use Exception;

if (!defined("CACHE_EXPIRED")) {
  /* Expiry time for the cache in seconds. */
  define("CACHE_EXPIRED", (3600 * 24 * 14)); 
}

/**
 * @author Ammar Faizi <ammarfaizi2@gmail.com> https://www.facebook.com/ammarfaizi2
 * @license MIT
 * @version 1.0.0
 */
final class Brainly
{

  /**
   * @var string
   */
  private $query;


  /**
   * @var string
   */
  private $hash;


  /**
   * @var string
   */
  private $dataDir;


  /**
   * @var string
   */
  private $cacheDir;


  /**
   * @var string
   */
  private $cookieFile;


  /**
   * @var string
   */
  private $cacheFile;


  /**
   * @var bool
   */
  private $hasCacheFile;


  /**
   * @var array
   */
  private $cachedData = [];


  /**
   * @var int
   */
  private $first = 100;


  /**
   * @var ?int
   */
  private $after = null;


  /**
   * @param string $query
   * @param int    $first
   * @param int    $after
   * @throws \Exception
   *
   * Constructor.
   */
  public function __construct($query, $first = 100, $after = null)
  {
    $this->query      = trim($query);
    $this->hash       = sha1($query);
    $this->dataDir    = defined("data") ? data : getcwd()."/brainly";
    $this->cacheDir   = "{$this->dataDir}/cache";
    $this->cookieFile = "{$this->dataDir}/cookie.txt";
    $this->cacheFile  = "{$this->cacheDir}/{$this->hash}.json.gz";
    $this->first      = $first;
    $this->after      = $after;

    /* Make sure dataDir exists and is writeable. */
    is_dir($this->dataDir) or mkdir($this->dataDir);
    if (!is_dir($this->dataDir)) {
      throw new Exception("Cannot create dataDir: {$this->dataDir}");
    }

    if (!is_writeable($this->dataDir)) {
      throw new Exception("dataDir is not writeable: {$this->dataDir}");
    }


    /* Make sure cacheDir exists and is writeable. */
    is_dir($this->cacheDir) or mkdir($this->cacheDir);
    if (!is_dir($this->cacheDir)) {
      throw new Exception("Cannot create cacheDir: {$this->cacheDir}");
    }

    if (!is_writeable($this->cacheDir)) {
      throw new Exception("cacheDir is not writeable: {$this->cacheDir}"); 
    }


    if ($this->hasCacheFile = file_exists($this->cacheFile)) {
      /* If the cache file has already been created, make sure it is readable and writeable. */

      if (!is_readable($this->cacheFile)) {
        throw new Exception("Cache file exists, but it is not readable {$this->cacheFile}");
      }

      if (!is_writeable($this->cacheFile)) {
        throw new Exception("Cache file exists, but it is not writeable {$this->cacheFile}");
      }
    }
  }


  /**
   * @return bool
   */
  private function lookForCache()
  {
    if (!$this->hasCacheFile) {
      goto retf;
    }

    $json = json_decode(gzdecode(file_get_contents($this->cacheFile)), true);

    /* Cache file must be a valid json. */
    if (!isset($json["created_at"], $json["data"])) {
      goto retf;
    }

    /* Cache file must not be expired. */
    if ((strtotime($json["created_at"]) + CACHE_EXPIRED) <= time()) {
      goto retf;
    }

    if (is_array($json["data"])) {
      $this->cachedData = $json["data"];
      return true;
    }

    retf:
    return false;
  }


  /**
   * @throws \Exception
   * @return void
   */
  private function onlineSearch()
  {
    $tryCount = 0;

    go_curl:
    $tryCount++;

    $ch = curl_init("https://brainly.co.id/graphql/id?op=SearchQuery");
    curl_setopt_array($ch,
      [
        CURLOPT_HTTPHEADER     => [
          "Accept-Encoding: gzip",
          "Content-Type: application/json",
          "Origin: https://brainly.co.id"
        ],
        CURLOPT_HEADER         => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $this->buildQuery(),
        CURLOPT_USERAGENT      => "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:65.0) Gecko/20100101 Firefox/65.0",
        CURLOPT_REFERER        => "https://brainly.co.id/app/ask?entry=top&q=".urlencode($this->query),
        CURLOPT_COOKIEJAR      => $this->cookieFile,
        CURLOPT_COOKIEFILE     => $this->cookieFile,
        CURLOPT_TIMEOUT        => 120,
        CURLOPT_CONNECTTIMEOUT => 120,
      ]
    );
    $out = curl_exec($ch);
    $err = curl_error($ch);
    $ern = curl_errno($ch);

    if ($err) {
      if ($tryCount <= 3) {
        goto go_curl;
      }
      curl_close($ch);
      throw new \Exception("Curl Error: ({$ern}): {$err}");
    }

    $hdrSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $hdr     = substr($out, 0, $hdrSize);
    $out     = substr($out, $hdrSize);
    curl_close($ch);

    if (preg_match("/content-encoding: gzip/i", $hdr)) {
      $out = gzdecode($out);
    }

    if ($this->cachedData = self::parseOut($out)) {
      $this->writeCache();
    }
  }


  /**
   * @param string $out
   * @return array
   */
  private static function parseOut($out)
  {
    $result = [];

    $out = json_decode($out, true);

    if (!is_array($out)) {
      goto ret;
    }

    if (!isset($out["data"]["questionSearch"]["edges"])) {
      goto ret;  
    }
    
    $edges = $out["data"]["questionSearch"]["edges"];
    unset($out);

    if (!is_array($edges)) {
      goto ret;
    }

    foreach ($edges as $r) {
      $answers = [];
      if (!isset($r["node"]["answers"]["nodes"])) {
        goto fcon;
      }

      $nodes = $r["node"]["answers"]["nodes"];
      if (!is_array($nodes)) {
        goto fcon;
      }
      
      foreach ($nodes as $rr) {
        $answers[] = $rr["content"];
      }

      fcon:
      $result[] = [
        "content" => $r["node"]["content"],
        "answers" => $answers
      ];
    }

    ret:
    return $result;
  }


  /**
   * @return string
   */
  private function buildQuery()
  {
    return json_encode(
      [
        "operationName" => "SearchQuery",
        "variables" => [
          "query" => $this->query,
          "after" => $this->after,
          "first" => $this->first,
        ],
        "query" => self::GRAPHQL_PAYLOAD
      ]
    );
  }


  /**
   * @return void
   */
  private function writeCache()
  {
    file_put_contents($this->cacheFile, gzencode(json_encode(
      [
        "created_at" => date("c"),
        "data"       => $this->cachedData
      ]
    ), 9), LOCK_EX);
  }


  /**
   * @return array
   */
  public function exec()
  {
    if (!$this->lookForCache()) {
      $this->onlineSearch();
    }
    return $this->cachedData;
  }


    private const GRAPHQL_PAYLOAD = <<<'GRAPHQL_PAYLOAD'
query SearchQuery($query: String!, $first: Int!, $after: ID) {
  questionSearch(query: $query, first: $first, after: $after) {
    count
    edges {
      node {
        id
        databaseId
        author {
          id
          databaseId
          isDeleted
          nick
          avatar {
            thumbnailUrl
            __typename
          }
          rank {
            name
            __typename
          }
          __typename
        }
        content
        answers {
          nodes {
            thanksCount
            ratesCount
            rating
            content
            __typename
          }
          hasVerified
          __typename
        }
        __typename
      }
      highlight {
        contentFragments
        __typename
      }
      __typename
    }
    __typename
  }
}
GRAPHQL_PAYLOAD;
}
