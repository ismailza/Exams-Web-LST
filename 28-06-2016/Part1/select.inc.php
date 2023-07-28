<?php 
    function select($name,$values,$selected){
        echo"<select name=\"$name\">";
            foreach($values as $val){
                if($val['num_ens'] == $selected) echo"<option value=\"".$val['num_ens']."\" selected>".$val['nom_ens']."</option>";
                else echo"<option value=\"".$val['num_ens']."\">".$val['nom_ens']."</option>";
            }
        echo"</select>";
    }
?>