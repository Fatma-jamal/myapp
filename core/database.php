<?php

namespace Tamm\Core;


class Database {
    private static $instance;
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    private function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public static function getInstance() {
        if (!self::$instance) {
            // self::$instance = new self($host, $username, $password, $database);
        }

        return self::$instance;
    }

    public function connect() {
        // $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
        // if ($this->connection->connect_error) {
        //     die("Connection failed: " . $this->connection->connect_error);
        // }
    }

    public function disconnect() {
        $this->connection->close();
    }

    public function query($sql) {
        $result = $this->connection->query($sql);

        if (!$result) {
            die("Query failed: " . $this->connection->error);
        }

        return $result;
    }

    public function fetch($result) {
        return $result->fetch_assoc();
    }

    public function escape($value) {
        return $this->connection->real_escape_string($value);
    }
}