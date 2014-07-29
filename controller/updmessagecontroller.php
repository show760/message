<?php
include "../view/view.php";
include "../model/model.php";

class UpdMessageController
{
    public function updMessageController()
    {
        $mo = new Model;
        $message = $mo->getAllMessage();
        $var = array ();
        for ($i = 0; $i < $message[1]; $i++) {
            $row = mysql_fetch_assoc($message[0]);
            $var[]=$row;
        }
        $show =  array(count($var), $var);
        $upd = 'id';
        return View::updMessageList($upd, $show, "../template/updmessagelist.php");
    }
}

$co = new UpdMessageController;
