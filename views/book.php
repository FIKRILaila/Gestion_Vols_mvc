<?php

    if(isset($_POST['book'])){

        $newRes = new ReservationController();
        $id_r = $newRes->newReservation();
        $pass = new PassagerController();
        $pass->addPassager($id_r);

    }

?>