<?php

class AnnonceModel
{
    static public function getAll()
    {
        $stmt = DB::connexion()->prepare('SELECT * FROM Annonce');
        $stmt->execute();

        return $stmt->fetchAll();
    }

    static public function add($data)
    {
        $stmt = DB::connexion()->prepare('INSERT INTO Annonce (Usernname,image,Subject,tele,Message) VALUES (:Username,:image,:Subject,:tele,:Message)');
        $stmt->bindParam(':name', $data['Usernname']);
        $stmt->bindParam(':image', $data['image']);
        $stmt->bindParam(':Subject', $data['Subject']);
        $stmt->bindParam(':tele', $data['tele']);
        $stmt->bindParam(':Message', $data['Message']);
        $stmt->execute();
    }
    
    static public function delete($data)
    {
        $id = $data['id_Annonce'];
        try {
            $query = 'DELETE FROM Annonce WHERE id_Annonce=:Annonce';
            $stmt = DB::connexion()->prepare($query);
            $stmt->execute(array(":id_Annonce" => $id));
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }

    static public function update($data)
    {
        $query = 'UPDATE Annonce SET username=:Username,Subject=:Subject,image=:image,tele=:tele,Message=:Message WHERE id_Annonce=:id_Annonce';
        $stmt = DB::connexion()->prepare($query);
        $stmt->bindParam(':id_Annonce', $data['id_Annonce']);
        $stmt->bindParam(':Username', $data['Username']);
        $stmt->bindParam(':Subject', $data['Subject']);
        $stmt->bindParam(':image', $data['image']);
        $stmt->bindParam(':tele', $data['tele']);
        $stmt->bindParam(':Message', $data['Message']);
        if ($stmt->execute()) {
            return 'ok';
        }
    }

    static public function getOne($id)
    {
        $stmt = DB::connexion()->prepare("SELECT * FROM Annonce WHERE id_Annonce = '$id'");
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // static public function getCategorie($categorie)
    // {
    //     $stmt = DB::connexion()->prepare("SELECT * FROM produit WHERE categorie = '$categorie'");
    //     $stmt->execute();

    //     return $stmt->fetchAll();
    // }
}