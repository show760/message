<?php
namespace controller;

use model\ReMessage;
use controller\Controller;

class ReMessageController
{
    public function reMessageController()
    {
        $loader = new \Twig_Loader_Filesystem('template');
        $twig = new \Twig_Environment($loader);
        $id = $_POST['id'];
        $show = array('id' => 'id', 'id_value' => $id, 'name' => 'name', 'text' => 'text');
        echo $twig->render('remessagelist.html', $show);
    }
    public function addReMessageController()
    {
        $name = $_POST['name'];
        $text = $_POST['text'];
        $id = $_POST['id'];
        $mo = new ReMessage;
        $remessage = $mo->addReMessage($id, $name, $text);
        if ($remessage == 'true') {
            echo Controller::alert("新增回覆成功").Controller::overPage("/");
        }
    }
    public function doDelReMessageController()
    {
        $id = $_POST['id'];
        $mo = new ReMessage;
        $remessage = $mo->delReMessage($id);
        if ($remessage == 'true') {
            echo Controller::alert("刪除回覆成功").Controller::overPage("/");
        }
    }
    public function modReMessageListController()
    {
        $loader = new \Twig_Loader_Filesystem('template');
        $twig = new \Twig_Environment($loader);
        $id = $_POST['id'];
        $mo = new ReMessage;
        $message = $mo->giveModifyReMessage($id);
        $remessage = $message->fetch();
        $show = array( 'message' => $remessage, 'name' => 'name', 'text' => 'text','id' => 'id');
        echo $twig->render('updremessagelist.html', $show);
    }
    public function doUpdReMessageController()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $text = $_POST['text'];
        $mo = new ReMessage;
        $remessage = $mo -> modifyReMessage($id, $name, $text);
        if ($remessage == 'true') {
            echo Controller::alert("修改回覆成功").Controller::overPage("/");
        }
    }
}
