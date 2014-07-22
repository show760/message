<?php

function createConnection()
{
    $link = mysql_connect("localhost", "root", "1234")
    or die("無法建立資料連接<br><br>" . mysql_error());
    mysql_query("SET NAMES utf8");
    return $link;
}

function executeSql($database, $sql, $link)
{
    $db_selected = mysql_select_db($database, $link)
    or die("開啟資料庫失敗<br><br>" . mysql_error($link));
    $result = mysql_query($sql, $link);
    return $result;
}

function connectMysql()
{
    mysql_connect("localhost", "root", "1234")
    or die("連結失敗");
    mysql_select_db("james");
    mysql_query("set names utf8");
}

function alert($string)
{
    $content=
<<<CONTENT
    <script language="JavaScript">
        alert("{$string}");
    </script>
CONTENT;
    return $content;
}
   
function overPage($goto)
{
    return "<script>window.location.replace('{$goto}')</script>";
}
