<?php

class Vol{

    static public function getAll(){
        $vol = DB::connect()->prepare('SELECT * FROM vol');
        $vol->execute();
        return $vol->fetchAll();
        $vol = null;
    }

    static public function getVol($data){
        try{
            $query = 'SELECT * FROM vol WHERE id_v = :id_v ';
            $tmp =DB::connect()->prepare($query);
            $tmp->execute(array(":id_v"=>$data['id_v']));
            $vol = $tmp->fetch(PDO::FETCH_OBJ);
            return $vol;

        }catch(PDOException $ex){
            echo 'erreur' .$ex->getMessage();
        }
    }

    static public function add($data){
        if($data['type']==="aller-simple"){
            $newVol = DB::connect()->prepare('INSERT INTO vol (Depart,Destination,nbr_places,Date_Depart,Date_Destination,Date_Retour,type) VALUES (:Depart,:Destination,:nbr_places,:Date_Depart,:Date_Destination,NULL,:type)');
    
            $newVol = $newVol->execute(array(":Depart"=>$data['Depart'],":Destination"=>$data['Destination'],":nbr_places"=>$data['nbr_places'],":Date_Depart"=>$data['Date_Depart'],":Date_Destination" => $data['Date_Destination'],":type" => $data['type']));
        }else{
            $newVol = DB::connect()->prepare('INSERT INTO vol (Depart,Destination,nbr_places,Date_Depart,Date_Destination,Date_Retour,type) VALUES (:Depart,:Destination,:nbr_places,:Date_Depart,:Date_Destination,:Date_Retour,:type)');
    
            $newVol = $newVol->execute(array(":Depart"=>$data['Depart'],":Destination"=>$data['Destination'],":nbr_places"=>$data['nbr_places'],":Date_Depart"=>$data['Date_Depart'],":Date_Destination"=>$data['Date_Destination'],":Date_Retour"=>$data['Date_Retour'],":type"=>$data['type']));
        }
        
        if($newVol){
            return 'ok';
        }else{
            return 'error';
        }
        $newVol = null;

    }
    static public function update($data){
        if($data['type']==="aller-simple"){

            $newVol = DB::connect()->prepare('UPDATE vol SET Depart = :Depart ,Destination = :Destination, nbr_places = :nbr_places ,Date_Depart = :Date_Depart ,Date_Destination = :Date_Destination, Date_Retour = NULL,type = :type  WHERE id_v = :id_v');
    
            $newVol = $newVol->execute(array(":Depart"=>$data['Depart'],":Destination"=>$data['Destination'],":nbr_places"=>$data['nbr_places'],":Date_Depart"=>$data['Date_Depart'],":Date_Destination"=>$data['Date_Destination'],":id_v"=>$data['id_v'],":type"=>$data['type']));
        
        }else{

            $newVol = DB::connect()->prepare('UPDATE vol SET Depart = :Depart ,Destination = :Destination, nbr_places = :nbr_places ,Date_Depart = :Date_Depart ,Date_Destination = :Date_Destination, Date_Retour = :Date_Retour,type = :type  WHERE id_v = :id_v');
    
            $newVol = $newVol->execute(array(":Depart"=>$data['Depart'],":Destination"=>$data['Destination'],":nbr_places"=>$data['nbr_places'],":Date_Depart"=>$data['Date_Depart'],":Date_Destination"=>$data['Date_Destination'],":id_v"=>$data['id_v'],":Date_Retour"=>$data['Date_Retour'],":type"=>$data['type']));
        }
        
        if($newVol){
            return 'ok';
        }else{
            return 'error';
        }
        $newVol = null;

    }
    static public function delete($data){
        try{
            $query = 'DELETE FROM vol WHERE id_v = :id_v';
            $supp = DB::connect()->prepare($query);
            $supp->execute(array(":id_v" => $data['id_v']));
            if($supp->execute()){
                return 'ok';
            }
        }catch(PDOException $ex){
            echo 'erreur' .$ex->getMessage();
        }
    }

}

?>