<?php
namespace controller;

use PHPUnit_Framework_TestCase;
use controller\ReMessageController;

class ReMessageControllerTest extends PHPUnit_Framework_TestCase
{
    public function testReMessageController()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://message/remessage/add');
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);//啟用POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('id' => '1')));
        $content = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        preg_match("/回覆姓名：<input type='text' name='name' >/", $content, $match);
        $this->assertCount(1, $match);
        preg_match("/<textarea cols='30' rows='3' name='text'>/", $content, $match);
        $this->assertCount(1, $match);
        preg_match("/<input type='hidden' name='id' value='1'>/", $content, $match);
        $this->assertCount(1, $match);
        curl_close($ch);
    }
    public function testModReMessageListController()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://message/remessage/mod');
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);//啟用POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('id' => '11')));
        $content = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        preg_match("/回覆姓名：<input type='text' name='name' value ='kobe' >/", $content, $match);
        $this->assertCount(1, $match);
        preg_match("/<textarea cols='30' rows='3' name='text'>0731160900/", $content, $match);
        $this->assertCount(1, $match);
        preg_match("/<input type='hidden' name='id' value ='11'>/", $content, $match);
        $this->assertCount(1, $match);
        curl_close($ch);
    }
}
