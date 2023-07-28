<?php 
    include('select.inc.php');
    include('connect.php');
    $stm = $pdo->prepare("SELECT * FROM matiere");
    $stm->setFetchMode(PDO::FETCH_ASSOC);
    $stm->execute();
    $matieres = $stm->fetchAll();

    $stmE = $pdo->prepare("SELECT * FROM enseignant");
    $stmE->setFetchMode(PDO::FETCH_ASSOC);
    $stmE->execute();
    $ens = $stmE->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matières</title>
    <style>
        table thead {
            background-color: #D6DEE7;
            color: blue;
            font-weight: bold;
        }
        table tbody {
            background-color: #D6D6D6;
        }
        table tbody tr:nth-child(even) {
            background-color: #E7E7E7;
        }
    </style>
</head>
<body>
    <section>
        <div class="msg">
            <?php if(isset($_GET['msg'])) echo$_GET['msg']; ?>
        </div>
        <table>
            <thead>
                <tr>
                    <th>num_mat</th><th>nom_mat</th><th>coef</th><th>num_ens</th>
                </tr>
            </thead>
            <tbody>
                <form action="update_mat_ens.php" method="POST">
                <?php foreach($matieres as $mat){ ?>
                <tr>
                    <td align="right"><?php echo$mat['num_mat']; ?></td>
                    <td><?php echo$mat['nom_mat']; ?></td>
                    <td align="right"><?php echo$mat['coef']; ?></td>
                    <td align="right"><?php 
                    if($mat['num_ens']=="") echo"NULL";
                    else select("mat".$mat['num_mat'],$ens,$mat['num_ens']); ?></td>
                </tr>
                <?php } ?>
                <tr>
                    <td><input type="submit" name="update" value="Modifier"></td>
                </tr>
                </form>
            </tbody>
        </table>
    </section>
</body>
</html>

