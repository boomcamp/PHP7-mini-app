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
    public function add($user_id, $name, $email, $phone, $address): void
    {
        $stmt = $this->conn->prepare('insert into contacts(user_id, name, email, phone, address) values ( ?, ?, ?, ?, ?)');
        $stmt->execute([$user_id, $name, $email, $phone, $address]);
    }

    
    //Implement your query here...


    /**
     * Reset/Truncate contacts table
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
     * close signleton connection for Contacts class
     * access public
     */
    public function __destruct()
    {
        Connection::closeConnection($this->conn);
    }
}
