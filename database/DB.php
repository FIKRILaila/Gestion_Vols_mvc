<?php
class DB{
    
    static public function connect(){
        $db = new PDO("mysql:host=localhost;dbname=gestionvols","root","");
        $db->exec('SET NAMES utf8');
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        return $db;
    }

}

?>