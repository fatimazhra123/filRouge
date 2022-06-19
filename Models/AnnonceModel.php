<?php

class AnnonceModel
{
    static public function getAll()
    {
        $stmt = DB::connexion()->prepare('SELECT * FROM annonce');
        $stmt->execute();

        return $stmt->fetchAll();
    }

    static public function add($data)
    {
        $stmt = DB::connexion()->prepare('INSERT INTO annonce(Username,image,Subject,tele,Message) VALUES (:Username,:image,:Subject,:tele,:Message)');
        $stmt->bindParam(':Username', $data['Username']);
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
            $query = 'DELETE FROM annonce WHERE id_annonce=:id_Annonce';
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
        $query = 'UPDATE annonce SET Username=:Username,Subject=:Subject,image=:image,tele=:tele,Message=:Message WHERE id_Annonce=:id_Annonce';
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
        $stmt = DB::connexion()->prepare("SELECT * FROM annonce WHERE id_Annonce = '$id'");
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    static public function getAnnonce($Annonce)
    {
        $stmt = DB::connexion()->prepare("SELECT * FROM annonce WHERE id_Annonce = '$Annonce'");
        $stmt->execute();

        return $stmt->fetchAll();
    }
}