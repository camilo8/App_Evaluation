<?php 
namespace Evaluation;
require_once('Conexion.php');
class Person{
    /*Atributos*/
    private $Codigo;
    private $Cone;
    public  $Grade_Id;

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
}
?>