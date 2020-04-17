<?php

class Member{
  private $_id;
  private $_nom;
  private $_prenom;
  private $_formation;
  private $_photo;
  
  
  public function __construct(array $data){
    $this->hydrate($data);
  }
  
  
  public function hydrate(array $data){
    foreach ($data as $key => $value){
      $method='set'.ucfirst($key);
      if(method_exists($this,$method)){
        $this->$method($value);
      }
    }
  }
  
  
  //les setteurs
  public function setId($id){
    $id=(int)$id;
    if ($id>0){
     $this->_id=$id;
    }
  }
  

  public function setNom($nom){
    if (is_string($nom)){
      $this->_nom=$nom;
    }
  }
  
  public function setPrenom($prenom){
    if (is_string($prenom)){
      $this->_prenom=$prenom;
    }
  }
  public function setFormation($formation){
    if (is_string($formation)){
      $this->_formation=$formation;
    }
  }
  
  public function setPhoto($photo){
    if (is_string($photo)){
      $this->_photo=$photo;
    }
  }
  
  
  //les getters
  
  public function id(){
   return $this->_id;
  }
  
  public function nom(){
   return $this->_nom;
  }
  
  
public function prenom(){
   return $this->_prenom;
  }
  
  public function formation(){
   return $this->_formation;
  }
  
  public function photo(){
   return $this->_photo;
  }
  
 
}
