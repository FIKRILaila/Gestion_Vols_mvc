<?php

class ReservationController{


    public function getAllReservations(){
        $vol = Reservation::getAll();
        return $vol;
    }
    
}


?>