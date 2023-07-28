<?php
    if(isset($_POST['update'])){
        include('connect.php');
        $stm = $pdo->prepare("SELECT * FROM matiere");
        $stm->setFetchMode(PDO::FETCH_ASSOC);
        $stm->execute();
        $matieres = $stm->fetchAll();
        $success = 0;
        foreach($matieres as $mat){
            $m = "mat".$mat['num_mat'];
            $m = $_POST[$m];
            $ins = $pdo->prepare("UPDATE matiere SET num_ens=? WHERE num_mat=?");
            $ins->execute(array($m,$mat['num_mat']));
            if($ins) $success++;
        }
        if($success == $stm->rowCount()) header("location: afficher_mat_list.php?msg=Update succesfully");
        else header("location: afficher_mat_list.php?msg=Somthing went wrong!");
    }
?>