<?php
/**
 * Ejercicio hecho by Ximo
 */
class Animal
{
//Declaración de una propiedad

  public $animal="Perro";
  public $patas=4;

//Declaracion de un metodo

//Getters
  public function getAnimal(){
    return $this->animal;
    }

  public function getPatas(){
    return $this->patas;
    }


//Setters
  public function setAnimal($cambiarAnimal){
    $this->animal=$cambiarAnimal;
    }

  public function setPatas($cambiarPatas){
    $this->patas=$cambiarPatas;
    }
}
 ?>
