<?php
namespace Evaluations;
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
    public $Color1;
    public $Color2;
    public $Color3;
    public $Color4;
    public $Color5;
    public $Color6;
    public $Color7;
    public $Color8;
    public $Color9;
    public $Color10;
    public $Color_Id;
    public $Student_Id;
    public $Teacher_Id;
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
    public function Teacher($Id){
         $sql="SELECT Id FROM person WHERE Grade_id = :Id AND Rol_Id=2";
         $this->Id = $Id;
         $query = $this->Cone->prepare($sql);
         $query->execute([
             'Id'=>$this->Id
         ]);
         $result = $query->fetchALL(\PDO::FETCH_ASSOC);
         return $result;
    }
    /*set Aswer table evaluation*/
    public function setAswer($Id,$Criterion1,$Color1,$Criterion2,$Color2,$Criterion3,$Color3,$Criterion4,$Color4,$Criterion5,$Color5,$Criterion6,$Color6,$Criterion7,$Color7,$Criterion8,$Color8,$Criterion9,$Color9,$Criterion10,$Color10,$Student_Id,$Teacher_Id,$Commentary_Student,$Commentary_Teacher,$End_Procces_Student,$End_Procces_Teacher,$Date){
        $sql="INSERT INTO evalution (Id,Criterion1,Color1,Criterion2,Color2,Criterion3,Color3,Criterion4,Color4,Criterion5,Color5,Criterion6,Color6,Criterion7,Color7,Criterion8,Color8,Criterion9,Color9,Criterion10,Color10,Student_Id,Teacher_Id,Commentary_Student,Commentary_Teacher,End_Procces_Student,End_Procces_Teacher,Date)
        VALUE(:Id,:Criterion1,:Color1,:Criterion2,:Color2,:Criterion3,:Color3,:Criterion4,:Color4,:Criterion5,:Color5,:Criterion6,:Color6,:Criterion7,:Color7,:Criterion8,:Color8,:Criterion9,:Color9,:Criterion10,:Color10,:Student_Id,:Teacher_Id,:Commentary_Student,:Commentary_Teacher,:End_Procces_Student,:End_Procces_Teacher,:Date)";
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
        $this->Color1=$Color1;
        $this->Color2=$Color2;
        $this->Color3=$Color3;
        $this->Color4=$Color4;
        $this->Color5=$Color5;
        $this->Color6=$Color6;
        $this->Color7=$Color7;
        $this->Color8=$Color8;
        $this->Color9=$Color9;
        $this->Color10=$Color10;
        $this->Student_Id=$Student_Id;
        $this->Teacher_Id=$Teacher_Id;
        $this->Commentary_Student=$Commentary_Student;
        $this->Commentary_Teacher=$Commentary_Teacher;
        $this->End_Procces_Student=$End_Procces_Student;
        $this->End_Procces_Teacher=$End_Procces_Teacher;
        $this->Date=$Date;
        $query=$this->Cone->prepare($sql);   
        $result = $query->execute([
            'Id'=>$this->Id,
            'Criterion1'=>$this->Criterion1,
            'Color1'=>$this->Color1,
            'Criterion2'=>$this->Criterion2,
            'Color2'=>$this->Color2,
            'Criterion3'=>$this->Criterion3,
            'Color3'=>$this->Color3,
            'Criterion4'=>$this->Criterion4,
            'Color4'=>$this->Color4,
            'Criterion5'=>$this->Criterion5,
            'Color5'=>$this->Color5,
            'Criterion6'=>$this->Criterion6,
            'Color6'=>$this->Color6,
            'Criterion7'=>$this->Criterion7,
            'Color7'=>$this->Color7,
            'Criterion8'=>$this->Criterion8,
            'Color8'=>$this->Color8,
            'Criterion9'=>$this->Criterion9,
            'Color9'=>$this->Color9,
            'Criterion10'=>$this->Criterion10,
            'Color10'=>$this->Color10,
            'Student_Id'=>$this->Student_Id,
            'Teacher_Id'=>$this->Teacher_Id,
            'Commentary_Student'=>$this->Commentary_Student,
            'Commentary_Teacher'=>$this->Commentary_Teacher,
            'End_Procces_Student'=>$this->End_Procces_Student,
            'End_Procces_Teacher'=>$this->End_Procces_Teacher,
            'Date'=>$this->Date            
        ]);
        return $result;
    }
    //function of consult students
    public function ConsultStudents($Grade_Id){
        $sql="SELECT person.Id , person.Name , person.Surname , person.Codigo,evalution.End_Procces_Student
        FROM  person  INNER JOIN evalution ON  person.Id = evalution.Student_Id WHERE Grade_Id = :Grade_Id";
        $this->Grade_Id = $Grade_Id;
        $query = $this->Cone->prepare($sql);
        $query->execute([
          'Grade_Id'=>$this->Grade_Id
      ]);
      $result = $query->fetchALL(\PDO::FETCH_ASSOC);
      return $result;
    }
    //function of consult evaluation 
    public function ConsultEvaluation($Student_Id){
        $sql="SELECT person.Id , person.Name , person.Surname , Person.Grade_Id , evalution.Criterion1 ,evalution.Criterion2, evalution.Criterion3 ,evalution.Criterion4,
         evalution.Criterion5 , evalution.Criterion6 ,evalution.Criterion7, evalution.Criterion8 , evalution.Criterion9 , evalution.Criterion10 , evalution.Color1 , 
         evalution.Color2, evalution.Color3, evalution.Color4, evalution.Color5 ,evalution.Color6,evalution.Color7,evalution.Color8, evalution.Color9,evalution.Color10 , 
        evalution.Commentary_Student , evalution.Commentary_Teacher FROM person INNER JOIN evalution ON person.Id =evalution.Student_Id WHERE evalution.Student_Id = :Student_Id";
        $this->Student_Id = $Student_Id;
        $query = $this->Cone->prepare($sql);
        $query->execute([
            'Student_Id'=>$this->Student_Id
        ]);
        $result = $query->fetchALL(\PDO::FETCH_ASSOC);
        return $result;
    }
     //set commentary of teacher 
    public function SetCommentary($Commentary_Teacher , $Student_Id , $Teacher_Id, $End_Procces_Teacher){
        $cone= new Conexion();
        $sql="UPDATE evalution SET  Teacher_Id=:Teacher_Id,  Commentary_Teacher= :Commentary_Teacher ,  End_Procces_Teacher=:End_Procces_Teacher WHERE Student_Id = :Student_Id";
        $this->Commentary_Teacher = $Commentary_Teacher;
        $this->Student_Id=$Student_Id;
        $this->Teacher_Id=$Teacher_Id;
        $this->End_Procces_Teacher = $End_Procces_Teacher;
        $query=$cone->prepare($sql);
        $result = $query->execute([
            'Commentary_Teacher'=>$this->Commentary_Teacher,
            'Student_Id'=>$this->Student_Id,
            'Teacher_Id'=>$this->Teacher_Id,
            'End_Procces_Teacher'=>$this->End_Procces_Teacher
        ]);
       // $result = $query->fetchALL(\PDO::FETCH_ASSOC);
        return $result;
    }
}
?>