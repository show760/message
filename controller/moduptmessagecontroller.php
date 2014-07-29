<?php
include "../view/view.php";
include "../model/model.php";

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
