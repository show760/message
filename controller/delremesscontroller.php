<?php
namespace controller;

require('../vendor/autoload.php');

use model\Model;

class DoDelRemessageController
{
    public function doDelRemessageController()
    {
        $id = $_POST['id'];
        $mo = new Model;
        $mo->modDelReMessage($id);
    }
}
$co = new DoDelRemessageController;
$co -> doDelRemessageController();
