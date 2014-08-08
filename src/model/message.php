<?php
namespace model;

use model\Model;

class Message extends Model
{
    protected function initData()
    {
        $this->table = '`message`';
        $this->columns = array(
            'message_Name',
            'message_Text'
        );
        $this->mod = array(
            'message_Name',
            'message_Text'
        );
        $this->id = '`message_Id`';
    }
    public function getAllMessage()
    {
        return $this->getAll();
    }
    public function addMessage($name, $text)
    {
        return $this->add($name, $text);
    }
    public function delMessage($id)
    {
        return $this->del($id);
    }
    public function giveModifyMessage($id)
    {
        return $this->giveModify($id);
    }
    public function modifyMessage($id, $name, $text)
    {
        return $this->modify($id, $name, $text);
    }
    public function testFindMessage($name, $text)
    {
        return $this->test($name, $text);
    }
    public function getLastId()
    {
        return $this->lastId();
    }
}
