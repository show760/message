<?php

class model
{
    // public $message;    
    public function __construct()
    {
        mysql_connect("localhost", "root", "1234")
        or die("連結失敗");
        mysql_select_db("james");
        mysql_query("set names utf8");
        //echo "資料庫連結完畢";
    }
    public function getAllMessage()
    {
        $sql="SELECT * FROM `message`";
        $result=mysql_query($sql);
        $total_records = mysql_num_rows($result);
        $message = array($result, $total_records);
        //var_dump($message);
        return $message;

    }
    public function addMessage($name, $text)
    {
        $sql = "INSERT INTO `message`(`message_Name`,`message_Text`)
        VALUES ('$name','$text')";
        mysql_query($sql);   
    }

}
