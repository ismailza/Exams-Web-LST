<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formuaire Verifier Stock</title>
</head>
<body>
    <h2>Formulaire de vérification des stocks : </h2>
    <form action="Controleur_VerifierStock.php" method="post">
        <table>
            <tr>
                <td><h2>Désignation Produit : </h2></td>
                <td><input type="text" name="DesPro" required></td>
            </tr>
            <tr>
                <td><h2>Quantité commandée : </h2></td>
                <td><input type="number" min="1" name="QuaCom" required></td>
            </tr>
            <tr>
                <th colspan="2"><input type="submit" name="submit" value="Lancer la vérification"></th>
            </tr>
        </table>
    </form>
    <?php if(isset($message)) echo "<b>$message</b>"; ?>
</body>
</html>