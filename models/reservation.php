<?php

class Reservation{

    public static function getAll(){


            $reservation = DB::connect()->prepare('SELECT u.nom, u.prenom, r.Date, v.id_v, v.Depart, v.Destination  FROM reservation as r , user as u, vol as v WHERE r.id_v = v.id_v AND r.id_u = u.id_u ');
            $reservation->execute();
            return $reservation->fetchAll();
            $reservation = null;
    
    }

}


?>