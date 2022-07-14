<?php 
require_once __DIR__ . "/cart.php";
require_once __DIR__ . "/customer.php";

$customer = new Customer("Gigi", "Tonini", "gigito@gmail.com", true, "card", "10/12/2024", "Via Giovani, 4");

var_dump($customer);