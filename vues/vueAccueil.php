<?php


foreach ($membres as $membre){

  echo '<div class="member-card">';
  echo '<img width="200" height="200" src="'.$membre->photo().'">';
 
  echo '<h5> Nom: '.$membre->nom().'</h5>';
  echo '<h5> Prénom: '.$membre->prenom().'</h5>';
  echo '<h5> Formation: '.$membre->formation().'</h5>';
 
  echo '</div><br><br>';
  

}