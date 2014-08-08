<?php
use Pux\Mux;

$mux = new Mux;
/* message controller function */
/* show all message and remessage */
$mux -> add('/', ['controller\MessageController', 'showAllMessage']);
$mux->get('/message', ['controller\MessageController', 'showAllMessage']);
/* add message */
$mux->get('/message/add', ['controller\MessageController', 'addMessageController']);
$mux->post('/message/doadd', ['controller\MessageController', 'doAddMessageController']);
/* del message */
$mux->get('/message/del', ['controller\MessageController', 'delMessageController']);
$mux->post('/message/dodel', ['controller\MessageController', 'doDelMessageController']);
/* modify message  */
$mux->get('/message/mod', ['controller\MessageController', 'updMessageController']);
$mux->post('/message/modify', ['controller\MessageController', 'modUpdMessageController']);
$mux->post('/message/domod', ['controller\MessageController', 'doUpdMessageController']);
/* remessage controller function */
/* add remessage */
$mux->post('/remessage/add', ['controller\ReMessageController', 'reMessageController']);
$mux->post('/remessage/doadd', ['controller\ReMessageController', 'addReMessageController']);
/* del remessage */
$mux->post('/remessage/dodel', ['controller\ReMessageController', 'doDelReMessageController']);
/* modify remessage */
$mux->post('/remessage/mod', ['controller\ReMessageController', 'modReMessageListController']);
$mux->post('/remessage/domod', ['controller\ReMessageController', 'doUpdReMessageController']);

$mux->sort();
return $mux;
