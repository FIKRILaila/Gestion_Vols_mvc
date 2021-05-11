<?php

class HomeController{

    public function __construct(){
        session_start();
    }

    public function index($page){
       include('views/'.$page.'.php');
    }

}