<?php
namespace model;

class Model
{
    public function __construct()
    {
        mysql_connect("localhost", "root", "1234")
        or die("連結失敗");
        mysql_select_db("james");
        mysql_query("set names utf8");
        //echo "資料庫連結完畢";
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
        $sql="SELECT * FROM `message`";
        $result=mysql_query($sql);
        $total_records = mysql_num_rows($result);
        $message = array($result, $total_records);
        //var_dump($message);
        return $message;

    }
    public function modAddMessage($name, $text)
    {
        $sql = "INSERT INTO `message`(`message_Name`,`message_Text`)
        VALUES ('{$name}','{$text}')";
        mysql_query($sql);
        echo Model::alert("新增留言成功").Model::overPage("controller.php");
    }
    public function modDelMessage($id)
    {
        $sql = "DELETE FROM `message` WHERE `message_Id` = '{$id}'";
        mysql_query($sql);
        echo Model::alert("刪除留言成功").Model::overPage("delmessagecontroller.php");
    }
    public function getModUpdMessage($upd)
    {
        $sql = "SELECT * FROM `message` WHERE `message_Id` = '{$upd}'";
        $result = mysql_query($sql);
        $message = mysql_fetch_assoc($result);
        return $message;
    }
    public function updMessage($id, $name, $text)
    {
        $sql = "UPDATE `message` SET `message_Name`='{$name}',`message_Text`='{$text}' 
        WHERE `message_Id`= '{$id}'";
        mysql_query($sql);
        echo Model::alert("修改留言成功").Model::overPage("controller.php");
    }
    public function getAllReMessage()
    {
        $sql = "SELECT * FROM `remessage` order by `message_Id`";
        $result = mysql_query($sql);
        $total_records = mysql_num_rows($result);
        $remessage = array($result, $total_records);
        //var_dump($remessage);
        return $remessage;
    }
    public function modAddReMessage($id, $name, $text)
    {
        $sql = "INSERT INTO `remessage`(`message_Id`,`remessage_Name`,`remessage_Text`)
        VALUES ('{$id}','{$name}','{$text}')";
        mysql_query($sql);
        echo Model::alert("新增回覆成功").Model::overPage("controller.php");
    }
    public function modDelReMessage($id)
    {
        $sql = "DELETE FROM `remessage` WHERE `remessage_Id` = '{$id}'";
        mysql_query($sql);
        echo Model::alert("刪除回覆成功").Model::overPage("controller.php");
    }
    public function getUpdReMessage($id)
    {
        $sql = "SELECT * FROM `remessage` WHERE `remessage_Id` = '{$id}'";
        $result = mysql_query($sql);
        $message = mysql_fetch_assoc($result);
        return $message;
    }
    public function updReMessage($id, $name, $text)
    {
        $sql = "UPDATE `remessage` SET `remessage_Name`='{$name}',`remessage_Text`='{$text}' 
        WHERE `remessage_Id`= '{$id}'";
        mysql_query($sql);
        echo Model::alert("修改回覆成功").Model::overPage("controller.php");
    }
}
