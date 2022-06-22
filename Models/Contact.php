<?php

class  contact

{
    static public function getAll()
    {
        $stmt = DB::connexion()->prepare('SELECT * FROM contacts');
        $stmt->execute();

        return $stmt->fetchAll();
    }
    static public function add($data)
    {
        $stmt = DB::connexion()->prepare('INSERT INTO contacts (name,telephone,adresse,email,Message) 
        VALUES (:name,:telephone,:adresse,:email,:Message)');
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':telephone', $data['telephone']);
        $stmt->bindParam(':adresse', $data['adresse']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':Message', $data['Message']);
        $stmt->execute();
    }
    static public function getOne($id)
    {
        $stmt = DB::connexion()->prepare("SELECT * FROM contacts WHERE id = '$id'");
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
