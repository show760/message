<?php
namespace controller;

require('../vendor/autoload.php');

class ReMessageController
{
    public function reMessageController()
    {
        $loader = new \Twig_Loader_Filesystem('../template');
        $twig = new \Twig_Environment($loader);
        $id = $_POST['id'];
        $show = array('id' => 'id' ,'id_value' => $id, 'name' => 'name', 'text' => 'text');
        echo $twig->render('remessagelist.html', $show);
    }
}
$co = new ReMessageController;
$co -> reMessageController();
