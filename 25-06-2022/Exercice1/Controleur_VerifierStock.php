<?php
    if (isset($_POST['submit'])) {
        $DesPro = $_POST['DesPro'];
        $QuaCom = $_POST['QuaCom'];
        include('Fonction_VerifierStock.php');
        $QuaSto = VerifierStock($DesPro);
        if($QuaSto == -1) $message = "Le produit saisi n'existe pas !";
        else {
            $message = "La quantité commandé : $QuaCom <br>
                        La quantité en stock : $QuaSto <br>";
            if ($QuaCom > $QuaSto)
                $message .= "Le produit $DesPro existe en quantité insuffisante dans la base de données.";
            else
                $message .= "Le produit $DesPro existe en quantité suffisante dans la base de données.";
        }
        include ('FormulaireVerifierStock.php');
    }
    else header("location : FormulaireVerifierStock.php");
?>