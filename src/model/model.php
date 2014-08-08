<?php
namespace model;

use \PDO;
use model\Db;

class Model extends Db
{
    protected $table;
    protected $columns;
    protected $modify;
    protected $id;
    protected $lastid;
    private function loadTable()
    {
        return $this->table;
    }
    private function loadColumns()
    {
        return $this->columns;
    }
    private function loadId()
    {
        return $this->id;
    }
    private function loadMod()
    {
        return $this->mod;
    }
    protected function getAll()
    {
        $this->initData();
        $table = $this->loadTable();
        $data = $this->db->query('SELECT * FROM ' .$table);
        $data -> setFetchMode(PDO::FETCH_ASSOC);
        return $data;
    }
    protected function add()
    {
        $this->initData();
        $table = $this->loadTable();
        $columns = $this->loadColumns();
        $cols = implode('`, `', $columns);
        $args = func_get_args();
        $vals = implode("', '", $args);
        $data = $this->db->prepare("INSERT INTO " .$table."( `".$cols."`) VALUES ( '".$vals."')");
        $message = $data -> execute();
        $this->lastid = $this->db->lastInsertId();
        return $message;
    }
    protected function lastId()
    {
        return $this->lastid;
    }
    protected function del($did)
    {
        $this->initData();
        $table = $this->loadTable();
        $del = $this->loadId();
        $data = $this->db->prepare("DELETE FROM " .$table." WHERE ".$del." = '".$did."'");
        $message = $data -> execute();
        return $message;
    }
    protected function giveModify($mid)
    {
        $this->initData();
        $table = $this->loadTable();
        $modify = $this->loadId();
        $message = $this->db->query("SELECT * FROM ".$table." WHERE ".$modify." = '".$mid."'");
        $message -> setFetchMode(PDO::FETCH_ASSOC);
        return $message;
    }
    protected function modify()
    {
        $this->initData();
        $table = $this->loadTable();
        $mod = $this->loadMod();
        $num = func_num_args();
        $args = func_get_args();
        $mid = $args[0];
        $arr = array();
        for ($i=0; $i < ($num-1); $i++) {
            $arr[$i] = "`".$mod[$i]."` = '".$args[$i+1]."'";
        }
        $vals = implode(', ', $arr);
        $modify = $this->loadId();
        $data = $this->db->prepare(
            "UPDATE ".$table." SET " .$vals. " WHERE " .$modify." = '".$mid."'"
        );
        $message = $data -> execute();
        return $message;
    }
}
