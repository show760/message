<?php 

require("vendor/autoload.php");
use \PDO;

$db = new PDO(
    "mysql:host=localhost;dbname=testmessage",
    'testmessage',
    '1234',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
);
$db->exec(file_get_contents("test/sql/testmessage.sql"));
echo 'Insert testmessage table';
$db = null;

$db = new PDO(
    "mysql:host=localhost;dbname=james",
    'james',
    '1234',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
);
$db->exec(file_get_contents("test/sql/james.sql"));
echo ' and Update james table success!';
$db = null;
