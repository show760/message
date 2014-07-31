<?php
namespace controller;

use model\Model;

class Controller
{
    public function showAllMessage()
    {
        //Twig
        $loader = new \Twig_Loader_Filesystem('template');
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
        echo $twig->render('allmessage.html', $show);
    }
    public function addMessageController()
    {
        $loader = new \Twig_Loader_Filesystem('template');
        $twig = new \Twig_Environment($loader);
        $add = array( 'name' => 'name', 'text' => 'text');
        echo $twig->render('addmessagelist.html', $add);
    }
    public function doAddMessageController()
    {
        $name = $_POST['name'];
        $text = $_POST['text'];
        $mo = new Model;
        $mo->modAddMessage($name, $text);
    }
    public function delMessageController()
    {
        $loader = new \Twig_Loader_Filesystem('template');
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
    public function doDelMessageController()
    {
        $id = $_POST['id'];
        $mo = new Model;
        $mo->modDelMessage($id);
    }
    public function updMessageController()
    {
        $loader = new \Twig_Loader_Filesystem('template');
        $twig = new \Twig_Environment($loader);
        $mo = new Model;
        $message = $mo->getAllMessage();
        $var = array ();
        for ($i = 0; $i < $message[1]; $i++) {
            $row = mysql_fetch_assoc($message[0]);
            $var[]=$row;
        }
        $show =  array( 'message' => $var, 'id' => 'id');
        echo $twig->render('updmessagelist.html', $show);
    }
    public function modUpdMessageController()
    {
        $loader = new \Twig_Loader_Filesystem('template');
        $twig = new \Twig_Environment($loader);
        $id = $_POST['id'];
        $mo = new Model;
        $message = $mo->getModUpdMessage($id);
        $show = array( 'message' => $message, 'name' => 'name', 'text' => 'text','id' => 'id');
        echo $twig->render('modupdmessage.html', $show);
    }
    public function doUpdMessageController()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $text = $_POST['text'];
        $mo = new Model;
        $mo -> updMessage($id, $name, $text);
    }
}
