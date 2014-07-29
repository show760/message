<?php
namespace controller;

require('../vendor/autoload.php');

use model\Model;

class AddRemessageController
{
    public function addRemessageController()
    {
        $name = $_POST['name'];
        $text = $_POST['text'];
        $id = $_POST['id'];
        $mo = new Model;
        $mo->modAddReMessage($id, $name, $text);
    }
}

$co = new AddRemessageController;
$co -> addRemessageController();
