<?php
namespace Models;

use Classes\Connection;

class Contacts extends Connection
{
    private $conn;

    public function __construct(Connection $connection)
    {
        $this->conn = $connection;
    }

    /**
     * Function to add contacts in database
     * @param [type] $name    [description]
     * @param [type] $email   [description]
     * @param [type] $phone   [description]
     * @param [type] $address [description]
     */
    public function add($name, $email, $phone, $address)
    {
        $stmt = $this->conn->prepare("insert into contacts(name, email, phone, address) values ( ?, ?, ?, ?)");
        $stmt->execute([$name, $email, $phone, $address]);
    }

    /**
     * Reset/Truncate products table
     *
     * @param string $table
     * @return void
     * access public
     */
    public function empty($table = null)
    {
        $stmt = $this->conn->prepare("TRUNCATE TABLE ".$table);
        $stmt->execute();
    }

    /**
     * drop table
     *
     * @param string $table
     * @return void
     * access public
     */
    public function drop($table = null)
    {
        $stmt = $this->conn->prepare("DROP TABLE ".$table);
        $stmt->execute();
    }

    /**
     * close connection for Contacts class
     * access public
     */
    public function __destruct()
    {
        Connection::closeConnection($this->conn);
    }
}
