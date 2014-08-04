<?php
namespace controller;

use PHPUnit_Framework_TestCase;
use controller\Controller;

class ControllerTest extends PHPUnit_Framework_TestCase
{
    public function testShowAllMessage()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://message/');
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $content = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        preg_match('/<+input type="hidden" name="id" value="+\d+">/', $content, $match);
        curl_close($ch);
        $this->assertCount(1, $match);
    }
    public function testAddMessageController()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://message/message/add');
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $content = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        preg_match("/<input type='text' name='name' >/", $content, $match);
        $this->assertCount(1, $match);
        preg_match("/<textarea cols='30' rows='3' name='text'>/", $content, $match);
        $this->assertCount(1, $match);
        curl_close($ch);
    }
    public function testDelMessageController()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://message/message/del');
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $content = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        preg_match("/留言編號：+\d+/", $content, $match);
        $this->assertCount(1, $match);
        preg_match("/<input type='text' name='id' >/", $content, $match);
        $this->assertCount(1, $match);
        curl_close($ch);
    }
    public function testUpdMessageController()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://message/message/mod');
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $content = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        preg_match("/留言編號：+\d+/", $content, $match);
        $this->assertCount(1, $match);
        preg_match("/<input type='text' name='id' >/", $content, $match);
        $this->assertCount(1, $match);
        curl_close($ch);
    }
    public function testModUpdMessageController()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://message/message/modify');
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);// 啟用POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array("id" =>"1" )));
        $content = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        preg_match("/留言編號：+\d+/", $content, $match);
        $this->assertCount(1, $match);
        preg_match("/姓名：<input type='text' name='name'/", $content, $match);
        $this->assertCount(1, $match);
        preg_match("/<textarea cols='30' rows='3' name='text'>/", $content, $match);
        $this->assertCount(1, $match);
        curl_close($ch);
    }
}
