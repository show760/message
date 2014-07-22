<?php
include "dbconn.php";
$name = @$_POST['name'];
$text = @$_POST['text'];

connectMysql();
$sql = "INSERT INTO `message`(`message_Name`,`message_Text`)
VALUES ('{$name}','{$text}')";
mysql_query($sql);

echo alert("新增留言成功").overPage("message.php");
