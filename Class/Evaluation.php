<?php
namespace Evaluation;
require_once('Conexion.php');
class Evaluation{
    private $Grade_Id;
    private $Cone;

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
  
}
?>