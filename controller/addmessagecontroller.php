<?php
namespace controller;

require('../vendor/autoload.php');

class AddMessageController
{
    public function addMessageController()
    {
        $loader = new \Twig_Loader_Filesystem('../template');
        $twig = new \Twig_Environment($loader);
        $add = array( 'name' => 'name', 'text' => 'text');
        echo $twig->render('addmessagelist.html', $add);
    }
}

$co = new AddMessageController;
$co -> addMessageController();
