<?php 
namespace Evaluation;
require_once('../Class/Person.php');
if(isset($_POST) && !empty($_POST)){
   if(isset($_POST['code']) &&  !empty($_POST['code']) && isset($_POST['grade']) &&  !empty($_POST['grade'])){
       $Code = $_POST['code'];
       $Grade = $_POST['grade'];
        $Person1 = new Person();
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
              header('Location:../Views/Student.php');
              $_SESSION['u_Id'] = $id;
              $_SESSION['u_Name'] = $name;
              $_SESSION['u_Surname'] = $surname;
              $_SESSION['u_Grade']= $grade;
          break;
      }
}else if($var!= 1) {
    echo"<script>
        alert('User Do not exist'); 
    </script>";
    header('Location:../index.html');
}
?>