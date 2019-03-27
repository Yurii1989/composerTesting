<?php
namespace Database;
require_once __DIR__.'/../../config/bootstrap.php';


class database
{
    private static $instance = null;
    private $connection = [];

    private function setConnection($dbconnect) {
        $this->connection = new \PDO(
            sprintf('%s:dbname=%s;host=%s;port=%s',
                $dbconnect['engine'],
                $dbconnect['dbname'],
                $dbconnect['host'],
                $dbconnect['port']),
            $dbconnect['username'],
            $dbconnect['password']
        );
    }
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new database();
        }
        return self::$instance;
    }
    public function getConnection()
    {
        return $this->connection;
    }
}