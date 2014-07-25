<?php
include "../view/view.php";
include "../model/model.php";

class modupd_message_controller
{
    public function modupdMessageController()
    {
        $upd = $_POST['id'];
        $mo = new model;
        $message = $mo->getmodUpdMessage($upd);
        //var_dump($message);
        $upd = array('name', 'text', 'id');
        //var_dump($upd);
        return view::modupdMessage($message, $upd, "../template/modupdmessage.php");
	}
}

$co = new modupd_message_controller;
$co -> modupdMessageController();