<?php
namespace Classes;

use PDO;
use Interfaces\IDbCredentials;

class Connection extends PDO implements IDbCredentials
{

    public function __construct($dsn, $username = null, $password = null, array $options = null)
    {
        parent::__construct($dsn, $username, $password, $options);
    }
    /**
     * Singleton pattern access to only one instance of a particular class (during runtime)
     * create pdo connection for both test and models
     *
     * @return void
     * access public
     */
    public static function getNewConnection()
    {
        $conn = null;

        try 
        {
            if (!($conn instanceof Connection) ) {
                $conn = new Connection(self::getHost(), self::getUsername(), self::getPassword());
            }
        } 
        catch (PDOException $exc) 
        {
            echo $exc->getMessage();
        }

        return $conn;
    }
    /**
     * close pdo connection
     *
     * @param self $conn
     * @return void
     * access public static
     */
    public static function closeConnection(&$conn)
    {
        $conn = null;
    }

    /**
     * get host name
     *
     * @return string
     * access public static
     */
    public static function getHost() : string
    {
        return IDbCredentials::host;
    }

    /**
     * get username
     *
     * @return string
     * access public static
     */
    public static function getUsername() : string
    {
        return  IDbCredentials::username;
    }

    /**
     * get password
     *
     * @return string
     * access public static
     */
    public static function getPassword() : string
    {
        return IDbCredentials::password;
    }

    /**
     * get database name
     *
     * @return string
     * access public static
     */
    public static function getDatabase() : string
    {
        return IDbCredentials::database;
    }
}
