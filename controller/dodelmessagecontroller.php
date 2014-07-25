 <?php
 include "../model/model.php";

class do_del_message_controller
{
    public function conDelMessage()
    {   
        $id = $_POST['id'];
        //echo $name;
        $mo = new model;
        $mo->modDelMessage($id);
    }
}

$co = new do_del_message_controller;
$co -> conDelMessage();