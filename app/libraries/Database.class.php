<?php


class Database{
private $host="localhost";
private $user=DB_USER;
private $password=DB_PASSWORD;
private $db_name=DB_NAME;

private $mycon;
private $stmt;

// create connection to database 
public function __construct()
{
        // dsn :data source name
  try{
    $dsn="mysql:host=".$this->host.";dbname=".$this->db_name;
   $this->mycon=new PDO($dsn,$this->user,$this->password);
  }catch(PDOException $e){
      die("faild connection to data base ".$e->getMessage());
  }

}

//

public function preparedstmt($sql){

  $this->stmt=$this->mycon->prepare($sql);

}

// this fonction related value with paramater in prebaered statment

public function bind_Value($param,$value,$type=null){

if(is_null($type)){
    switch(true){
  case is_int($value):
    $type=pdo::PARAM_INT;
  break;
  case is_bool($value):
    $type=pdo::PARAM_BOOL;
  break;
  
  default:
  $type=pdo::PARAM_STR;
    }
}
$this->stmt->bindValue($param,$value,$type);

}
// execute query 
public function executeQuery(){
   $this->stmt->execute();

}

// fetch data  that have multiple row 

public function fetchAll(){
    $this->stmt->execute();
  $result= $this->stmt->fetchAll(PDO::FETCH_OBJ);
  return $result;

}
// fetch data that have one row 
public function fetch(){
    $this->stmt->execute();
  $result= $this->stmt->fetch(PDO::FETCH_OBJ);;
  return $result;

}

// row count 

public function rowCount(){
   return $this->stmt->rowCount();

}



// end connection to database 

public function endconnect()
{
    
if($this->stmt!=null){
  $this->stmt=null;
}
if($this->mycon!=null){
    $this->mycon=null;
}



}





}