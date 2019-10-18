<?php
require_once "../../system/config/config.php";

$db = new PDO('mysql:host='.DB_HOST.';charset=utf8', DB_USER, DB_PASS);
$db->setAttribute(PDO::ERRMODE_EXCEPTION,TRUE);

try{
    $db->exec("CREATE DATABASE IF NOT EXISTS ".DB_NAME);
    $db->__construct('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',DB_USER,DB_PASS);
}catch(PDOException $e){
    die($e->getMessage());
}
try{
    $db->exec("CREATE TABLE ".TABLE_SETTINGS."(
        param VARCHAR(20) NOT NULL,
        value VARCHAR(250) NOT NULL
    );");
    //Add another tables..
    $db->exec("CREATE TABLE ".TABLE_USERS."(
        id BIGINT AUTO_INCREMENT NOT NULL,
        username VARCHAR(30) NOT NULL,
        password VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        fullname VARCHAR(100) NOT NULL,
        privilege INT(2) NOT NULL,
        PRIMARY KEY (id)
    );");
    $default_username = 'admin';
    $default_fullname = 'Administrator';
    $default_email = '';
    $default_password = md5($default_username.'admin'.$default_email.'s4lt$t61N9'); //Change this md5 altogether and replace this with the new PHP password api
    $statement = $db->prepare("INSERT INTO ".TABLE_USERS."(username,password,email,fullname,privilege)VALUES(:u,:p,:e,:f,1)");
    $statement->bindValue(':u',$default_username,PDO::PARAM_STR);
    $statement->bindValue(':p',$default_password,PDO::PARAM_STR);
    $statement->bindValue(':e',$default_email,PDO::PARAM_STR);
    $statement->bindValue(':f',$default_fullname,PDO::PARAM_STR);
    $statement->execute();
}catch(PDOException $e){
    die($e->getMessage());
}

echo "All done";
?>