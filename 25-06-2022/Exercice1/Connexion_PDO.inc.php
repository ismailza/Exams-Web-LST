<?php 
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=bdcommerciale","root","");
    }
    catch (PDOException $e) {
        die("Erreur lors de la connexion à la base de données! : ".$e->getMessage());
    }
?>