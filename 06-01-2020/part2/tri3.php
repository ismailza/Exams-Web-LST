<?php 
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=etudiants2020","root","");
        }catch(PDOException $e){
            $e->getMessage();
        }
        if(isset($_POST['sort'])){
            $champ = $_POST['sort'];
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
        
    <form id="form" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="sort">Order by : </label>
        <select name="sort" id="sort" onchange="sorting();">
            <option value="num_etu">Num Etudiant</option>
            <option value="nom_etu">Nom Etudiant</option>
            <option value="date_naiss">Date naissance</option>
            <option value="sexe">Sexe</option>
        </select>
    </form>
    <hr>
    <table border="1">
        <tr> 
            <th>Num Etudiant</th><th>Nom Etudiant</th><th>Date naissance</th><th>Sexe</th>
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

<script>
    let champ = "<?= $champ; ?>";
    let i;
    switch (champ) {
        case "num_etu" : i = 0; break;
        case "nom_etu" : i = 1; break;
        case "date_naiss" : i = 2; break;
        case "sexe" : i = 3; break;
    }
    document.getElementById('sort').getElementsByTagName('option')[i].selected = 'selected';
    function sorting () {
        document.getElementById("form").submit();
    }
</script>
</body>
</html>