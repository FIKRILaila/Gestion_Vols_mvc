<?php

class Reservation{

    public static function getAll(){

            $reservation = DB::connect()->prepare('SELECT u.nom, u.prenom, r.Date, v.id_v, r.Origin, r.Destination, r.type, r.nbr_person FROM reservation as r , user as u, vol as v WHERE r.id_v = v.id_v AND r.id_u = u.id_u ');
            $reservation->execute();
            return $reservation->fetchAll();
            $reservation = null;
    
    }


    public static function getAllById($id_u){
        $reservation = DB::connect()->prepare('SELECT r.id_r, r.Date, v.id_v, r.Origin, r.Destination, r.type, r.nbr_person FROM reservation as r , user as u, vol as v WHERE r.id_v = v.id_v AND r.id_u = u.id_u AND u.id_u = :id ');
        $reservation->execute(array(":id" => $id_u));
        return $reservation->fetchAll();
        $reservation = null;
    }

    public static function delete($id_r){
        try{
            $query = 'DELETE FROM reservation WHERE id_r = :id_r';
            $supp = DB::connect()->prepare($query);
            $supp->execute(array(":id_r" => $id_r));
            if($supp->execute()){
                return 'ok';
            }
        }catch(PDOException $ex){
            echo 'erreur' .$ex->getMessage();
        }
    }

    public static function add($data,$nbr){

        try{

            $db = new PDO("mysql:host=localhost;dbname=gestionvols","root","");
            $db->exec('SET NAMES utf8');
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

            $id_r = [];
            if($data->type==="aller-simple"){

                $newRes = $db->prepare('INSERT INTO reservation (id_u, id_v, Origin, Destination, Depart, type, nbr_person) VALUES (:id_u, :id_v, :Origin, :Destination, :Depart, "normal", :nbr_person)');
                $newRes->execute(array(":id_u"=>$_SESSION['id_u'],":id_v"=>$data->id_v,":Origin"=>$data->Depart,":Destination"=>$data->Destination,":Depart" => $data->Date_Depart,":nbr_person" => $nbr ));
              
                $id_r[0] = $db->lastInsertId();
            }else{

                $newRes1 = $db->prepare('INSERT INTO reservation (id_u, id_v, Origin, Destination, Depart, type, nbr_person) VALUES (:id_u, :id_v, :Origin, :Destination, :Depart, "aller", :nbr_person)');
                $newRes1->execute(array(":id_u"=>$_SESSION['id_u'],":id_v"=>$data->id_v,":Origin"=>$data->Depart,":Destination"=>$data->Destination,":Depart" => $data->Date_Depart,":nbr_person" => $nbr ));

                $id_r[0] = $db->lastInsertId();

                $newRes2 = $db->prepare('INSERT INTO reservation (id_u, id_v, Origin, Destination, Depart, type, nbr_person) VALUES (:id_u, :id_v, :Origin, :Destination, :Depart, "retour", :nbr_person)');
                $newRes2->execute(array(":id_u"=>$_SESSION['id_u'],":id_v"=>$data->id_v,":Origin"=>$data->Destination,":Destination"=>$data->Depart,":Depart" => $data->Date_Retour,":nbr_person" => $nbr ));               
                
                $id_r[1] = $db->lastInsertId();

                // $newRes = null;
                // $newRes1 = null;
                // $newRes1 = null;
                
                return $id_r;
            }
        }catch(PDOException $ex){
            echo 'erreur' .$ex->getMessage();
        }
    }

}


?>