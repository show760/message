<?php
namespace controller;

require('../vendor/autoload.php');

use model\Model;
use view\View;

class DelMessageController
{
    public function delMessageController()
    {
        $mo = new Model;
        $message = $mo->getAllMessage();
        $var = array ();
        for ($i = 0; $i < $message[1]; $i++) {
            $row = mysql_fetch_assoc($message[0]);
            $var[]=$row;
        }
        $show =  array(count($var), $var);
        $del = 'id';
        return View::delMessageList($del, $show, "../template/delmessagelist.php");
    }
}

$co = new DelMessageController;
$co -> delMessageController();
