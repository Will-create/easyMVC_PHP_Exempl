<?php

class ControleurAccueil {
  private $_groupeManager;
  private $_vue;
  
  //constructeur
  
  public function __construct($url){
    if (isset($url)) {
      
      throw new Exception ('page introuvable');
    }else {
      $this->members();
    }
  }
  private function members(){
    $this->_groupeManager=new GroupeManager;
    $membres=$this->_groupeManager->getMembers();
    
    require_once('vues/vueAccueil.php');
    
  }

}
