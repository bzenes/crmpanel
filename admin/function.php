<?php
    session_start();
    require_once "auth.php";
    $user = new Auth();

    if(isset($_POST["action"]) && $_POST["action"]=="register"){
        $name = $user->clear_input($_POST["name"]);
        $surname = $user->clear_input($_POST["surname"]);
        $email = $user->clear_input($_POST["email"]);
        $pass = $user->clear_input($_POST["pass"]);

        if($user->user_exist($email)){
            echo $user->showMessage("danger","Üye kayıtlı.");
        }else{
            if($user->register($name,$surname,$email,$pass)){
                echo "register";
                $_SESSION["user"] = $email;
            }else{
                echo $user->showMessage("danger","hata var");
            }
        }
    }

    if(isset($_POST["action"]) && $_POST["action"]=="login"){
        $email = $user->clear_input($_POST["email"]);
        $pass = $user->clear_input($_POST["pass"]);

        $loggedInUser = $user->login($email);
        

        if ($loggedInUser != null) {
            if($pass == $loggedInUser["pass"]){
                if(!empty($_POST["rem"])){
                    setcookie("email",$email,time()+(30*24+60*60), "/");
                    setcookie("pass",$pass,time()+(30*24+60*60), "/");
                }else{
                    setcookie("email","",1,"/");
                    setcookie("pass","",1,"/");
                }
            
                echo "login";
                $_SESSION["user"]=$email;
            }else{
                echo $user->showMessage("danger","Şifre yanlış");
            }
        }else{
            echo $user->showMessage("danger","kullanıcı bulunamadı!");
        }

    }

?>