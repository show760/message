<?php
include "../model/model.php";

class DoDelRemessageController
{
    public function doDelRemessageController()
    {
        $id = $_POST['id'];
        $mo = new Model;
        $mo->modDelReMessage($id);
    }
}
$co = new doDelRemessageController;
