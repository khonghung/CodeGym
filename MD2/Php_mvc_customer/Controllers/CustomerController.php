<?php
namespace Controller;

use Model\Customer;
use Model\CustomerDB;
use Model\DBConnection;

class CustomerController
{
    public CustomerDB $customerDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost;dbname = Demo_MVC", "root", "12345678@");
        $this->customerDB = new CustomerDB($connection->connect());
    }

    public function add()
    {
        if($_SERVER["REQUEST_METHOD"] === "GET") {
            include "view/add.php";
        } else {
            $error = [];
            $fields = ["name", "email", "address"];
        
            foreach($fields as $field) {
                if (empty($_POST[$field])) {
                    $error[$field] = "Không được để trống";
                }
            }

            if (empty($error)) {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $address = $_POST["address"];
                $customer = new Customer($name, $email, $address);
                $this->customerDB->create($customer);
                header("Location: index.php");
            } else {
                include "view/add.php";
            }
        }
    }

}