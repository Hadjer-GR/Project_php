<?php

class Controllers{

public function model($model){
  require_once "../app/Models/".ucwords($model).".class.php";
  return new $model;
}
public function view($view,$data=[]){

    if(file_exists("../app/View/".ucwords($view).".php")){
    require_once "../app/View/".ucwords($view).".php";
    } else{
        die("view doesn't existe");
    }




}

}
