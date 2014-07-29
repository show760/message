<?php
namespace controller;

require('../vendor/autoload.php');

use model\Model;
use view\View;

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
$co -> modReMessageListController();
