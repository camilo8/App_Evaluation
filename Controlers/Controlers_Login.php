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
/*valid form of user*/
$var = count($ConsultPerson);
if($var === 1){
     echo "Bienvenido";
}else if($var!= 1) {
    header('Location:../index.html');
}
?>