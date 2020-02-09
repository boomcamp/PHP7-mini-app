<?php 
declare(strict_types=1);

namespace Interfaces;

interface IDbCredentials
{
    const host     = "mysql:dbname=contacts_db;host=127.0.0.1";
    const username = "root";
    const password = "";
    const database = "contacts_db";

    public static function getNewConnection();
    public static function closeConnection(&$conn);
    public static function getHost() : string;
    public static function getUsername() : string;
    public static function getPassword() : string;
    public static function getDatabase() : string;
}