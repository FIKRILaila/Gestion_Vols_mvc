<?php

class UserController{
    
    public function auth(){

        if(isset($_POST['submit'])){
            $data['email'] = $_POST['email'];
            $result = User::login($data);
            if($result->email === $_POST['email'] && password_verify($_POST['password'],$result->password)){
            // die($result->nom."ddd");
                $_SESSION['logged'] = true ;
                $_SESSION['nom'] = $result->nom;
                $_SESSION['Role'] = $result->Role;
                $_SESSION['id_u'] = $result->id_u;
                if($result->Role === "admin"){
                    Redirect::to('homeAdmin');
                }
                if($result->Role === "user"){
                    Redirect::to('homeUser');
                }
            }else{
               Session::set('error','Email or password est incorrect');
               Redirect::to('login');
            }
        }
    }

    public function register(){
        if(isset($_POST['submit'])){
            $options = [
                'cost' => 12
            ];
            $password = password_hash($_POST['password'],PASSWORD_BCRYPT,$options);
            $data = array(
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'password' => $password,
                'dateNaiss' => $_POST['dateNaiss'],
                'email' => $_POST['email'],
                'phone' => $_POST['tel'],
            );
            $result = User::createUser($data);
            if($result === 'ok'){
                Session::set('success','Compte crée');
                Redirect::to('login');
            }else{
                echo $result;
            }

        }
    }

    public static function logout(){
        session_destroy();
    }
}

?>