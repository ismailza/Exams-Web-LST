<?php 
if(isset($_POST['submit'])){
    include('connect.php');
    $table = $_POST['table'];
    $stm = $pdo->prepare("SHOW COLUMNS FROM $table");
    $stm->setFetchMode(PDO::FETCH_ASSOC);
    $stm->execute();
    $tab = $stm->fetchAll();
    $stats = "";
    $length = sizeof($tab);
    $i = 0;
    foreach($tab as $t){
        $i++;$k=0;
        $m = $t['Field'];
        $t['Field'] = $_POST[$m];
        $lk = sizeof($t['Field']);
        foreach($t['Field'] as $f){
            $k++;
            $stats .= $f; 
            if($k!=$lk) $stats .= ",";
        }
        if($i!=$length){ $stats.=",";}
    }
    $stm = $pdo->prepare("SELECT $stats FROM $table");
    $stm->setFetchMode(PDO::FETCH_ASSOC);
    $stm->execute();
    $tabs = $stm->fetchAll();
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
    <div align="center">
        <h2>Statistiques de la table <?php echo $table; ?></h2>
        <hr>
        <?php 
        foreach($tabs[0] as $t => $s){
            echo$t." = ".$s."<br>";
        }
        ?>
    </div>
</body>
</html>
<?php } ?>