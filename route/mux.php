<?php
require 'vendor/autoload.php';
use Pux\Mux;
$mux = new Mux;

/*
 * message controller function
 */
$mux->add('/', ['controller\Controller','showAllMessage']);
$mux->get('/message', ['controller\Controller','showAllMessage']);
$mux->get('/message/add', ['controller\Controller','addMessageController']);
$mux->get('/message/del', ['controller\Controller','delMessageController']);
$mux->get('/message/mod', ['controller\Controller','updMessageController']);
$mux->post('/message/doadd', ['controller\Controller','doAddMessageController']);
$mux->post('/message/dodel', ['controller\Controller','doDelMessageController']);
$mux->post('/message/modify', ['controller\Controller','modUpdMessageController']);
$mux->post('/message/domod', ['controller\Controller','doUpdMessageController']);
/*
 * remessage controller function
 */
$mux->post('/remessage/add', ['controller\ReMessageController','reMessageController']);
$mux->post('/remessage/doadd', ['controller\ReMessageController','addRemessageController']);
$mux->post('/remessage/dodel', ['controller\ReMessageController','doDelRemessageController']);
$mux->post('/remessage/mod', ['controller\ReMessageController','modReMessageListController']);
$mux->post('/remessage/domod', ['controller\ReMessageController','doUpdReMessageController']);



$mux->sort();
return $mux;
