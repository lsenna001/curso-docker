<?php

require_once "../vendor/autoload.php";


function connection()
{
    return new PDO("mysql:host=myapp_mysql;dbname=docker", "root", "root");
}

$con = connection();

$users = $con->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);

dd($users);