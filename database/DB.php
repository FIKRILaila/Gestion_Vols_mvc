<?php
class DB{
    static public function connect(){
        $db = new PDO("mysql:host=localhost;dbname=employes","root","")
        $db->exec("set name utf8");
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        return $db;
    }

}