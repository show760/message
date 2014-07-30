<?php
namespace controller;

require('../vendor/autoload.php');

use model\Model;

class ModUpdMessageController
{
    public function modUpdMessageController()
    {
        $loader = new \Twig_Loader_Filesystem('../template');
        $twig = new \Twig_Environment($loader);
        $id = $_POST['id'];
        $mo = new Model;
        $message = $mo->getModUpdMessage($id);
        $show = array( 'message' => $message, 'name' => 'name', 'text' => 'text','id' => 'id');
        echo $twig->render('modupdmessage.html', $show);
    }
}

$co = new ModUpdMessageController;
$co -> modUpdMessageController();
