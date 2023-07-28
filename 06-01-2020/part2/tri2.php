<?php 
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=etudiants2020","root","");
        }catch(PDOException $e){
            $e->getMessage();
        }
        if(isset($_GET['champ'])){
            $champ = $_GET['champ'];
        }else{
            $champ = "num_etu";
        }
        $ins = $pdo->prepare("SELECT * FROM etudiant ORDER BY $champ");
        $ins->setFetchMode(PDO::FETCH_ASSOC);
        $ins->execute();
        $tab = $ins->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr> 
            <th><a href="tri2.php?champ=num_etu">Num Etudiant</a></th>
            <th><a href="tri2.php?champ=nom_etu">Nom Etudiant</a></th>
            <th><a href="tri2.php?champ=date_naiss">Date Naissance</a></th>
            <th><a href="tri2.php?champ=sexe">Sexe</a></th>
        </tr>
        <?php foreach($tab as $e): ?>
        <tr>
            <td><?= $e['num_etu']; ?></td>
            <td><?= $e['nom_etu']; ?></td>
            <td><?= $e['date_naiss']; ?></td>
            <td><?= $e['sexe']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>