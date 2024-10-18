<?php

namespace App;

class Application {

  private string $dbhost;
  private string $dbname;
  private string $dbuser;
  private string $dbpass;

  public function __construct(array $env) {
    $this->dbhost = $env['DB_HOST'];
    $this->dbname = $env['DB_DATABASE'];
    $this->dbuser = $env['DB_USERNAME'];
    $this->dbpass = $env['DB_PASSWORD'];
  }

  public function start() {
    try {
      echo 'PHP version: ' . phpversion();
      echo '<br />';

      $conn = new \PDO("mysql:host={$this->dbhost};dbname={$this->dbname};charset=utf8mb4", $this->dbuser, $this->dbpass);

      echo 'Database connected successfully';
      echo '<br />';
    } catch (\Throwable $t) {
      echo 'Error: ' . $t->getMessage();
      echo '<br />';
    }
  }
}
