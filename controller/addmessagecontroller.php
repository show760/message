<?php
include "../view/view.php";
class add_message_controller
{
    public function conAddMessageList()
    {   
        $add = array('name', 'text');
        return view::addMessageList($add, "../template/addmessagelist.php");
    }
}

$co = new add_message_controller;
$co -> conAddMessageList();