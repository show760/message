<?php
namespace controller;

require('../vendor/autoload.php');

use model\Model;
use view\View;

class ModUpdMessageController
{
    public function modUpdMessageController()
    {
        $upd = $_POST['id'];
        $mo = new Model;
        $message = $mo->getModUpdMessage($upd);
        $upd = array('name', 'text', 'id');
        return View::modupdMessage($message, $upd, "../template/modupdmessage.php");
    }
}

$co = new ModUpdMessageController;
$co -> modUpdMessageController();
