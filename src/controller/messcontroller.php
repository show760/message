<?php
namespace controller;

use model\Message;
use model\ReMessage;
use controller\Controller;

class MessageController
{
    public function showAllMessage()
    {
        //Twig
        $loader = new \Twig_Loader_Filesystem('template');
        $twig = new \Twig_Environment($loader);
        $mo = new Message;
        $message = $mo->getAllMessage();
        $var = array ();
        while ($row = $message->fetch()) {
            $var[]=$row;
        }
        $remo = new ReMessage;
        $remessage = $remo->getAllReMessage();
        $var2 = array();
        while ($row = $remessage->fetch()) {
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
        $mo = new Message;
        $message = $mo->addMessage($name, $text);
        if ($message == 'true') {
            echo Controller::alert("新增留言成功").Controller::overPage("/");
        }
    }
    public function delMessageController()
    {
        $loader = new \Twig_Loader_Filesystem('template');
        $twig = new \Twig_Environment($loader);
        $mo = new Message;
        $message = $mo->getAllMessage();
        $var = array ();
        while ($row = $message->fetch()) {
            $var[]=$row;
        }
        $show =  array('message' => $var,'del' => 'id');
        echo $twig->render('delmessagelist.html', $show);
    }
    public function doDelMessageController()
    {
        $id = $_POST['id'];
        $mo = new Message;
        $message = $mo->delMessage($id);
        if ($message == 'true') {
            echo Controller::alert("刪除留言成功").Controller::overPage("/message/del");
        }
    }
    public function updMessageController()
    {
        $loader = new \Twig_Loader_Filesystem('template');
        $twig = new \Twig_Environment($loader);
        $mo = new Message;
        $message = $mo->getAllMessage();
        $var = array ();
        while ($row = $message->fetch()) {
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
        $mo = new Message;
        $message = $mo->giveModifyMessage($id);
        $modmessage = $message->fetch();
        $show = array( 'message' => $modmessage, 'name' => 'name', 'text' => 'text','id' => 'id');
        echo $twig->render('modupdmessage.html', $show);
    }
    public function doUpdMessageController()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $text = $_POST['text'];
        $mo = new Message;
        $message = $mo -> modifyMessage($id, $name, $text);
        if ($message == 'true') {
            echo Controller::alert("修改留言成功").Controller::overPage("/");
        }
    }
}
