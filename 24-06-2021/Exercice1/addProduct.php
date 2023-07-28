<?php
    if (isset($_POST['submit'])) {
        include('connect.php');
        $libelle = $_POST['libelle'];
        $prix = $_POST['prix'];
        $image = $_FILES['image']['name'];
        if (is_uploaded_file($_FILES['image']['tmp_name'])) {
            $target_file = "img/".$image;
            $file_extension = pathinfo($target_file, PATHINFO_EXTENSION);     
            $file_extension = strtolower($file_extension);
            $valid_extension = array("png","jpeg","jpg");
            if (in_array($file_extension, $valid_extension)) {
                if (move_uploaded_file($_FILES['image']['tmp_name'],$target_file)) {
                    $ins = $pdo->prepare("INSERT INTO article (libelle, prix_unitaire,image) VALUES (?,?,?)");
                    $ins->execute(array($libelle,$prix,$target_file));
                    if ($ins) $success = "Article ajouté avec succès";
                    else $error = "Article non ajouté!";
                }
                else $error = "Image non inserer dans le dossier img!";
            }
            else $error = "Extension d'image non accepté!";
        }
        else $error = "Image non importer!";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Produit</title>
</head>
<body>
    <fieldset>
        <legend>Ajouter Produit</legend>
        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <style>
                .msg-error{background-color: red; color: white;}
                .msg-success{background-color: green; color: white;}
            </style>
            <div class="msg-error">
                <?php if (isset($error)) echo $error; ?>
            </div>
            <div class="msg-success">
                <?php if(isset($success)) echo $success; ?>
            </div>
            <table>
                <tr>
                    <td><label for="libelle">Libelle</label></td>
                    <td><input type="text" id="libelle" name="libelle" required></td>
                </tr>
                <tr>
                    <td><label for="prix">Prix</label></td>
                    <td><input type="number" min="0" step="any" id="prix" name="prix" required></td>
                </tr>
                <tr>
                    <td><label for="image">Image</label></td>
                    <td><input type="file" name="image" id="image" required></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Ajouter"></td>
                </tr>
            </table>                
        </form>
    </fieldset>
</body>
</html>