<?php

class PassagerController{

    public function addPassager($id_r){
        if(isset($_POST['book'])){
            $nbr = $_POST['nbr_person'];
            $data = [];
            for($i=0;$i<$nbr;$i++){
                $data['nom'.$i] = $_POST['nom'.$i];
                $data['prenom'.$i] = $_POST['prenom'.$i];
                $data['dateNaiss'.$i] = $_POST['dateNaiss'.$i];
            }
            Passager::add($data,$id_r);
            Redirect::to('mesReservation');
        }
       
    }
}



?>