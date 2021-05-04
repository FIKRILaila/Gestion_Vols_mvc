<?php
class User
{

    public static function createUser($data)
    {
        $newUser = DB::connect()->prepare('INSERT INTO user (email,password,nom,prenom,dateNaiss,phone,Role) VALUES (:email,:password,:nom,:prenom,:dateNaiss,:phone,"user")');
        $newUser = $newUser->execute(array(":nom"=>$data['nom'],":prenom"=>$data['prenom'],":email"=>$data['email'],":phone"=>$data['phone'],":dateNaiss"=>$data['dateNaiss'],":password"=>$data['password']));
        if($newUser){
            return 'ok';
        }else{
            return 'error';
        }
        $newUser = null;

    }
    
    public static function login($data){

        try{
            $query = 'SELECT * FROM user WHERE email=:email';
            $log = DB::connect()->prepare($query);
            $log->execute(array(":email"=>$data['email']));
            $user = $log->fetch(PDO::FETCH_OBJ);
            return $user;
            if($log->execute()){
                return 'ok';
            }

        }catch(PDOException $ex){
            echo 'erreur' .$ex->getMessage();
        }

    }

}


?>