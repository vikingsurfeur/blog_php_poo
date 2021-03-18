<?php
namespace App;
use \PDO;
class Database
{
    private string $db_name;
    private string $db_user;
    private string $db_password;
    private string $db_host;
    private $pdo;

    public function __construct(string $db_name,
                                string $db_user = 'root',
                                string $db_password = '',
                                string $db_host = 'localhost')
    {
        $this->db_name      = $db_name;
        $this->db_user      = $db_user;
        $this->db_password  = $db_password;
        $this->db_host      = $db_host;
    }

    private function getPDO()
    {
        $pdo = new PDO('mysql:dbname=blog_php_poo;host=localhost', 'root', ''); // Connect to my DB
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Debug errors
        $this->pdo = $pdo;
        return $pdo;
    }

    public function query($statement)
    {
        $request    = $this->getPDO()->query($statement); // Method to catch my article
        $datas      = $request->fetchAll(PDO::FETCH_OBJ); // Grab an object of my result
        return $datas;
    }
}