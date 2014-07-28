<?php
include "../model/model.php";
include "../view/view.php";

class controller
{
    public function showAllMessage()
    {
        $mo = new model;
        $message = $mo->getAllMessage();
        $var = array ();
        for ($i = 0; $i < $message[1]; $i++) {
            $row = mysql_fetch_assoc($message[0]);
            $var[]=$row;
            // var_dump($row['message_Id']);
        }
        $remessage = $mo->getAllReMessage();
        $var2 = array();
        for ($i = 0; $i < $remessage[1]; $i++) {
            $row = mysql_fetch_assoc($remessage[0]);
            $var2[]=$row;
            // var_dump($row['message_Id']);
        }
        $con = array (count($var),count($var2));
        $show =  array($con, $var, $var2);
        //var_dump($show[2][0]['message_Id']);
        return view::allMessage($show, '../template/allmessage.php');
    }
}

$co = new controller;
$co -> showAllMessage();
/*
var_dump($_SERVER['REQUEST_URI']);
var_dump($_SERVER['PHP_SELF']);
*/

