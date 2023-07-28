<?php
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=mabase2021","root","");
    }catch(PDOException $e){
        $e->getMessage();
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
    <section>
        <form id="form" action="" method="POST">
            <select name="sort" id="sort" onchange="sorting();">
                <option value="num_etu">Num Etudiant</option>
                <option value="nom_etu">Nom Etudiant</option>
                <option value="date_naiss">Date naissance</option>
                <option value="sexe">Sexe</option>
            </select>
            <input type="checkbox" name="desc" id="desc" onchange="sorting();"> DESC
        </form>
        <hr>
        <table class="table" id="num" border="1">
            <?php 
                if (isset($_POST['sort'])) $champ = $_POST['sort'];  
                else $champ = "num_etu";           
                
                if (isset($_POST['desc'])) $order = "DESC";
                else $order = "";

                $stm = $pdo->prepare("SELECT * FROM etudiant ORDER BY $champ ".$order);
                $stm->setFetchMode(PDO::FETCH_ASSOC);
                $stm->execute();
                $tab = $stm->fetchAll();
            ?>
            <thead>
                <tr>
                    <th>num etu</th>
                    <th>nom etu</th>
                    <th>date naiss</th>
                    <th>sexe</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($tab as $t): ?>
                <tr>
                    <td><?= $t['num_etu']; ?></td>
                    <td><?= $t['nom_etu']; ?></td>
                    <td><?= $t['date_naiss']; ?></td>
                    <td><?= $t['sexe']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
<script>
    let champ = "<?= $champ; ?>";
    let i;

    switch (champ) {
        case "num_etu" : i = 0; break;
        case "nom_etu" : i = 1; break;
        case "date_naiss" : i = 2; break;
        case "sexe" : i = 3; break;
    }
    
    let desc  = "<?= $order; ?>";
    if (desc == "DESC") document.getElementById('desc').checked = 'checked';
    document.getElementById('sort').getElementsByTagName('option')[i].selected = 'selected';

    function sorting(){
        document.getElementById('form').submit();
    }
</script>
</body>
</html>