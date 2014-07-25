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
        }
        $show =  array(count($var), $var);
        return view::allMessage($show, '../template/allmessage.php');
    }
}

$co = new controller;
$co -> showAllMessage();

