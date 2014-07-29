<?php
include "../view/view.php";
include "../model/model.php";

class ModReMessageListController
{
    public function modReMessageListController()
    {
        $id = $_POST['id'];
        $mo = new Model;
        $message = $mo->getUpdReMessage($id);
        $upd = array('name', 'text' ,'id');
        return View::modReMessageList($message, $upd, "../template/updremessagelist.php");
    }
}

$co = new ModReMessageListController;
