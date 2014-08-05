<?php
use Pux\Mux;

$mux = new Mux;
/* message controller function */
/* show all message and remessage */
$mux -> add('/', ['controller\Controller', 'showAllMessage']);
$mux->get('/message', ['controller\Controller', 'showAllMessage']);
/* add message */
$mux->get('/message/add', ['controller\Controller', 'addMessageController']);
$mux->post('/message/doadd', ['controller\Controller', 'doAddMessageController']);
/* del message */
$mux->get('/message/del', ['controller\Controller', 'delMessageController']);
$mux->post('/message/dodel', ['controller\Controller', 'doDelMessageController']);
/* modify message  */
$mux->get('/message/mod', ['controller\Controller', 'updMessageController']);
$mux->post('/message/modify', ['controller\Controller', 'modUpdMessageController']);
$mux->post('/message/domod', ['controller\Controller', 'doUpdMessageController']);
/* remessage controller function */
/* add remessage */
$mux->post('/remessage/add', ['controller\ReMessageController', 'reMessageController']);
$mux->post('/remessage/doadd', ['controller\ReMessageController', 'addRemessageController']);
/* del remessage */
$mux->post('/remessage/dodel', ['controller\ReMessageController', 'doDelRemessageController']);
/* modify remessage */
$mux->post('/remessage/mod', ['controller\ReMessageController', 'modReMessageListController']);
$mux->post('/remessage/domod', ['controller\ReMessageController', 'doUpdReMessageController']);

$mux->sort();
return $mux;
