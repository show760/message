<?php
namespace controller;

require('../vendor/autoload.php');

use model\Model;

class DoAddMessageController
{
    public function doAddMessageController()
    {
        $name = $_POST['name'];
        $text = $_POST['text'];
        $mo = new Model;
        $mo->modAddMessage($name, $text);
    }
}

$co = new DoAddMessageController;
$co -> doAddMessageController();
