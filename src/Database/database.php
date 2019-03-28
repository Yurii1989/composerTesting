<?php
namespace Database;
require_once __DIR__.'/../../config/bootstrap.php';


class database
{
    private static $connection;
    private static $configuration;

    public static function getConnection() {
        if (self::$connection) {
            return self::$connection;
        }
        self::$connection = new \PDO(
            sprintf('%s:host=%s;dbname%s;port=%s',
                self::$configuration['driver'],
                self::$configuration['host'],
                self::$configuration['dbname'],
                self::$configuration['port']),
            self::$configuration['user'],
            self::$configuration['password']
        );
        return self::$connection;
    }

    public static function setConfig(array $configuration)
    {
        self::$configuration = $configuration;
    }
}