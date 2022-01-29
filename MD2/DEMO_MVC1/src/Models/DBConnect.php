<?php

namespace App\Models;
use PDO;
use PDOException;


class DbConnect
{
    protected $dsn;
    protected $user;
    protected $pass;


    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=demo_MVC";
        $this->user = "root";
        $this->pass = "12345678@";
    }


    // ham duyet ket noi
    public function connect()
    {
        // ngoai le
        try {
            return new PDO($this->dsn, $this->user, $this->pass);
        } catch (PDOException $e) {
            return $e->getMessage();
            // thoat ket noi
            exit();
        }
    }
}
