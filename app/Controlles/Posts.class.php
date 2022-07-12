<?php

include_once "../app/loader.php";

echo"gigi";

class Posts extends Controllers{

    public function __construct()
    {
        
      $this->postModel =$this->model("post")  ;
    }

    public function index(){

       $this->postModel->verfie_user("hadjer","gigi");
        echo"hhhh";
        $list_user=["hadjer","rania","wissal"];
        $this->postview=$this->view("home",$list_user);

    }

  

}
