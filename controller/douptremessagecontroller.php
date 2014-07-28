 <?php
 include "../model/model.php";

class do_upd_remessage_controller
{
    public function conUpdReMessage()
    {   
        $id = $_POST['id'];
        $name = $_POST['name'];
        $text = $_POST['text'];
        $mo = new model;
        $mo -> UpdReMessage($id, $name, $text);
    }
}

$co = new do_upd_remessage_controller;
$co -> conUpdReMessage();