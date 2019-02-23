<?php 
    /*successfull*/
    if(isset($_GET) && !empty($_GET)){
        if($_GET['successfull'] === "YES"){
              header('Location:../index.php?alert=true');
        }else{
            echo "Error desconocido :,(";
        }
    }
    /*exit*/
    if(isset($_GET) && !empty($_GET)){
        if($_GET['exit'] === "true"){
              header('Location:../index.php?return=true');
        }else{
            echo "Error desconocido :,(";
        }
    }
?>