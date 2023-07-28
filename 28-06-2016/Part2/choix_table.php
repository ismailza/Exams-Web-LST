<?php
    include('connect.php');
    $stm = $pdo->prepare("SHOW TABLES ");
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
    <form action="choix_stats.php" method="post">
        <select name="table">
            <?php foreach($tab as $t){ ?>
            <option value="<?php echo$t['Tables_in_etudiants']; ?>"><?php echo$t['Tables_in_etudiants']; ?></option>
            <?php } ?>
        </select>
        <input type="submit" name="submit" value="OK">
    </form>
</body>
</html>