<?php
namespace App\Controllers;
use App\Models;

class CustomerController
{
   public function add()
   {
       if ($_SERVER["REQUEST_METHOD"] === "GET"){
           include "Views/list.php";
       } else {
           
       }
   }
} 
