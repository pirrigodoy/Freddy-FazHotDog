<?php
$users = [  "freddy32891" => "32891",
            "admin" => "admin",
            "root" => "root"];

function getAllUsers(){
    global $users;
    return $users;
}

/**
 * Function that checks if the user and the password exist in the array of users
 * If the user and the password are correct it returns 1.
 * In case it does not exist, it resturns 0.
 */
function login(string $user, string $password):int{
    $result = 0;//by  default 0 if the login is incorrect
    if($user!=""){//validamos los datos introducidos por el usuario
        if($password!=""){
            foreach(getAllUsers() as $key => $value){
                if($key===$user && $value ==$password){
                    return 1;
                }
            }
        }else{
            $result = -2;
        }
    }else{
        $result = -1;
    }
    return $result;
}


?>