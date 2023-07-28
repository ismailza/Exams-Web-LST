<?php
if(isset($_POST['submit'])){
    include('connect.php');
    $table = $_POST['table'];
    $stm = $pdo->prepare("SHOW COLUMNS FROM $table");
    $stm->setFetchMode(PDO::FETCH_ASSOC);
    $stm->execute();
    $tab = $stm->fetchAll();
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
    <form action="afficher_stats.php" method="post">
        <?php foreach($tab as $t){ ?>
        <label for=""><?php echo$t['Field']; ?> </label>
        <select name="<?php echo$t['Field']."[]"; ?>" multiple>
            <?php if(str_contains($t['Type'],'int') || str_contains($t['Type'],'decimal')){ ?>
            <option value="AVG(<?php echo$t['Field']; ?>)">AVG</option>
            <option value="COUNT(<?php echo$t['Field']; ?>)">COUNT</option>
            <option value="MIN(<?php echo$t['Field']; ?>)">MIN</option>
            <option value="MAX(<?php echo$t['Field']; ?>)">MAX</option>
            <option value="STDDEV(<?php echo$t['Field']; ?>)">STDDEV</option>
            <?php }else { ?>
            <option value="COUNT(<?php echo$t['Field']; ?>)">COUNT</option>
            <option value="MIN(<?php echo$t['Field']; ?>)">MIN</option>
            <option value="MAX(<?php echo$t['Field']; ?>)">MAX</option>
            <?php } ?>
        </select>    
        <?php } ?>
        <input type="hidden" name="table" value="<?php echo$table; ?>">
        <input type="submit" name="submit" value="OK">
    </form>
</body>
</html>
<?php }else {
    header("location: choix_table.php");
} ?>