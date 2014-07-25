<?php
include "view.php";
include "model.php";

class del_message_controller
{
    public function delmessagecontroller()
    {
        $mo = new model;
        $message = $mo->getAllMessage();
        $var = array ();
        for ($i = 0; $i < $message[1]; $i++) {
            $row = mysql_fetch_assoc($message[0]);
            $var[]=$row;
        }
        $show =  array(count($var), $var);
        $del = 'id';
        return view::delMessageList($del, $show, "delmessagelist.php");
	}
}

$co = new del_message_controller;
$co -> delmessagecontroller();