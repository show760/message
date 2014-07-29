<?php
include "../model/model.php";

class DoUpdMessageController
{
    public function doUpdMessageController()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $text = $_POST['text'];
        $mo = new Model;
        $mo -> updMessage($id, $name, $text);
    }
}

$co = new DoUpdMessageController;
