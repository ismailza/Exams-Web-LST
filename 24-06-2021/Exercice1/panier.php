<?php

$tabArticles = array();

function ajouterArticle ($idArticle, $qte) {
    global $tabArticles;
    if (!array_key_exists($idArticle,$tabArticles)) {
        require 'connect.php';
        $stm = $pdo->prepare("SELECT * FROM article WHERE id_article=?");
        $stm->setFetchMode(PDO::FETCH_ASSOC);
        $stm->execute(array($idArticle));
        $tab = $stm->fetchAll();
        $tabArticles[$idArticle] = array('libelle'=> $tab[0]['libelle'],'prix_unitaire'=> $tab[0]['prix_unitaire'],'image'=> $tab[0]['image'],'qte'=>$qte); 
    }else $tabArticles[$idArticle]['qte'] += $qte;
}

function validerPanier ($idClient) {
    global $tabArticles;
    require 'connect.php';
    foreach(array_keys($tabArticles) as $key){
        $ins = $pdo->prepare("INSERT INTO achat (id_client, id_article, qte, date) VALUES(?,?,?,CURRENT_TIMESTAMP)");
        $ins->execute(array($idClient,$key,$tabArticles[$key]['qte']));
    }
}

function viderPanier() {
    global $tabArticles;
    $tabArticles = array();
}

function afficher() {
    global $tabArticles;
    $total = 0;
    echo"<center><table border=1><tr><th>Quantité</th><th>Libellé</th><th>Prix</th><th>Image</th></tr>";
    foreach ($tabArticles as $a) {
        echo"<tr><td>".$a['qte']."</td>";
        echo"<td>".$a['libelle']."</td>";
        echo"<td>".$a['prix_unitaire']."</td>";
        echo"<td><img src=\"".$a['image']."\" alt=\"image de produit\" width=60 height=60></td></tr></table>";
        $total +=  $a['prix_unitaire']*$a['qte'];
    }
    echo"Prix Total : ".$total;
    echo"</center>";
}

ajouterArticle(2,2);
afficher();
?>