<?php
class Routeur{
  private static $_ctrl;
  private $_vue;
  
  public function routeReq(){
    try {
      
      // charger toutes les classes
      
    function chargeur ($class){
        include('models/'.$class.'.php');
        
      };
      spl_autoload_register('chargeur');
        
        $url='';
        if (isset($_GET['url'])) {
          $url=explode('/',filter_var($_GET['url'],FILTER_SANITIZE_URL));
          
          $controleur=ucfirst(strtolower($url[0]));
          
          $controleurClass='Controleur'.$controleur;
          
          $fichierControleur='controleurs/'.$controleurClass.'.php';
          
          
          if(file_exists($fichierControleur)){
            require_once($fichierControleur);
            self::$_ctrl=new $controleurClass($url);
            
            
          }else {
            throw new Exception('Page introuvablle');
          }
        }else{
          require_once('controleurs/ControleurAccueil.php');
          $this->_ctrl= new ControleurAccueil($url=null);
          
        }
        
     
      
      
    } catch (Exception $e) {
      $errorMsg=$e->getMessage();
      require_once('vues/errorMsg.php');
      
      
    }
    
  }
}





