<?php 
    include('connect.php');
    $stm = $pdo->prepare("SELECT * FROM matiere LEFT JOIN enseignant USING (num_ens)");
    $stm->setFetchMode(PDO::FETCH_ASSOC);
    $stm->execute();
    $matieres = $stm->fetchAll();
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
        <table>
            <thead>
                <tr>
                    <th>num_mat</th><th>nom_mat</th><th>coef</th><th>num_ens</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($matieres as $mat){ ?>
                <tr>
                    <td align="right"><?php echo$mat['num_mat']; ?></td>
                    <td><?php echo$mat['nom_mat']; ?></td>
                    <td align="right"><?php echo$mat['coef']; ?></td>
                    <td align="right"><?php 
                    if($mat['num_ens']=="") echo"NULL";
                    else echo"<a href=\"afficher_ens.php?num=".$mat['num_ens']."\" title=\"".$mat['nom_ens']."\">".$mat['num_ens']."</a>"; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
</body>
</html>

