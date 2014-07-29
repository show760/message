<?php
namespace view;

class View
{
    public function allMessage($show, $s)
    {
        include "{$s}";
    }
    public function addMessageList($add, $s)
    {
        include "{$s}";
    }
    public function delMessageList($del, $show, $s)
    {
        include "{$s}";
    }
    public function updMessageList($upd, $show, $s)
    {
        include "{$s}";
    }
    public function modupdMessage($message, $upd, $s)
    {
        include "{$s}";
    }
    public function reMessageList($id, $addre, $s)
    {
        include "{$s}";
    }
    public function modReMessageList($message, $upd, $s)
    {
        include "{$s}";
    }
}
