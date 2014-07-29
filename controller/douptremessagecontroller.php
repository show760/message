<?php
namespace controller;

require('../vendor/autoload.php');

use model\Model;

class DoUpdReMessageController
{
    public function doUpdReMessageController()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $text = $_POST['text'];
        $mo = new Model;
        $mo -> updReMessage($id, $name, $text);
    }
}

$co = new DoUpdReMessageController;
$co -> doUpdReMessageController();
