<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        section {
            margin: 10px 30px;
            padding: 10px 30px;
        }
    </style>
</head>

<body>
    <section>
        <fieldset>
            <legend>Recherche un article en magasin</legend>
            <form action="results.php" method="post">
                <table>
                    <tr>
                        <td><label for="key">Mot-clé</label></td>
                        <td><input type="search" name="key" id="key" required></td>
                    </tr>
                    <tr>
                        <td><label for="categorie">Dans la catégorie</label></td>
                        <td>
                            <select name="categorie" id="categorie">
                                <option value="Tous">Tous</option>
                                <?php
                                    include("connect.php");
                                    $stm = $pdo->prepare("SELECT DISTINCT categorie FROM article");
                                    $stm->setFetchMode(PDO::FETCH_ASSOC);
                                    $stm->execute();
                                    $cats = $stm->fetchAll();
                                    foreach ($cats as $c) :
                                ?>
                                <option value="<?= $c['categorie']; ?>"><?= $c['categorie']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="tri">Trier par</label></td>
                        <td>
                            <select name="tri" id="tri">
                                <option value="prix">Prix</option>
                                <option value="categorie">Categorie</option>
                                <option value="id_article">Date</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="order">En ordre</label></td>
                        <td>
                            Croissant <input type="radio" name="order" id="order" value="ASC">
                            Décroissant <input type="radio" name="order" id="order" value="DESC">
                        </td>
                    </tr>
                    <tr>
                        <td>Envoyer</td>
                        <td><input type="submit" name="submit" value="OK"></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </section>
</body>

</html>