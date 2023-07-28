<?php
    if(isset($_POST['submit'])){
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=infos","root","");
        }catch(PDOException $e){
            $e->getMessage();
        }

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $icq = $_POST['icq'];
        $titre = $_POST['titre'];
        $url = $_POST['url'];

        // check url
        $ins = $pdo->prepare("SELECT * FROM sites_tbl WHERE url=?");
        $ins->setFetchMode(PDO::FETCH_ASSOC);
        $ins->execute(array($url));
        if($ins->rowCount()!=0) $error = "url already exist!";
        else {
            $insert = $pdo->prepare("INSERT INTO sites_tbl(titre,url) VALUES (?,?)");
            $insert->execute(array($titre,$url));
            if(!$insert) $error = "something went wrong!";
            else{
                $id = $pdo->lastInsertId();
                $insert = $pdo->prepare("INSERT INTO infos_tbl(nom,prenom,email,icq,id_site) VALUES (?,?,?,?,?)");
                $insert->execute(array($nom,$prenom,$email,$icq,$id));
                if(!$insert) $error = "something went wrong!";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .msg_container {
            background-color: rgba(200, 0, 0, .7);
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="msg_container">
                <?php if (isset($error)) echo $error; ?>
            </div>
            <input type="text" name="nom" placeholder="nom"><br>
            <input type="text" name="prenom" placeholder="prenom"><br>
            <input type="email" name="email" placeholder="email"><br>
            <input type="text" name="icq" placeholder="icq"><br>
            <input type="text" name="titre" placeholder="titre du site"><br>
            <input type="text" name="url" placeholder="url du site"><br>
            <input type="submit" name="submit" value="Envoyer">
        </form>
    </div>
</body>
</html>