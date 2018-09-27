<?php
class Form {
public function __construct() {}

  public function input($input, $name, $type){
    echo '<p><label for="'.$name.'">'.$name.'</label></p>';
    echo '<p><'.$input.' id="'.$name.'" type="'.$type.'"name="'.$name.'"></'.$input.'></p>';
  }

  public function submit(){
    echo '<button name="Envoyer" type="submit">Envoyer</button>';
  }
}
 ?>
