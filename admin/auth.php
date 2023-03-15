<?php

require_once "config.php";

class Auth extends Database{

    public function register($name,$surname,$email,$pass){
        $sql = "INSERT INTO users (name,surname,email,pass) VALUES (:name,:surname,:email,:pass)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'name'=>$name,
            'surname'=>$surname,
            'email'=>$email,
            'pass'=>$pass
        ]);
        return true;
    }

    public function user_exist($email){
        $sql = "SELECT email from users where email=:email";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'email'=>$email,
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function login($email){
        $sql = "SELECT email,pass FROM users where email=:email";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'email'=>$email
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function currentUser($email){
        $sql = "SELECT * FROM users where email=:email";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            "email"=>$email
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function add_new_note($uid,$title,$note){
        $sql = "INSERT INTO notes (uid,title,note) VALUES (:uid,:title,:note)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'uid'=>$uid,
            'title'=>$title,
            'note'=>$note
        ]);
        return true;
    }

}

?>