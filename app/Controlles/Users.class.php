<?php


class Users extends Controllers{
 
  private $Usermodel;

  public function __construct()
  {
    $this->Usermodel=$this->model("User");

  }
 
  /*
   inscrir en facebook

  */
  public function index(){
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $contact=$_POST['contact'];
    $reapcontact=$_POST['reaptcontact'];
    $pass=$_POST["password"];
    $date=$_POST["date"];
    $gener=$_POST['gener'];

    $this->Usermodel=$this->model("User");
    $this->Usermodel->insert_user($nom,$prenom,$contact,$pass,$date,$gener);
    $insert=[1];
    $this->postView=$this->view("home",$insert) ;
   

    }

  }
  /*

  login facebook

  */
  public function login(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $contact=$_POST['contact'];
      $password=$_POST['password'];

      $id_user=$this->Usermodel->login($contact,$password);
       if($id_user != 0){
       
   // set id user en session 
        $_SESSION["user_id"]=$id_user;

        $this->postView= $this->view("welcome");

       }else{


        $this->postView= $this->view("home");

       }

    }

  }

  // log out 

  public function logout(){

    $_SESSION["user_id"]=null;
    session_destroy() ;
    $this->postView= $this->view("home");





  }








}


