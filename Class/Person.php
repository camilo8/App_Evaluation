<?php 
namespace Evaluations;
require_once('Conexion.php');
class Person{
    /*Atributos*/
    private $Codigo;
    private $Cone;
    public  $Grade_Id;
    public  $Student_Id;

/*fuction of consul of date user*/
    public function __construct(){
       $this->Cone = new Conexion();  
    }
 public function SelectUser($Codigo, $Grade_Id){
     $sql ="SELECT *FROM person WHERE Codigo = :Codigo AND Grade_Id=:Grade_Id";
     $this->Codigo = $Codigo; 
     $this->Grade_Id =$Grade_Id;
     $query = $this->Cone->prepare($sql);
     $query->execute([
       'Codigo'=>$this->Codigo,
       'Grade_Id'=>$this->Grade_Id
     ]);
     $result = $query->fetchALL(\PDO::FETCH_ASSOC); 
     return $result;
 }

 public function ConsultProcces($Student_Id){
    $sql ="SELECT *FROM evalution WHERE Student_Id = :Student_Id AND End_Procces_Student ='SI'";
    $this->Student_Id = $Student_Id; 
    $query = $this->Cone->prepare($sql);
    $query->execute([
      'Student_Id'=>$this->Student_Id
    ]);
    $result = $query->fetchALL(\PDO::FETCH_ASSOC); 
    return $result;
}
}
?>