<?php

class Database
{
    private static $dbHost = "localhost";
    private static $dbName = "latemweq_burger_code";
    private static $dbUser = "latemweq_visiteur";
    private static $dbUserPassword = "Rz^M@jxL)w:=3PKG&L";
    private static $connection = null;    
    public static function connect()
         {
             try
                       {
                         self::$connection = new PDO("mysql:host=" .self::$dbHost . ";dbname=" .self::$dbName,self::$dbUser,self::$dbUserPassword);
                       }
             catch(PDOException $e)
                       {
                          die($e->getMessage());
                       }
             return self::$connection;
         }
             public static function disconnect()
                       {
                         self::$connection = null;
                       }
}  
?>

<!-- /* Connexion sur serveur Web
    *
    * private static $dbHost = "localhost";
    private static $dbName = "latemweq_burger_code";
    private static $dbUser = "latemweq_visiteur";
    private static $dbUserPassword = "Rz^M@jxL)w:=3PKG&L";*/ -->