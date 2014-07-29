<?php
include "../model/model.php";

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
