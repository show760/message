<?php
include "../view/view.php";
include "../model/model.php";

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
        return view::delMessageList($del, $show, "../template/delmessagelist.php");
	}
}

$co = new del_message_controller;
$co -> delmessagecontroller();