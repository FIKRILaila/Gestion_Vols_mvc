<?php

class EmployesController{
    public function getAllEmployes(){
        $employes = Eemploye::getAll();
        return $employes;
    }
}