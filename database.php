<?php
require_once("config.inc.php");

class DatabaseClass
{
    public static $dbh;
    public static $instance;
    function __construct()
    {
        self::$instance = $this;
        $dsn = 'mysql:dbname=' . ConfigDatabase::DB_NAME . ';host=' . ConfigDatabase::DB_HOST;
        try
        {
            self::$dbh = new PDO($dsn, ConfigDatabase::DB_USERNAME, ConfigDatabase::DB_PASSWORD);
        }
        catch (PDOException $e)
        {
            print "Error: " . $e->getMessage();
        }
    }

    function getInstance()
    {
        if (self::$instance === null)
        {
            self::$instance = new self();
        }
        
        return self::$instance;
    }
}



?>