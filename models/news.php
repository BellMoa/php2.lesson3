<?php
require_once  __DIR__ . '/../classes/DB.php';
class News{
    public $id;
    public $title;
    public $text;
    public $date;

    public static function getAll(){
    $db =new DB();
    return $db->querry("SELECT * FROM news",'News');
}
}