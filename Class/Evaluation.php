<?php
namespace Evaluation;
require_once('Conexion.php');
class Evaluation{
    private $Grade_Id;
    private $Cone;

    public $Id;
    public $Criterion1;
    public $Criterion2;
    public $Criterion3;
    public $Criterion4;
    public $Criterion5;
    public $Criterion6;
    public $Criterion7;
    public $Criterion8;
    public $Criterion9;
    public $Criterion10;
    public $Color_Id;
    public $Student_Id;
    public $Teacher_Id,
    public $Commentary_Student;
    public $Commentary_Teacher;
    public $End_Procces_Student;
    public $End_Procces_Teacher;
    public $Date;



    public function  __construct(){
        $this->Cone = new Conexion();
    }    
    /*Function consult criterion  */
    public function  ConsultEval($Grade_Id){
         $sql="SELECT *FROM criterion WHERE Grade_Id = :Grade_Id";
         $this->Grade_Id = $Grade_Id;
         $query = $this->Cone->prepare($sql);
         $query->execute([
             'Grade_Id'=>$this->Grade_Id
         ]);
         $result = $query->fetchALL(\PDO::FETCH_ASSOC);
         return $result;
    }
    /*set color aswer */
     public function ColorAswer($Id,$Criterion1,$Criterion2,$Criterion3,$Criterion4,$Criterion5,$Criterion6,$Criterion7,$Criterion8,$Criterion9,$Criterion10,$Student_Id){
         $sql="INSERT INTO color(Id,Criterion1,Criterion2,Criterion3,Criterion4,Criterion5,Criterion6,Criterion7,Criterion8,Criterion9,Criterion10,Student_Id) VALUE (:Id,:Criterion1,:Criterion2,:Criterion3,:Criterion4,:Criterion5,:Criterion6,:Criterion7,:Criterion8,:Criterion9,:Criterion10,:Student_Id)";
         $query=$this->Cone->prepare($sql);   
         $query->execute([
             'Id'=>$this->Id;
             'Criterion1'=>$this->Criterion1,
             'Criterion2'=>$this->Criterion2,
             'Criterion3'=>$this->Criterion3,
             'Criterion4'=>$this->Criterion4,
             'Criterion5'=>$this->Criterion5,
             'Criterion6'=>$this->Criterion6,
             'Criterion7'=>$this->Criterion7,
             'Criterion8'=>$this->Criterion8,
             'Criterion9'=>$this->Criterion9,
             'Criterion10'=>$this->Criterion10,
             'Student_Id'=>$this->Student_Id
         ]);
         $result=$query->fetchALL(\PDO::FECHT_ASSOC);
         return $result;
     }
    /*Set Evaluation Aswer*/
    public function setAswer($Id,$Criterion1,$Criterion2,$Criterion3,$Criterion4,$Criterion5,$Criterion6,$Criterion7,$Criterion8,$Criterion9,$Criterion10,$Color_Id,$Student_Id,$Teacher_Id,$Commentary_Student,$Commentary_Teacher,$End_Procces_Student,$End_Procces_Teacher,$Date){
        $sql="INSERT INTO evaluation (Id,Criterion1,Criterion2,Criterion3,Criterion4,Criterion5,Criterion6,Criterion7,Criterion8,Criterion9,Criterion10,Color_Id,Student_Id,Teacher_Id,Commentary_Student,Commentary_Teacher,End_Procces_Student,End_Procces_Teacher,Date)
        VALUE(:Id,:Criterion1,:Criterion2,:Criterion3,:Criterion4,:Criterion5,:Criterion6,:Criterion7,:Criterion8,:Criterion9,:Criterion10,:Color_Id,:Student_Id,:Teacher_Id,:Commentary_Student,:Commentary_Teacher,:End_Procces_Student,:End_Procces_Teacher,:Date)";
        $this->Id=$Id;
        $this->Criterion1=$Criterion1;
        $this->Criterion2=$Criterion2;
        $this->Criterion3=$Criterion3;
        $this->Criterion4=$Criterion4;
        $this->Criterion5=$Criterion5;
        $this->Criterion6=$Criterion6;
        $this->Criterion7=$Criterion7;
        $this->Criterion8=$Criterion8;
        $this->Criterion9=$Criterion9;
        $this->Criterion10=$Criterion10;
        $this->Color_Id=$Color_Id;
        $this->Student_Id=$Student_Id;
        $this->Teacher_Id=$Teacher_Id;
        $this->Commentary_Student=$Commentary_Student;
        $this->Commentary_Teacher=$Commentary_Teacher;
        $this->End_Procces_Student=$End_Procces_Student;
        $this->End_Procces_Teacher=$End_Procces_Teacher;
        $this->Date=$Date;
        $query=$this->Cone->prepare($sql);   
        $query->execute([
            'Id'=>$this->Id;
            'Criterion1'=>$this->Criterion1,
            'Criterion2'=>$this->Criterion2,
            'Criterion3'=>$this->Criterion3,
            'Criterion4'=>$this->Criterion4,
            'Criterion5'=>$this->Criterion5,
            'Criterion6'=>$this->Criterion6,
            'Criterion7'=>$this->Criterion7,
            'Criterion8'=>$this->Criterion8,
            'Criterion9'=>$this->Criterion9,
            'Criterion10'=>$this->Criterion10,
            'Color_Id'=>$this->Color_Id,
            'Student_Id'=>$this->Student_Id,
            'Teacher_Id'=>$this->Teacher_Id,
            'Commentary_Student'=>$this->Commentary_Student,
            'Commentary_Teacher'=>$this->Commentary_Teacher,
            'End_Procces_Student'=>$this->End_Procces_Student,
            'End_Procces_Teacher'=>$this->End_Procces_Teacher,
            'Date'=>$this->Date            
        ]);
        $result=$query->fetchALL(\PDO::FECHT_ASSOC);
        return $result;
    }
  
}
?>