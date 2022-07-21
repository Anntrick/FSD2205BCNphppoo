<?php
    $server = "db";
    $user = 'crud_php';
    $password = 'crud_php';
    $databaseName = 'crud_php';

    try{
        $connection = new PDO("mysql:host=$server;dbname=$databaseName", $user, $password);
    } catch (Exception $e) {
        echo $e;
    }

?>