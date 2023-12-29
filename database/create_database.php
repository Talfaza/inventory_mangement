<?php

include('connect_database.php');

$connection = new Connection();     
$dbname="INVENTORY";

$connection->createDatabase($dbname);
$connection->selectDatabase($dbname);


$queryTableContact = "CREATE TABLE IF NOT EXISTS CONTACT (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,     
    msg VARCHAR(144) NOT NULL,
    msg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$queryTableUser = "CREATE TABLE IF NOT EXISTS USER (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,     
    pass VARCHAR(144) NOT NULL,
    register_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


$queryTableProductParent = "CREATE TABLE IF NOT EXISTS PRODUCT_PARENT (
    id_product_parent INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id INT(6) UNSIGNED,
    FOREIGN KEY (user_id) REFERENCES USER(id),
    product_price INT NOT NULL,
    product_qte INT NOT NULL
)";




$queryTableProduct = "CREATE TABLE IF NOT EXISTS PRODUCT (
    id_product INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(30) NOT NULL,
    user_id INT(6) UNSIGNED,
    FOREIGN KEY (user_id) REFERENCES USER(id),
    id_parent INT(6) UNSIGNED,
    FOREIGN KEY (id_parent) REFERENCES PRODUCT_PARENT(id_product_parent),
    register_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";



$connection->createTable($queryTableContact);
$connection->createTable($queryTableUser);
$connection->createTable($queryTableProductParent);
$connection->createTable($queryTableProduct);
$connection->admin_add();


?>
