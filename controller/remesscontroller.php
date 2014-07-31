<?php
namespace controller;

require('vendor/autoload.php');
use model\Model;

class ReMessageController
{
    public function reMessageController()
    {
        $loader = new \Twig_Loader_Filesystem('template');
        $twig = new \Twig_Environment($loader);
        $id = $_POST['id'];
        $show = array('id' => 'id' ,'id_value' => $id, 'name' => 'name', 'text' => 'text');
        echo $twig->render('remessagelist.html', $show);
    }
    public function addRemessageController()
    {
        $name = $_POST['name'];
        $text = $_POST['text'];
        $id = $_POST['id'];
        $mo = new Model;
        $mo->modAddReMessage($id, $name, $text);
    }
    public function doDelRemessageController()
    {
        $id = $_POST['id'];
        $mo = new Model;
        $mo->modDelReMessage($id);
    }
    public function modReMessageListController()
    {
        $loader = new \Twig_Loader_Filesystem('template');
        $twig = new \Twig_Environment($loader);
        $id = $_POST['id'];
        $mo = new Model;
        $message = $mo->getUpdReMessage($id);
        $show = array( 'message' => $message, 'name' => 'name', 'text' => 'text','id' => 'id');
        echo $twig->render('updremessagelist.html', $show);
    }
    public function doUpdReMessageController()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $text = $_POST['text'];
        $mo = new Model;
        $mo -> updReMessage($id, $name, $text);
    }
}
