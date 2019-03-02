<?php 
    /*successfull*/
    if(isset($_GET) && !empty($_GET)){
        if($_GET['successfull'] === "YES"){
                session_destroy();
              header('Location:../index.php?alert=true');
        }else{
            echo "Error desconocido :,(";
        }
        /*exit*/
        if($_GET['exit'] === "true"){
            session_destroy();
              header('Location:../index.php?return=true');
        }else{
            echo "Error desconocido :,(";
        }
        /*consult failure*/
        if($_GET['error'] === "true"){
            session_destroy();
              header('Location:../index.php?error=true');
        }else{
            echo "Error desconocido :,(";
        }
        /*does not exist*/
        if($_GET['procces'] === "false"){
            session_destroy();
            header('Location:../index.php?procces=false');
      }else{
          echo "Error desconocido :,(";
      }
      /*does not exist*/
      if($_GET['intruder'] === "true"){
        session_destroy();
        header('Location:../index.php?intruder=true');
  }else{
      echo "Error desconocido :,(";
  }
    }

?>