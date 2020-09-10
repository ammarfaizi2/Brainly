<?php

namespace Brainly;

use Exception;

/**
 *
 * Ammar Faizi https://www.facebook.com/ammarfaizi2 
 *
 * @author Ammar Faizi <ammarfaizi2@gmail.com>
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
   * @param string $query
   * @throws \Exception
   *
   * Constructor.
   */
  public function __construct($query)
  {
    $this->query = trim($query);
    $this->hash  = sha1($query);

    if (defined("data")) {

    }
  }
}
