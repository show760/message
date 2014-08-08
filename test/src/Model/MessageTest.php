<?php

namespace model;

use PHPUnit_Framework_TestCase;
use model\Message;

class MessageText extends PHPUnit_Framework_TestCase
{
    public function testGetAllMessage()
    {
        $mo = new Message;
        $mo -> testDbConnect();
        $test = $mo -> getAllMessage();
        $this->assertContains('SELECT * FROM `message`', $test->queryString);
    }
    public function testaddMessage()
    {
        $mo = new Message;
        $mo -> testDbConnect();
        $test = $mo -> addMessage("james", "test phpunit");
        $this->assertTrue($test);
        $lastid = $mo->getLastId();
        return $lastid;
    }
    /**
     * @depends testaddMessage
     */
    public function testdelMessage($lastid)
    {
        $mo = new Message;
        $mo -> testDbConnect();
        $test = $mo -> delMessage($lastid);
        $this->assertTrue($test);
    }
    public function testModifyMessage()
    {
        $mo = new Message;
        $mo -> testDbConnect();
        $message = $mo -> giveModifyMessage('145');
        $get = $message->fetch();
        $this->assertContains('145', $get['message_Id']);
        $this->assertContains('phpunit', $get['message_Name']);
        $this->assertContains('testupd', $get['message_Text']);
        $testupd = $mo -> modifyMessage($get['message_Id'], $get['message_Name'], $get['message_Text']);
        $this->assertTrue($testupd);
    }
}
