<?php
namespace Evaluations;
require_once('../Class/Evaluation.php');
    if(isset($_GET['commentary_teacher']) && !empty($_GET['commentary_teacher'])&& isset($_GET['Student_Id']) && !empty($_GET['Student_Id'])
             && isset($_GET['Teacher_Id']) && !empty($_GET['Teacher_Id'])){
        $Commentary = $_GET['commentary_teacher'];
         $Id_Student=$_GET['Student_Id'];
         $Id_Teacher=$_GET['Teacher_Id'];
         $procces = "SI"; 
         $SetAswer =new Evaluation();
         $SetAswer->SetCommentary($Id_Student,$Id_Teacher,$Commentary,$procces);
         echo "Yes";
    }

?>