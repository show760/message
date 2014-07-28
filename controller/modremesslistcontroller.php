<?php
include "../view/view.php";
include "../model/model.php";

class mod_remessagelist_controller
{
    public function ModReMessageListController()
    {
        $id = $_POST['id'];
        $mo = new model;
        $message = $mo->getUpdReMessage($id);
        $upd = array('name', 'text' ,'id');
        //var_dump($message);
        return view::modReMessageList($message, $upd, "../template/updremessagelist.php");
	}
}

$co = new mod_remessagelist_controller;
$co -> ModReMessageListController();