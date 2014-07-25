 <?php
 include "../model/model.php";

class do_upd_message_controller
{
    public function conUpdMessage()
    {   
        $id = $_POST['id'];
        $name = $_POST['name'];
        $text = $_POST['text'];
        $mo = new model;
        $mo -> UpdMessage($id, $name, $text);
    }
}

$co = new do_upd_message_controller;
$co -> conUpdMessage();