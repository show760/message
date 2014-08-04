<?php

namespace model;

use PHPUnit_Framework_TestCase;
use model\Model;

class ModelText extends PHPUnit_Framework_TestCase
{
    public function testGetAllMessage()
    {
        $mo = new Model;
        $mo -> testModelConnect();
        $test = $mo -> getAllMessage();
        $this->assertContains('SELECT * FROM `message`', $test->queryString);
    }
    public function testModAddMessage()
    {
        $mo = new Model;
        $mo -> testModelConnect();
        $test = $mo -> modAddMessage("james", "test phpunit");
        $this->assertTrue($test);
    }
    public function testModDelMessage()
    {
        $mo = new Model;
        $mo -> testModelConnect();
        $id = $mo -> testFindMessage("james", "test phpunit");
        $test = $mo -> modDelMessage($id['message_Id']);
        $this->assertTrue($test);
    }
    public function testModUpdMessage()
    {
        $mo = new Model;
        $mo -> testModelConnect();
        $get = $mo -> getModUpdMessage('145');
        $this->assertContains('145', $get['message_Id']);
        $this->assertContains('phpunit', $get['message_Name']);
        $this->assertContains('testupd', $get['message_Text']);
        $testupd = $mo -> updMessage($get['message_Id'], $get['message_Name'], $get['message_Text']);
        $this->assertTrue($testupd);
    }
    public function testGetReAllMessage()
    {
        $mo = new Model;
        $mo -> testModelConnect();
        $test = $mo -> getAllReMessage();
        $this->assertContains(
            'SELECT `remessage_Id`,`message_Id` AS M_ID ,`remessage_Time`,`remessage_Name`,`remessage_Text` 
            FROM `remessage`',
            $test->queryString
        );
    }
    public function testModAddReMessage()
    {
        $mo = new Model;
        $mo -> testModelConnect();
        $test = $mo -> modAddReMessage("145", "james", 'phpunittest');
        $this->assertTrue($test);
    }
    public function testModDelReMessage()
    {
        $mo = new Model;
        $mo -> testModelConnect();
        $id = $mo -> testFindReMessage("james", "phpunittest");
        $test = $mo -> modDelReMessage($id['remessage_Id']);
        $this->assertTrue($test);
    }
    public function testUpdReMessage()
    {
        $mo = new Model;
        $mo -> testModelConnect();
        $get = $mo -> getUpdReMessage('11');
        $this->assertContains('11', $get['remessage_Id']);
        $this->assertContains('kobe', $get['remessage_Name']);
        $this->assertContains('testphpunit', $get['remessage_Text']);
        $testre = $mo -> updReMessage($get['remessage_Id'], $get['remessage_Name'], $get['remessage_Text']);
        $this->assertTrue($testre);
    }
}
