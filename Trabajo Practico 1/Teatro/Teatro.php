<?php 
class Teatro{
             private $nombre;
             private $direccion;
             private $funcion;
             private $precio = 0;
             private $arrayFuncion = array();
             // Constructor
             public function __construct($nombre, $direccion , $funcion, $precio, $arrayFuncion=null){
                          $this->nombre = $nombre;
                          $this->direccion = $direccion;
                          $this->funcion = $funcion;
                          $this->precio = $precio;
                          $this->arrayFuncion = $arrayFuncion;
             }
             // Setters
             public function setNombre($nombre){
                          $this->nombre = $nombre;
             }
             public function setDireccion($direccion){
                          $this->direccion = $direccion;
             }
             public function setFuncion($funcion){
                          $this->funcion = $funcion;
             }
             public function setPrecio ($precio){
                          $this->precio = $precio;
             }
             public function setArrayFuncion ($arrayFuncion){
                          $this->arrayFuncion = $arrayFuncion;
             }
             // Getters
             public function getNombre(){
                          return $this->nombre;
             }
             public function getDireccion(){
                          return $this->direccion;
             }
             public function getFuncion(){
                          return $this->funcion;
             }
             public function getPrecio(){
                          return $this->precio;
             }
             public function getArrayFuncion(){
                          return $this->arrayFuncion;
             }
             // Metodos
             public function cambioNombre_Direccion($nuevoNombre,$direccion ){
                          $this->setNombre($nuevoNombre);
                          $this->setDireccion($direccion);
                          return "\n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n│ Nombre cambiado.                                            │\n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
             }
             public function funcionNueva($nuevaFuncionNombre, $nuevaFuncionPrecio, $funcionesCreadas){
                          $arrayFuncionNueva = $this->getArrayFuncion();
                          $arrayFuncionNueva[$funcionesCreadas]["nombre"] = $nuevaFuncionNombre;
                          $this->setArrayFuncion($arrayFuncionNueva);
                          $arrayFuncionNueva[$funcionesCreadas]["precio"] = $nuevaFuncionPrecio;
                          $this->setArrayFuncion($arrayFuncionNueva);
             }
             public function funcionNuevaPrecio($opciones, $funciones = null, $nuevaFuncionNombre = null, $nuevaFuncionPrecio = null){
                          $arrayFuncionNueva = $this->getArrayFuncion();
                          if($opciones == "si"){
                                       $arrayFuncionNueva[$funciones]["nombre"] = $nuevaFuncionNombre;
                                       $this->setArrayFuncion($arrayFuncionNueva);
                                       $arrayFuncionNueva[$funciones]["precio"] = $nuevaFuncionPrecio;
                                       $this->setArrayFuncion($arrayFuncionNueva);
                          }else{
                                       $arrayFuncionNueva[$funciones]["nombre"] = $nuevaFuncionNombre;
                                       $this->setArrayFuncion($arrayFuncionNueva);
                                       $arrayFuncionNueva[$funciones]["precio"] = $nuevaFuncionPrecio;
                                       $this->setArrayFuncion($arrayFuncionNueva);
                                       if ($opciones==4){
                                                    return "Se modificaron con exito las funciones";
                                       }
                          }
             }
             public function verDatosFunciones(){
                          $arrayFuncionNueva = $this->getArrayFuncion();
                          if ($arrayFuncionNueva == null){
                                       echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                       echo "│ Funcion: ".$this->getFuncion()."\n";
                                       echo "│ Precio: $".$this->getPrecio();
                                       echo "\n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                          }else{
                                       foreach($arrayFuncionNueva as $array){
                                                    foreach($array as $key => $value){
                                                    echo  $key." ->".$value." \n";
                                                    }
                                       }
                          }   
             }
             public function __toString(){
             return " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n│ Nombre del teatro: ".$this->getNombre()."\n│ Direccion: ". $this->getDireccion().$this->verDatosFunciones()."\n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n\n";
             }
}