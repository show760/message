<?php
namespace controller;

require('../vendor/autoload.php');

use view\View;

class AddMessageController
{
    public function addMessageController()
    {
        $add = array('name', 'text');
        return View::addMessageList($add, "../template/addmessagelist.php");
    }
}

$co = new AddMessageController;
$co -> addMessageController();
