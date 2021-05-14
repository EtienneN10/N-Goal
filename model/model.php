<?php

    function getSports(): bool|PDOStatement
    {
        $db = dbConnect();
        return $db->query("SELECT CONCAT(UPPER(LEFT(name,1)),SUBSTRING(name,2, LENGTH(name))) AS formatted_name, name, logo FROM Sport");
    }

    function dbConnect(): PDO
    {
        $login = 'tiene10';
        $mdp = '201198';
        $server = 'localhost';
        $db = 'N-Goal';

        try
        {
            return new PDO("mysql:host=$server;dbname=$db", $login, $mdp);
        }
        catch (Exception $e)
        {
            die('Error : ' . $e->getMessage());
        }
    }

