<?php
namespace controller;

require('../vendor/autoload.php');

use model\Model;

class DoDelMessageController
{
    public function doDelMessageController()
    {
        $id = $_POST['id'];
        $mo = new Model;
        $mo->modDelMessage($id);
    }
}

$co = new DoDelMessageController;
$co -> doDelMessageController();
