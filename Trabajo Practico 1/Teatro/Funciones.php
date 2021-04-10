<?php
class Funciones{
             private $nombre;
             private $horarioInicio;
             private $duracion;
             private $precio;
             // Construct
             public function __construct($nombre,$horarioInicio,$duracion,$precio){
                          $this->nombre = $nombre;
                          $this->horarioInicio = $horarioInicio;
                          $this->duracion = $duracion;
                          $this->precio = $precio;
             }
             // Setters
             public function setNombre ($nombre){
                          $this->nombre = $nombre;
             }
             public function setHorarioInicio ($horarioInicio){
                          $this->horarioInicio = $horarioInicio;
             }
             public function setDuracion ($duracion){
                          $this->duracion = $duracion;
             }
             public function setPrecio ($precio){
                          $this->precio = $precio;
             }
             // Getters
             public function getNombre (){
                          return $this->nombre;
             }
             public function getHorarioInicio (){
                          return $this->horarioInicio;
             }            
             public function getDuracion (){
                          return $this->duracion;
             }
             public function getPrecio (){
                          return $this->precio;
             }
             public function __toString(){
                          $caracteres = "Nombre de la funcion: ".$this->getNombre()."\n";
                          $caracteres = $caracteres ." Horario de funcion: ".$this->getHorarioInicio()."\n";
                          $caracteres = $caracteres ." Duracion de funcion: ".$this->getDuracion()."\n";
                          $caracteres = $caracteres ." Precio de funcion: ".$this->getPrecio()."\n";
                          return $caracteres;
             }
}