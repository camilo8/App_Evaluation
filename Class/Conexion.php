<?php 
namespace Evaluations;
 class Conexion  extends \PDO{
	private $type = 'mysql';
	private $host = 'localhost';
	private $dbname  ='eval';
	private $user =  'root';
	private $password = '';
	function __construct(){
		try{
			//conexion  base datos simple  
		 parent::__construct("$this->type:host=$this->host;dbname=$this->dbname",$this->user,$this->password);
		
		//manejo de ecepciones 
		 $this->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);	
		}catch (Exception $e){
		   echo "Error de base de datos: $e";
		}
	}
 }

$cone1  = new Conexion();
?>