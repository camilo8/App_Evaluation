<?php 
    /*successfull*/
    if(isset($_GET) && !empty($_GET)){
        if($_GET['successfull'] === "YES"){
              header('Location:../index.php?alert=true');
        }elseif($_GET['successfull'] === "NOT"){
            header('Location:../index.php?alert=false');
        }else{
            echo "Error desconocido :,(";
        }
    }
?>