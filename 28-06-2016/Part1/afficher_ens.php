<?php 
    include('connect.php');
    $stm = $pdo->prepare("SELECT * FROM enseignant WHERE num_ens=?");
    $stm->setFetchMode(PDO::FETCH_ASSOC);
    $stm->execute(array($_GET['num']));
    $ens = $stm->fetchAll();
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
                    <th>num_ens</th><th>nom_ens</th><th>grade</th><th>anciente</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($ens as $e){ ?>
                <tr>
                    <td align="right"><?php echo$e['num_ens']; ?></td>
                    <td><?php echo$e['nom_ens']; ?></td>
                    <td align="right"><?php echo$e['grade']; ?></td>
                    <td align="right"><?php echo$e['anciente']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
</body>
</html>