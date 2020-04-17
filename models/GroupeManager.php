<?php
 class GroupeManager extends Model{
   
   
   
   
   
   public function getMembers(){
  
     
     return self::getAll('groupe1','Member');
   }
   
   
 }
