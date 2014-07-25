<?php
include "../view/view.php";
include "../model/model.php";

class upd_message_controller
{
    public function updMessageController()
    {
        $mo = new model;
        $message = $mo->getAllMessage();
        $var = array ();
        for ($i = 0; $i < $message[1]; $i++) {
            $row = mysql_fetch_assoc($message[0]);
            $var[]=$row;
        }
        $show =  array(count($var), $var);
        $upd = 'id';
        //var_dump($show);
        return view::updMessageList($upd, $show, "../template/updmessagelist.php");
	}
}

$co = new upd_message_controller;
$co -> updMessageController();