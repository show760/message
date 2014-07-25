 <?php
 include "../model/model.php";

class do_add_message_controller
{
    public function conAddMessage()
    {   
        $name = $_POST['name'];
        $text = $_POST['text'];
        //echo $name;
        $mo = new model;
        $mo->modAddMessage($name, $text);
    }
}

$co = new do_add_message_controller;
$co -> conAddMessage();