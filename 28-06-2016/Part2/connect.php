<?php
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=etudiants","root","");
    }catch(PDOException $e){
        $e->getMessage();
    }
?>