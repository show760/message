<?php
namespace model;

use model\Model;

class ReMessage extends Model
{
    protected function initData()
    {
        $this->table = '`remessage`';
        $this->columns = array(
        	   'message_Id',
            'remessage_Name',
            'remessage_Text'
        );
        $this->mod = array(
            'remessage_Name',
            'remessage_Text'
        );
        $this->id = '`remessage_Id`';
    }
    public function getAllReMessage()
    {
        return $this->getAll();
    }
    public function addReMessage($id, $name, $text)
    {
        return $this->add($id, $name, $text);
    }
    public function delReMessage($id)
    {
        return $this->del($id);
    }
    public function giveModifyReMessage($id)
    {
        return $this->giveModify($id);
    }
    public function modifyReMessage($id, $name, $text)
    {
        return $this->modify($id, $name, $text);
    }
    public function getLastId()
    {
        return $this->LastId();
    }
}
