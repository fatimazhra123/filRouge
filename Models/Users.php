<?php

class Users
{

    static public function createUser($data)
    {
        $stmt = DB::connexion()->prepare('INSERT INTO users (Username,Email,Password,confirm_passw,role) VALUES (:Username,:Email,:Password,:confirm_passw,:role)');
        $stmt->bindParam(':Username', $data['Username']);
        $stmt->bindParam(':Email', $data['Email']);
        $stmt->bindParam(':Password', $data['Password']);
        $stmt->bindParam(':role',$data['role']);
        $stmt->bindParam(':confirm_passw', $data['confirm_passw']);
        // die(print_r($data));
        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        
     
    }


    static public function getAll()
    {
        $stmt = DB::connexion()->prepare('SELECT * FROM users');
        $stmt->execute();
        return $stmt->fetchAll();
        // $stmt->close();
        $stmt = null;
    }

    static public function getOne($email, $mot)
    {
        $stmt = DB::connexion()->prepare("SELECT * FROM users WHERE Email = '$email' AND confirm_passw = '$mot'");
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user;
        // $stmt->close();
        $stmt = null;
    }
}