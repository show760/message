<?php
namespace controller;

require('../vendor/autoload.php');

use model\Model;

class ModReMessageListController
{
    public function modReMessageListController()
    {
        $loader = new \Twig_Loader_Filesystem('../template');
        $twig = new \Twig_Environment($loader);
        $id = $_POST['id'];
        $mo = new Model;
        $message = $mo->getUpdReMessage($id);
        $show = array( 'message' => $message, 'name' => 'name', 'text' => 'text','id' => 'id');
        echo $twig->render('updremessagelist.html', $show);
    }
}

$co = new ModReMessageListController;
$co -> modReMessageListController();
