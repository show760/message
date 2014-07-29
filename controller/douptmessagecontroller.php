<?php
namespace controller;

require('../vendor/autoload.php');

use model\Model;

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
$co -> doUpdMessageController();
