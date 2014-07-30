<?php
namespace controller;

require('../vendor/autoload.php');
use model\Model;

class Controller
{
    public function showAllMessage()
    {
        //Twig
        $loader = new \Twig_Loader_Filesystem('../template');
        $twig = new \Twig_Environment($loader);
        $mo = new Model;
        $message = $mo->getAllMessage();
        $var = array ();
        for ($i = 0; $i < $message[1]; $i++) {
            $row = mysql_fetch_assoc($message[0]);
            $var[]=$row;
        }
        $remessage = $mo->getAllReMessage();
        $var2 = array();
        for ($i = 0; $i < $remessage[1]; $i++) {
            $row = mysql_fetch_assoc($remessage[0]);
            $var2[]=$row;
        }
        $show = array( 'message' => $var, 'remessage' => $var2);
        //var_dump($show);
        echo $twig->render('allmessage.html', $show);
    }
}

$co = new Controller;
$co -> showAllMessage();
