<?php 
namespace Evaluations;
require_once('../Class/Evaluation.php');
session_start();
if(isset($_SESSION['u_Id']) && !empty($_SESSION['u_Id']) && isset($_SESSION['u_Surname']) && !empty($_SESSION['u_Surname'])){
    $id = $_SESSION['u_Id'];
    $name = $_SESSION['u_Name'];
    $surname=$_SESSION['u_Surname'];
    $grade = $_SESSION['u_Grade'];
    
    $Evaluation1 = new Evaluation();
    $Evaluation2 = new Evaluation();
       $Criterion = $Evaluation1->ConsultEval($grade);
       $TeacherId = $Evaluation2->Teacher($id);     
      
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
    <!--NAV-->
    <nav class="container">
        <div class="row justify-content-md-center">
            <div class="TitleInfo col-2">
                <h3>Instructions</h3>
            </div>
        </div>
            <div class="row justify-content-md-center">
                <div class="Info col-10">
                <ul class="list-group">
                    <li class="list-group-item"><span class="icon-file-text"></span> Leea detenidamente cada criterio y elija 
									en el cuadro de lista opción que mas represente su opinión</li>
                    <li class="list-group-item"><span class="icon-keyboard"></span> Revisa tus datos</li>
                    <li class="list-group-item"><span class="icon-user"></span> Antes de enviar la evaluacion asegurese de que hayas llenado el campo <b>STUDENT COMMENTS</li>
                    <li class="list-group-item"><span class="icon-airplane"></span> Dar click en el boton <b>ENVIAR</b> para terminar el proceso</li>
                </ul>
            </div>
        </nav>
        <div class="user container ">
            <div class="row justify-content-md-center">
                <div class="InfoUser col-4">
                    <ul class="list-group">
                        <li class="list-group-item"><h3>Welcome Students</h3></li>
                        <li class="list-group-item"><h5>Name</h5><?php echo $name; ?></li>
                        <li class="list-group-item"><h5>Surname</h5><?php echo $surname; ?></li>
                        <li class="list-group-item"><h5>Grade</h5><?php  switch($grade){
                            case 1: 
                                echo"1A";
                            break;    
                        } ?></li>
                    </ul>
                 </div>
          </div>
        </div>
        <section class="container">
            <div class="row justify-content-md-center">
                <div class="Table col-12 ">
                  <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Criterion</th>
                        <th colspan="2">Answer</th>
                        <th scope="col">Color</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      -
                    <!---Form-->
                     <form action="../Controlers/Controlers_Aswer.php" method="GET">
                        <input type="hidden" value="<?php echo $id; ?>" name="students">
                            <?php 
                         /*consult of criterion*/
                         $var=1;
                         $var1=1;
                         $var2=1;
                         $var3=1;
                         $var4=11;
                         $var5=1;

                         foreach ($Criterion AS $value) {   
                             ?>
                        <th scope="row"> 
                            <?php echo $value['Id'] ?>
                        <td><h3><?php echo $value['Name'] ?></h3> <p><?php echo $value['Description'] ?></p></td>
                        <td colspan="2"> <select class="form-control" id="<?php echo'option'.$var++; ?>" name="<?php echo'aswer'.$var1++; ?>">
                            <option value="">Seleccionar</option>
                            <option value="Siempre">Siempre</option>
                            <option value="Casi siempre">Casi siempre</option>
                            <option value="Nunca">Nunca</option> 
                        </select></td>
                        <td>
                             <input type="color" value="#ffffff" class="color" id="<?php echo'color'.$var2++; ?>" name="<?php echo'color'.$var3++; ?>" disabled>
                             <input type="hidden" value="ffffff" id="<?php echo'color'.$var4++; ?>" name="<?php echo'color'.$var5++; ?>" >
                        </td>
                    </tr>
                    <?php 
                          }
                          ?>
                    <tr>
                        <th colspan="2">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Student comment</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
                            </div>
                        </th>
                        <td ></td>
                        <td ><button type="submit"class="btn btn-primary" id="btn-students">Enviar</button></td>
                    </form>
                        <td></td>
                    </tr>
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