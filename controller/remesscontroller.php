<?php
include "../view/view.php";

class ReMessageController
{
    public function reMessageController()
    {
        $id = $_POST['id'];
        $addre =array ('name', 'text');
        return View::reMessageList($id, $addre, '../template/remessagelist.php');
    }
}
$co = new ReMessageController;
