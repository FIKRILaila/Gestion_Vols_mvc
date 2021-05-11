<?php

class ReservationController{


    public function getAllReservations(){
        $reservation = Reservation::getAll();
        return $reservation;
    }

    public function getAllReservationsById(){
        $id_u =  $_SESSION['id_u'];
        $reservation = Reservation::getAllById( $id_u);
        return $reservation;
    }
    
    public function deleteReservation(){
        if(isset($_POST['id'])){ 
            $result = Reservation::delete($_POST['id']);
            if($result === 'ok'){
                Redirect::to('mesReservation');
            }else{
                echo $resultat;
            }
        }
    }

    public function newReservation(){

        if(isset($_POST['book'])){
            $vol = new VolController();
            $vol = $vol->getOneVolR();
            $nbr = $_POST['nbr_person'];
            $result = Reservation::add($vol,$nbr);
            // Redirect::to('mesReservation');
            return $result;
        }
        
    }
}


?>