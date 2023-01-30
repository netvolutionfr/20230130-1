<?php

class Utilisateur
{
    public int $id;
    public string $nom;
    public string $prenom;
    public string $email;

    public function __construct()
    {
        $this->id = 0;
        $this->nom = '';
        $this->prenom = '';
        $this->email = '';
    }

    public function getUserById(int $id): bool
    {
        require 'db.php';
        $sql = 'SELECT * FROM `utilisateur` WHERE `id`=1';
        $stmt = $db->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $this->id = $row['id'];
            $this->nom = $row['nom'];
            $this->prenom = $row['prenom'];
            $this->email = $row['email'];
            return true;
        }
        return false;
    }
}