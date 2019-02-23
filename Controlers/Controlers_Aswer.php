<?php
namespace Evaluations;
require_once('../Class/Evaluation.php');
if(isset($_GET) && !empty($_GET)){
    if(isset($_GET['students']) && !empty($_GET['students']) && isset($_GET['aswer1']) && !empty($_GET['aswer1']) &&
    isset($_GET['aswer2']) && !empty($_GET['aswer2']) && isset($_GET['aswer3']) && !empty($_GET['aswer3'])
    && isset($_GET['aswer4']) && !empty($_GET['aswer4'])&& isset($_GET['aswer6']) && !empty($_GET['aswer6'])
    && isset($_GET['aswer7']) && !empty($_GET['aswer7'])&& isset($_GET['aswer8']) && !empty($_GET['aswer9'])
    && isset($_GET['aswer9']) && !empty($_GET['aswer9'])&& isset($_GET['aswer10']) && !empty($_GET['aswer10'])
    && isset($_GET['aswer1']) && !empty($_GET['aswer1'])){
        $Id= null;
        $Students_Id =  $_GET['students'];
        $Teacher_Id= null;
        
        $Aswer1 = $_GET['aswer1'];
        $Aswer2 = $_GET['aswer2'];
        $Aswer3 = $_GET['aswer3'];
        $Aswer4 = $_GET['aswer4'];
        $Aswer5 = $_GET['aswer5'];
        $Aswer6 = $_GET['aswer6'];
        $Aswer7 = $_GET['aswer7'];
        $Aswer8 = $_GET['aswer8'];
        $Aswer9 = $_GET['aswer9'];
        $Aswer10 = $_GET['aswer10'];
        
        $Color1 = $_GET['color1'];
        $Color2 = $_GET['color2'];
        $Color3 = $_GET['color3'];
        $Color4 = $_GET['color4'];
        $Color5 = $_GET['color5'];
        $Color6 = $_GET['color6'];
        $Color7 = $_GET['color7'];
        $Color8 = $_GET['color8'];
        $Color9 = $_GET['color9'];
        $Color10 = $_GET['color10'];

        $Comentary_Students = $_GET['comment'];
        $Comentary_Teacher = null ;

        $End_Procces_Student = "SI";
        $End_Procces_Teacher = null;
        
        $Evaluation1 = new Evaluation();
        $Date = date('l jS \of F Y');
       

        /*28 Dates*/
        $Evaluation1->setAswer($Id,$Aswer1,$Color1,$Aswer2,$Color2,$Aswer3,$Color3,$Aswer4,$Color4,$Aswer5,$Color5,$Aswer6,$Color6,
        $Aswer7,$Color7,$Aswer8,$Color8,$Aswer9,$Color9,$Aswer10,$Color10,$Students_Id, $Teacher_Id,$Comentary_Students,
        $Comentary_Teacher, $End_Procces_Student,$End_Procces_Teacher,$Date);
    
        header('Location:Controlers_Header.php?successfull=YES');
    }else{
         header('Location:../Views/Student.php?successfull=NOT');
    }
}
?>