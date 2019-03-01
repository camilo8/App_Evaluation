<?php 
namespace Evaluations;
require_once('../Class/Evaluation.php');
session_start();
if(isset($_SESSION['u_Id']) && !empty($_SESSION['u_Id']) && isset($_SESSION['u_Surname']) && !empty($_SESSION['u_Surname'])){
    /*date of teachers */
    $id = $_SESSION['u_Id'];
    $grade = $_SESSION['u_Grade'];
    $List_Students = new Evaluation();
    $ConsultStudents = $List_Students->ConsultStudents($grade);   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!--CSS Bootstrao 4  end icono moon-->
     <link rel="stylesheet" href="../CSS/bootstrap.min.css">
     <link rel="stylesheet" href="../fonts/style.css">
     <link rel="stylesheet" href="../CSS/style.css">
     <!--Fonst-->
     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <title>Estudent</title>
</head>
<body>
    <!--Header--> 
    <Header class="container-fluid">
         <div class="row">
              <div class="Portada col-5">
                 <img src="../IMG/logos1.jpg" alt="">
              </div>
              <div class="Title col-5 align-self-center">
                   <h1>Evaluacion Reflexiva</h1>
              </div>
              <div class="Icon col-2 align-self-center">
                  <?php
                   /*valid of login*/
                        echo  "<a href='../Controlers/Controlers_Header.php?exit=true'><span class='icon-exit'></span></a>"
                  ?>
              </div>
          <?php 
                   }else{
                        header('Location:../index.html');
                    }
             /*Valid of successfull*/
             if(isset($_GET['successfull'])){
                 if($_GET['successfull'] ==="NOT") {
                     echo "<script>
                                 alert('Evaluacion sin completar');
                          </script>";
                 }
             }
            ?>
         </div>
    </Header>
    <!--section-->
     <section class="container">
        <div class="row">
             <div class="list_students col-12">
             <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col"><?php switch($grade){
                                         case 1:
                                            echo "1A";
                                         break;
                    } ?></th>
                    <th scope="col">Students</th>
                    <th scope="col">Code</th>
                    <th scope="col">Procces</th>
                    <th scope="col">Evaluation</th>                    
                    </tr>
                </thead>
                <tbody>
                    <?php
                       foreach($ConsultStudents as $value){
                        ?>
                    <tr>
                    <th scope="row"><?php echo$value['Id'];?></th>
                    <td><?php echo$value['Name']."".$value['Surname'];?></td>
                    <td><?php   echo$value['Codigo'];?></td>
                    <td><?php echo$value['End_Procces_Student'];?></td>
                    <td><?php if($value['End_Procces_Student'] === "SI"){
                                echo"<a href='List_Evaluation.php?id_student=".$value['Id']."&id_teacher=".$id."' class='icon-profile'></a>";      
                    } ?></td>
                    </tr>
                        <?php
                        } 
                    ?>
                </tbody>
                </table>
             </div>
        </div>
     </section>
    <script src="../JS/jquery.js"></script> 
    <script src="../JS/ValidColor.js"></script>
    <script src="../JS/bootstrap.min.js"></script>
</body>
</html>