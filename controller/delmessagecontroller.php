<?php
namespace controller;

require('../vendor/autoload.php');

use model\Model;

class DelMessageController
{
    public function delMessageController()
    {
        $loader = new \Twig_Loader_Filesystem('../template');
        $twig = new \Twig_Environment($loader);
        $mo = new Model;
        $message = $mo->getAllMessage();
        $var = array ();
        for ($i = 0; $i < $message[1]; $i++) {
            $row = mysql_fetch_assoc($message[0]);
            $var[]=$row;
        }
        $show =  array('message' => $var,'del' => 'id');
        echo $twig->render('delmessagelist.html', $show);
    }
}

$co = new DelMessageController;
$co -> delMessageController();
