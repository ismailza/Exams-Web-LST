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
        <select name="sort" id="sort" onchange="sort();">
            <option value="num">Num Etudiant</option>
            <option value="nom">Nom Etudiant</option>
            <option value="date">Date naissance</option>
            <option value="sexe">Sexe</option>
        </select>
        <input type="checkbox" name="desc" id="desc" onchange="sort();"> DESC
        <hr>
        <table class="table" id="num" border="1">
            <?php 
                $stm = $pdo->prepare("SELECT * FROM etudiant ORDER BY num_etu");
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
                <?php 
                    foreach($tab as $t){
                ?>
                <tr>
                    <td><?php echo$t['num_etu']; ?></td>
                    <td><?php echo$t['nom_etu']; ?></td>
                    <td><?php echo$t['date_naiss']; ?></td>
                    <td><?php echo$t['sexe']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <table class="table" id="numDesc" border="1">
            <?php 
                $stm = $pdo->prepare("SELECT * FROM etudiant ORDER BY num_etu DESC");
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
                <?php 
                    foreach($tab as $t){
                ?>
                <tr>
                    <td><?php echo$t['num_etu']; ?></td>
                    <td><?php echo$t['nom_etu']; ?></td>
                    <td><?php echo$t['date_naiss']; ?></td>
                    <td><?php echo$t['sexe']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <table class="table" id="nom" border="1">
            <?php 
                $stm = $pdo->prepare("SELECT * FROM etudiant ORDER BY nom_etu");
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
                <?php 
                    foreach($tab as $t){
                ?>
                <tr>
                    <td><?php echo$t['num_etu']; ?></td>
                    <td><?php echo$t['nom_etu']; ?></td>
                    <td><?php echo$t['date_naiss']; ?></td>
                    <td><?php echo$t['sexe']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <table class="table" id="nomDesc" border="1">
            <?php 
                $stm = $pdo->prepare("SELECT * FROM etudiant ORDER BY nom_etu DESC");
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
                <?php 
                    foreach($tab as $t){
                ?>
                <tr>
                    <td><?php echo$t['num_etu']; ?></td>
                    <td><?php echo$t['nom_etu']; ?></td>
                    <td><?php echo$t['date_naiss']; ?></td>
                    <td><?php echo$t['sexe']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <table class="table" id="date" border="1">
            <?php 
                $stm = $pdo->prepare("SELECT * FROM etudiant ORDER BY date_naiss");
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
                <?php 
                    foreach($tab as $t){
                ?>
                <tr>
                    <td><?php echo$t['num_etu']; ?></td>
                    <td><?php echo$t['nom_etu']; ?></td>
                    <td><?php echo$t['date_naiss']; ?></td>
                    <td><?php echo$t['sexe']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <table class="table" id="dateDesc" border="1">
            <?php 
                $stm = $pdo->prepare("SELECT * FROM etudiant ORDER BY date_naiss DESC");
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
                <?php 
                    foreach($tab as $t){
                ?>
                <tr>
                    <td><?php echo$t['num_etu']; ?></td>
                    <td><?php echo$t['nom_etu']; ?></td>
                    <td><?php echo$t['date_naiss']; ?></td>
                    <td><?php echo$t['sexe']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <table class="table" id="sexe" border="1">
            <?php 
                $stm = $pdo->prepare("SELECT * FROM etudiant ORDER BY sexe");
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
                <?php 
                    foreach($tab as $t){
                ?>
                <tr>
                    <td><?php echo$t['num_etu']; ?></td>
                    <td><?php echo$t['nom_etu']; ?></td>
                    <td><?php echo$t['date_naiss']; ?></td>
                    <td><?php echo$t['sexe']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <table class="table" id="sexeDesc" border="1">
            <?php 
                $stm = $pdo->prepare("SELECT * FROM etudiant ORDER BY sexe DESC");
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
                <?php 
                    foreach($tab as $t){
                ?>
                <tr>
                    <td><?php echo$t['num_etu']; ?></td>
                    <td><?php echo$t['nom_etu']; ?></td>
                    <td><?php echo$t['date_naiss']; ?></td>
                    <td><?php echo$t['sexe']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
<script>
    let c = document.getElementsByTagName("table");
    for(i=0; i < c.length; i++){
        c[i].style.display = 'none';
    }
    document.getElementById('num').style.display = 'table';
    function sort(){
        let tri = document.getElementById('sort').value;
        let order = document.getElementById('desc');
        let c = document.getElementsByTagName("table");
        for(i=0; i < c.length; i++){
            c[i].style.display = 'none';
        }
        if(order.checked){
            document.getElementById(tri+'Desc').style.display = 'table';
        }else{
            document.getElementById(tri).style.display = 'table';
        }
    }
</script>
</body>
</html>