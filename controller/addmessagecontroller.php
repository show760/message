<?php
include "../view/view.php";

class AddMessageController
{
    public function addMessageController()
    {
        $add = array('name', 'text');
        return View::addMessageList($add, "../template/addmessagelist.php");
    }
}

$co = new AddMessageController;
