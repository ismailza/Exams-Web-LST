<?php
    function VerifierStock ($DesPro) {
        include('Connexion_PDO.inc.php');
        $stm = $pdo->prepare("SELECT QuaSto FROM tproduit WHERE DesPro = ?");
        $stm->setFetchMode(PDO::FETCH_OBJ);
        $stm->execute(array($DesPro));
        if (!$stm->rowCount()) return -1;
        $tab = $stm->fetch();
        return $tab->QuaSto;
    }
?>