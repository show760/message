<?php
namespace controller;

class Controller
{
    public function alert($string)
    {
        $content=
<<<CONTENT
        <script language="JavaScript">
            alert("{$string}");
        </script>
CONTENT;
        return $content;
    }
    public function overPage($goto)
    {
        return "<script>window.location.replace('{$goto}')</script>";
    }
}
