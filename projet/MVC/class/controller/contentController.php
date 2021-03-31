<?php

class contentController
{
    private $array;

    public function __construct()
    {
        include_once "MVC/class/model/contentModel.php";
    }

    public function viewContent()
    {
        $content = new contentModel;
        $data  = $content->viewAllContentByOrder("name");
        return $data;
    }
}
