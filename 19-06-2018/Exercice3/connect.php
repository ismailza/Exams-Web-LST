<?php 
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=magasin","root","");
    }catch(PDOException $e){
        $e->getMessage();
    }
?>