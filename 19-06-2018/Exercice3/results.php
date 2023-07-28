<?php
    if (!isset($_POST['submit'])) {
        header("location: search.php");
        exit;
    }
    include("connect.php");
    $key = $_POST['key'];
    $categorie = $_POST['categorie'];
    $tri = $_POST['tri'];
    $order = $_POST['order'];

    if ($categorie == "Tous"){
        $ins = $pdo->prepare("SELECT * FROM article WHERE UPPER(design) LIKE UPPER('%$key%') ORDER BY $tri $order");
        $ins->setFetchMode(PDO::FETCH_ASSOC);
        $ins->execute();
    }
    else {
        $ins = $pdo->prepare("SELECT * FROM article WHERE UPPER(design) LIKE UPPER('%$key%') AND categorie=? ORDER BY prix DESC ");
        $ins->setFetchMode(PDO::FETCH_ASSOC);
        $ins->execute(array($categorie));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your search results</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        section {
            margin: 10px 30px;
            padding: 10px 30px;
        }
        table {
            width: 100%;
        }
        table thead {
            background-color: #D6DEE7;
        }
        table thead th {
            color: blue;
        }
        table tbody tr {
            background-color: #D6D6D6;
        }
        table tbody tr:nth-child(even) {
            background-color: #E7E7E7;
        }
    </style>
</head>
<body>
    <section>
        <h2>Résultat de votre recherche</h2>
        <div class="container">
            <table border="1">
                <thead>
                    <tr>
                        <th>N°</th><th>Design</th><th>Categorie</th><th>Prix</th>
                    </tr>
                </thead>
                <tbody>
                <?php if($ins->rowCount() == 0): ?>
                    <tr>
                        <td colspan="4">Aucun résultats</td>
                    </tr>
                <?php else: 
                    $results = $ins->fetchAll();
                    foreach ($results as $r):
                ?>
                    <tr>
                        <td><?= $r['id_article']; ?></td>
                        <td><?= $r['design']; ?></td>
                        <td><?= $r['categorie']; ?></td>
                        <td align="right"><?= $r['prix']; ?> DH</td>
                    </tr>
                <?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>