<?php
namespace Models;

class CustomerDB
{
    public $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }


    public function create(object $customer){
       $sql = "INSERT INTO customers (name, email, address) VALUES (?,?,?)";
       $statement = $this->connect->prepare($sql);
       $statement->bindParam(1, $customer->name);
       $statement->bindParam(2, $customer->email);
       $statement->bindParam(3, $customer->address);
       return $statement->execute();
    }
}