<?php

if(isset($_POST['id'])){
    $delete= new ReservationController();
    $delete->deleteReservation();
}

?>