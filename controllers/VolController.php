<?php
class VolController{

    public function getAllVols(){
        $vol = Vol::getAll();
        return $vol;
    }
    public function searchVols(){
        if(isset($_POST['search'])){
            $data = array(
                'Depart' => $_POST['Depart'],
                'Destination' => $_POST['Destination'],
            );
            $vol = Vol::search($data);
            return $vol;
        }
    }
    public function getOneVol(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_v' => $_POST['id']
            );
            $vol = Vol::getVol($data);
            return $vol;
        }
    }
    public function getOneVolR(){
        if(isset($_POST['book'])){
            $data = array(
                'id_v' => $_POST['id_v']
            );
            $vol = Vol::getVol($data);
            return $vol;
        }
    }
    public function deleteVol(){
        if(isset($_POST['id'])){
            $data['id_v'] = $_POST['id'];
            $result = Vol::delete($data);
            if($result === 'ok'){
                Session::set('error','Vous avez supprimer un vol');
                Redirect::to('volsAdmin');
            }else{
                echo $resultat;
            }
        }
    }
    public function addVol(){
        if(isset($_POST['submit'])){
            $data = array(
                'Depart' => $_POST['Depart'],
                'Destination' => $_POST['Destination'],
                'Date_Depart' => $_POST['dateDepart'],
                'Date_Destination' => $_POST['dateDestination'],
                'nbr_places' => $_POST['nbrPlaces'],
                'Date_Retour' => $_POST['dateRetour'],
                'type' => $_POST['type'],

            );
            $resultat = Vol::add($data);
            if($resultat === 'ok'){
                Session::set('success','Vous avez ajouter un vol');
                Redirect::to('volsAdmin');
            }else{
               echo $resultat;
            }

        }
    }
    public function updateVol(){
        if(isset($_POST['update'])){
            $data = array(
                'id_v' => $_POST['id'],
                'Depart' => $_POST['Depart'],
                'Destination' => $_POST['Destination'],
                'Date_Depart' => $_POST['dateDepart'],
                'Date_Destination' => $_POST['dateDestination'],
                'nbr_places' => $_POST['nbrPlaces'],
                'Date_Retour' => $_POST['dateRetour'],
                'type' => $_POST['type'],
            );
            $resultat = Vol::update($data);
            if($resultat === 'ok'){
                Session::set('success','Vous avez modifier un vol');
                Redirect::to('volsAdmin');
            }else{
               echo $resultat;
            }

        }
    }
}
?>