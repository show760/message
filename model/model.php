<?php
namespace model;

use PDO;

class Model
{
    private $db;
    public function __construct()
    {
        $this->db = new PDO(
            "mysql:host=localhost;dbname=james",
            'root',
            '1234',
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    }
    public function alert($string)
    {
        $content=
<<<CONTENT
    <script language="JavaScript">
        alert("{$string}");
    </script>
CONTENT;

        return $content;
    }
    public function overPage($goto)
    {
        return "<script>window.location.replace('{$goto}')</script>";
    }
    public function getAllMessage()
    {
        $message = $this->db->query('SELECT * FROM `message`');
        $message -> setFetchMode(PDO::FETCH_ASSOC);
        return $message;
    }
    public function modAddMessage($name, $text)
    {
        $add = $this->db->prepare(
            "INSERT INTO `message`(`message_Name`,`message_Text`)VALUES ('{$name}','{$text}')"
        );
        $message = $add -> execute();
        return $message;
    }
    public function modDelMessage($id)
    {
        $del = $this->db->prepare("DELETE FROM `message` WHERE `message_Id` = '{$id}'");
        $message = $del -> execute();
        return $message;
    }
    public function getModUpdMessage($id)
    {
        $message = $this->db->query("SELECT * FROM `message` WHERE `message_Id` = '{$id}'");
        $message -> setFetchMode(PDO::FETCH_ASSOC);
        $modmessage = $message->fetch();
        return $modmessage;
    }
    public function updMessage($id, $name, $text)
    {
        $update = $this->db->prepare(
            "UPDATE `message` SET `message_Name`='{$name}',`message_Text`='{$text}' WHERE `message_Id`= '{$id}'"
        );
        $message = $update -> execute();
        return $message;
    }
    public function getAllReMessage()
    {
        $remessage = $this->db->query(
            "SELECT `remessage_Id`,`message_Id` AS M_ID ,`remessage_Time`,`remessage_Name`,`remessage_Text` 
            FROM `remessage`"
        );
        $remessage -> setFetchMode(PDO::FETCH_ASSOC);
        return $remessage;
    }
    public function modAddReMessage($id, $name, $text)
    {
        $add = $this->db->prepare(
            "INSERT INTO `remessage`(`message_Id`,`remessage_Name`,`remessage_Text`)
            VALUES ('{$id}','{$name}','{$text}')"
        );
        $remessage = $add -> execute();
        return $remessage;
    }
    public function modDelReMessage($id)
    {
        $del = $this->db->prepare("DELETE FROM `remessage` WHERE `remessage_Id` = '{$id}'");
        $remessage =$del -> execute();
        return $remessage;
    }
    public function getUpdReMessage($id)
    {
        $message = $this->db->query("SELECT * FROM `remessage` WHERE `remessage_Id` = '{$id}'");
        $message -> setFetchMode(PDO::FETCH_ASSOC);
        $modmessage = $message->fetch();
        return $modmessage;
    }
    public function updReMessage($id, $name, $text)
    {
        $update = $this->db->prepare(
            "UPDATE `remessage` SET `remessage_Name`='{$name}',`remessage_Text`='{$text}' WHERE `remessage_Id`= '{$id}'"
        );
        $remessage = $update -> execute();
        return $remessage;
    }
    public function testModelConnect()
    {
        $this->db = null;
        $this->db = new PDO(
            "mysql:host=localhost;dbname=test",
            'root',
            '1234',
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
        );
    }
    public function testFindMessage($name, $test)
    {
        $message = $this->db->query(
            "SELECT `message_Id` FROM `message` WHERE `message_Name`='{$name}' and `message_Text` ='{$test}'"
        );
        $message -> setFetchMode(PDO::FETCH_ASSOC);
        $get = $message->fetch();
        return $get;
    }
    public function testFindReMessage($name, $test)
    {
        $remessage = $this->db->query(
            "SELECT `remessage_Id` FROM `remessage` WHERE `remessage_Name`='{$name}' 
            and `remessage_Text` ='{$test}'"
        );
        $remessage -> setFetchMode(PDO::FETCH_ASSOC);
        $get = $remessage->fetch();
        return $get;
    }
    public function __destruct()
    {
        $this->db = null;
    }
}
