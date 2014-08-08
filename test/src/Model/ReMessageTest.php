<?php

namespace model;

use PHPUnit_Framework_TestCase;
use model\ReMessage;

class ReMessageText extends PHPUnit_Framework_TestCase
{
    public function testGetReAllMessage()
    {
        $mo = new ReMessage;
        $mo -> testDbConnect();
        $test = $mo -> getAllReMessage();
        $this->assertContains(
            'SELECT * FROM `remessage`',
            $test->queryString
        );
    }
    public function testAddReMessage()
    {
        $mo = new ReMessage;
        $mo -> testDbConnect();
        $test = $mo -> addReMessage("145", "james", 'phpunittest');
        $this->assertTrue($test);
        $lastid = $mo->getLastId();
        return $lastid;
    }
    /**
     * @depends testAddReMessage
     */
    public function testDelReMessage($lastid)
    {
        $mo = new ReMessage;
        $mo -> testDbConnect();
        $test = $mo -> delReMessage($lastid);
        $this->assertTrue($test);
    }
    public function testModifyReMessage()
    {
        $mo = new ReMessage;
        $mo -> testDbConnect();
        $message = $mo -> giveModifyReMessage('11');
        $get = $message->fetch();
        $this->assertContains('11', $get['remessage_Id']);
        $this->assertContains('kobe', $get['remessage_Name']);
        $this->assertContains('testphpunit', $get['remessage_Text']);
        $testre = $mo -> modifyReMessage($get['remessage_Id'], $get['remessage_Name'], $get['remessage_Text']);
        $this->assertTrue($testre);
    }
}
