<?php
include "../view/view.php";

class remesscontroller
{
    public function showReMessList()
    {
        $id = $_POST['id'];
        $addre =array ('name', 'text');
        //var_dump($addre);
        return view::reMessageList($id, $addre, '../template/remessagelist.php');
    }
}
$co = new remesscontroller;
$co -> showReMessList();
