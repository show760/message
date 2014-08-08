<?php
namespace model;

use PDO;

class Db
{
    protected $db;
    public function __construct()
    {
        $this->db = new PDO(
            "mysql:host=localhost;dbname=james",
            'james',
            '1234',
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    }
    public function testDbConnect()
    {
        $this->db = null;
        $this->db = new PDO(
            "mysql:host=localhost;dbname=testmessage",
            'testmessage',
            '1234',
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    }
    public function __destruct()
    {
        $this->db = null;
    }
}
