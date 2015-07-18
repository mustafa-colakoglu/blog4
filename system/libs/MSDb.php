<?php
/**
	* msMVC
	* @package MSmvc
	* @author Mustafa Çolakoğlu
	* @since Version 1.0

//---------------------------------------------------------------------------

	* msMVC MSDb
	* @package msMVC
	* @subpackage libs
	* @author Mustafa Çolakoğlu
	
**/
	if(@$defaultDb){}
	else{
		foreach($databases as $dbName=>$db){
			$defaultDb=$dbName;
		}
	}
	if(@$defaultDb){
		class MSDb extends MSLoad{
			var $dbStart;
			var $db;
			function __construct(){
				parent::__construct();
				require APPLICATION_PATH."config/config.php";
				if(@$defaultDb){}
				else{
					foreach($databases as $dbName=>$db){
						$defaultDb=$dbName;
					}
				}
				$db=$databases[$defaultDb];
				$this->db=$db;
				if($this->db["port"]){
					$host=$host.":".$port;
				}
				if($this->db["extension"]==="mysql"){
					$connect=mysql_connect($this->db["host"],$this->db["user"],$this->db["password"]);
					mysql_select_db($this->db["database"]);
				}
				else if($this->db["extension"]==="PDO" or $this->db["extension"]==="pdo"){
					$this->dbStart=new PDO("mysql:host=".$this->db["host"].";dbname=".$this->db["database"],$this->db["user"],$this->db["password"]);
				}
			}
			function select($table,$where="",$column="",$other=""){
				if($where!=""){
					$where="WHERE ".$where;
				}
				if($column==""){
					$column="*";
				}
				$sql="SELECT ".$column." FROM ".$table." ".$where." ".$other;
				if($this->db["extension"]==="mysql"){
					$data = array();
					$columns = array();
					$get = mysql_query($sql);
					if($column==="*"){
						$columnList=mysql_query("SHOW COLUMNS FROM $table");
						while ($row = mysql_fetch_object($columnList)){
							$a=$row->Field;
							array_push($columns,$a);
						}
					}
					else{
						$columns=explode(",",$columns);
					}
					while($fetch=mysql_fetch_array($get)){
						$array=array();
						for($i=0;$i<count($columns);$i++){
							$array[$columns[$i]]=$fetch[$columns[$i]];
							$array[$i]=$fetch[$i];
						}
						array_push($data,$array);
					}
				}
				else if($this->db["extension"]==="PDO" or $this->db["extension"]==="pdo"){
					$get = @$this->dbStart->prepare($sql);
					$get->execute();
					$data = $get->fetchAll();
				}
				else{
					$data = array();
				}
				return $data;
			}
			public function insert($tablo,$satirlar=false,$degerler){
				$sql="INSERT INTO ".$tablo."(".$satirlar.") VALUES(".$degerler.")";
				if(!$satirlar){
					$sql="INSERT INTO ".$tablo." VALUES(".$degerler.")";
				}
				return $this->msQuery($sql);
			}
			public function update($tablo,$set,$where=false,$diger=false){
				if($where){
					$sql="UPDATE ".$tablo." SET ".$set." WHERE ".$where;
				}
				else{
					$sql="UPDATE ".$tablo."SET ".$set;
				}
				return $this->msQuery($sql);
			}
			public function delete($tablo,$where=false){
				if($where){
					$sql="DELETE FROM ".$tablo." WHERE ".$where;
				}
				else{
					$sql="DELETE FROM ".$tablo;
				}
				return $this->msQuery($sql);
			}
			function msQuery($sql){
				if($this->db["extension"]==="mysql"){
					return @mysql_query($sql);
				}
				else if($this->db["extension"]==="PDO" or $this->db["extension"]==="pdo"){
					return $this->dbStart->query($sql);
				}
			}
			function lastInsertId(){
				if($this->db["extension"]==="mysql"){
					return @mysql_insert_id();
				}
				else if($this->db["extension"]==="PDO" or $this->db["extension"]==="pdo"){
					return $this->dbStart->lastInsertId();
				}
			}
		}
	}
	else{
		class MSDb extends MSCore{}
	}
//---------------------------------------------------------------------------
/* End of file MSDb.php */
/* Location : ./system/core/libs/MSDb.php*/
?>