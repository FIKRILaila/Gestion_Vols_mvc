<?php

class Passager{
    public static function add($data,$id_r){
        
        try{
            for($j=0;$j<sizeof($id_r);$j++){

            for($i=0;$i<sizeof($data)/3;$i++){
                $query = 'INSERT INTO passager (id_r, nom, prenom, dateNaiss) VALUE (:id_r, :nom, :prenom, :dateNaiss)';
                $log = DB::connect()->prepare($query);
                
                $log->execute(array(":id_r" => $id_r[$j],":nom" => $data['nom'.$i] , ":prenom" => $data['prenom'.$i] , ":dateNaiss" => $data['dateNaiss'.$i]));
            }
        }
            
        }catch(PDOException $ex){
            echo 'erreur' .$ex->getMessage();
        }
        
    }
}

?>