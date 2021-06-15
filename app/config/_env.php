<?php

namespace App\Config;

// create a .env file in your root an call your keys here from that file
//i am using Vlucas dotenv package
// define('BASE_PATH',realpath(__DIR__.'/../../'));

// $dotEnv = \Dotenv\Dotenv::createUnsafeImmutable(BASE_PATH);
// $dotEnv->safeLoad();




class Config
{
  /**
   * Database host
   * @var string
   */
  const DB_HOST = 'localhost:3307';

  /**
   * Database name
   * @var string
   */
  const DB_NAME = 'citasdb';

  /**
   * Database user
   * @var string
   */
  const DB_USER = 'root';

  /**
   * Database password
   * @var string
   */
  const DB_PASSWORD = 'snk123';

  /**
   * Show or hide error messages on screen
   * @var boolean
   */
  const SHOW_ERRORS = true;
}