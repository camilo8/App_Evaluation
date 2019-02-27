<?php 
namespace Evaluations;
require_once('../Class/Evaluation.php');
header("Content-Type: text/html;charset=utf-8");
session_start();
if(isset($_GET['id'])){
     $Id= $_GET['id'];
     $Evalation_List1 = new Evaluation();
     $Evalation_List2 = new Evaluation();
     $result1 = $Evalation_List1->ConsultEvaluation($Id);
     
     foreach($result1 AS $value){
         $name = $value['Name'];
         $surname = $value['Surname'];
         $grade = $value['Grade_Id'];
         $commentary = $value['Commentary_Student'];
        }
         $result2= $Evalation_List2->ConsultEval($grade);
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="ISO-8859-1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
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
                     <form action="" method="">
                        <input type="hidden" value="<?php echo $id; ?>" name="students">
                            <?php 
                            $var1=1;
                            $var2=1;
                         /*consult of criterion*/
                         foreach ($result2 AS $value) {   
                             ?>
                        <th scope="row"> 
                            <?php echo $value['Id'] ?>
                        <td><h3><?php echo $value['Name'] ?></h3> <p><?php echo $value['Description'] ?></p></td>
                        <td colspan="2"> 
                          <?php 
                             foreach ($result1 AS $value) {
                               ?>
                        <select class="form-control" id="" name="" disabled>
                            <option value=""><?php echo $value['Criterion'.$var1++];?></option>
                        </select></td>
                        <td>
                             <input type="color" value="#<?php echo $value['Color'.$var2++];?>" class="color" id="" name="" disabled>
                               <?php
                             }
                          ?>
                        </td>
                    </tr>
                    <?php 
                          }
                          ?>
                    <tr>
                        <th colspan="2">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Student comment</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" value="" rows="3" name="comment" disabled><?php echo $commentary;?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Teacher comment</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" value="" rows="3" name="comment_teacher" ></textarea>
                            </div>
                        </th>
                        <td ></td>
                        <td ><button type="submit"class="btn btn-primary" id="btn_save" name="btn_save">Guardar</button></td>
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