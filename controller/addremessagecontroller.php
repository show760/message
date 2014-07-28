 <?php
 include "../model/model.php";

class add_remessage_controller
{
    public function conAddReMessage()
    {   
        $name = $_POST['name'];
        $text = $_POST['text'];
        $id = $_POST['id'];
        //echo $name;
        $mo = new model;
        $mo->modAddReMessage($id, $name, $text);
    }
}

$co = new add_remessage_controller;
$co -> conAddReMessage();