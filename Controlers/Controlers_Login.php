<?php 
namespace Evaluations;
require_once('../Class/Person.php');
if(isset($_POST) && !empty($_POST)){
   if(isset($_POST['code']) &&  !empty($_POST['code']) && isset($_POST['grade']) &&  !empty($_POST['grade'])){
       $Code = $_POST['code'];
       $Grade = $_POST['grade'];
        $Person1 = new Person();
        $Person2 = new Person();
       $ConsultPerson = $Person1->SelectUser($Code,$Grade);
   }
}
session_start();
/*valid form of user*/
$var = count($ConsultPerson);
foreach($ConsultPerson as $Value){
    $id= $Value['Id'];
    $name= $Value['Name'];
    $surname= $Value['Surname'];
    $codigo= $Value['Codigo'];
    $rol= $Value['Rol_Id'];
    $grade=$Value['Grade_Id'];
}
if($var === 1){
      switch($rol){
          case 1:
          /*student*/
          /*Consult procces of student*/
         $ConsultProcces = $Person2->ConsultProcces($id);
         $var1 = count($ConsultProcces);
          if($var1 != 1){
              $_SESSION['u_Id'] = $id;
              $_SESSION['u_Name'] = $name;
              $_SESSION['u_Surname'] = $surname;
              $_SESSION['u_Grade']= $grade;
             header('Location:../Views/Student.php');
          }else{
            header('Location:Controlers_Header.php?procces=false');
          }
          break;
          case 2:
           /*teacher*/
                $_SESSION['u_Id'] = $id;
                $_SESSION['u_Name'] = $name;
                $_SESSION['u_Surname'] = $surname;
                $_SESSION['u_Grade']= $grade;
                header('Location:../Views/Teacher.php');
          break;
      }
}else if($var!= 1) {
    echo"<script>
        alert('User Do not exist'); 
    </script>";
    header('Location:Controlers_Header.php?error=true');
}
?>