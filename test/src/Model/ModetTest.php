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
}