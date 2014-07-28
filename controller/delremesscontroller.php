 <?php
 include "../model/model.php";

class do_del_remessage_controller
{
    public function conDelReMessage()
    {   
        $id = $_POST['id'];
        //echo $id;
        $mo = new model;
        $mo->modDelReMessage($id);
    }
}

$co = new do_del_remessage_controller;
$co -> conDelReMessage();