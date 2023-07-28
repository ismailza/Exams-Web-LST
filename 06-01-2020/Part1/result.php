<?php 
    if(isset($_POST['submit'])){
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=etudiants2020","root","");
        }catch(PDOException $e){
            $e->getMessage();
        }
        $op = $_POST['op'];
        $note = $_POST['note'];
        $ins = $pdo->prepare("SELECT E.num_etu, E.nom_etu, AVG(N.note) 'moyenne'
                            FROM etudiant E NATURAL JOIN note N
                            WHERE note $op $note
                            GROUP BY E.num_etu");
        $ins->setFetchMode(PDO::FETCH_ASSOC);
        $ins->execute();
        $tab = $ins->fetchAll();
    }
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
    <h2>Résultat de la recherche</h2>
    <hr>
    <h4><?= $n = $ins->rowCount(); ?> Résultat(s) trouvé(s) :</h4>
    <table border="1">
        <tr>
            <th>Num Etudiant</th><th>Nom Etudiant</th><th>Moyenne</th>
        </tr>
        <?php if (!$n): ?>
        <tr><td colspan="3">Pas de résultats</td></tr>
        <?php endif; foreach($tab as $e): ?>
        <tr>
            <td><?= $e['num_etu']; ?></td>
            <td><?= $e['nom_etu']; ?></td>
            <td><?= number_format($e['moyenne'],2); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>