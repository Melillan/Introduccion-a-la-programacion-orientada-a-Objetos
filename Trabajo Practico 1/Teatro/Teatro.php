<?php 
class Teatro{
             private $nombre;
             private $direccion;
             private $funcion;
             private $objetoFuncion;
             // Constructor
             public function __construct($nombre, $direccion , $objetoFuncion){
                          $this->nombre = $nombre;
                          $this->direccion = $direccion;
                          $this->objetoFuncion = $objetoFuncion;
                          $this->funcion;
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
             public function setObjetoFuncion ($objetoFuncion){
                          $this->objetoFuncion = $objetoFuncion;
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
             public function getPrecio (){
                          return $this->precio;
             }
             public function getObjetoFuncion (){
                          return $this->objetoFuncion;
             }
             // Metodos
             // Cambiar el nombre y la dirección del teatro
             public function cambioNombre_Direccion($nuevoNombre,$direccion ){
                          $this->setNombre($nuevoNombre);
                          $this->setDireccion($direccion);
                          return "\n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n│ Nombre cambiado.                                            │\n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
             }
             //
             public function cargarFunciones($nuevaFuncionNombre, $horarioInicioFuncion , $duracionFuncion, $precioFuncion){
                          $arrayFuncionNueva = $this->getObjetoFuncion();
                          $auxiliar = count($arrayFuncionNueva);
                          $this->setFuncion($auxiliar);
                          if (count($arrayFuncionNueva)>=0){
                                       if ($this->getFuncion()<=4){
                                                    $arrayFuncionNueva[$this->getFuncion()]["Nombre"]= $nuevaFuncionNombre;
                                                    $this->setObjetoFuncion($arrayFuncionNueva);
                                                    $arrayFuncionNueva[$this->getFuncion()]["Horario Inicio"]= $horarioInicioFuncion;
                                                    $this->setObjetoFuncion($arrayFuncionNueva);  
                                                    $arrayFuncionNueva[$this->getFuncion()]["Duracion"]= $duracionFuncion;
                                                    $this->setObjetoFuncion($arrayFuncionNueva);
                                                    $arrayFuncionNueva[$this->getFuncion()]["Precio"]= $precioFuncion;
                                                    $this->setObjetoFuncion($arrayFuncionNueva);
                                       }
                          }
             }
             public function horario($horario){
                          $arrayFuncionNueva= $this->getObjetoFuncion();  
                          for ($i=0; $i<count($arrayFuncionNueva); $i++){
                                       
                                       $horarioInicio = $arrayFuncionNueva[$i]->getHorarioInicio();
                                       $horasInicio = $horarioInicio["hs"];
                                       $minutosInicio = $horarioInicio["min"]; 

                                       $duracionPelicula = $arrayFuncionNueva[$i]->getDuracion();   
                                       $horasDuracion = $duracionPelicula["hs"];
                                       $minutosDuracion = $duracionPelicula["min"];

                                       $sumatoriaHoras =  $horasInicio + $horasDuracion;
                                       $sumatoriaMinutos  = $minutosInicio + $minutosDuracion;

                                       $horas = $horario["hs"];
                                       $minutos = $horario["min"];
                                       if($horas >= $sumatoriaHoras && $minutos >= $sumatoriaMinutos){
                                                    $respuesta = array(true, [null, null]);
                                                    return $respuesta;
                                       }else{
                                                    $respuesta = array(false, [$sumatoriaHoras, $sumatoriaMinutos]);
                                                    return  $respuesta;
                                       }
                          }
             }
             public function funcionNuevaPrecio($opciones, $funciones = null, $nuevaFuncionNombre = null, $horarioInicio, $duracion, $nuevaFuncionPrecio = null){
                          $arrayFuncionNueva = $this->getObjetoFuncion();
                          if($opciones == "si"){
                                       $arrayFuncionNueva[$funciones][" Nombre"] = $nuevaFuncionNombre;
                                       $this->setObjetoFuncion($arrayFuncionNueva);
                                       $arrayFuncionNueva[$funciones][" Horario Inicio"] = $horarioInicio;
                                       $this->setObjetoFuncion($arrayFuncionNueva);
                                       $arrayFuncionNueva[$funciones][" Duracion"] = $duracion;
                                       $this->setObjetoFuncion($arrayFuncionNueva);
                                       $arrayFuncionNueva[$funciones][" Precio"] = $nuevaFuncionPrecio;
                                       $this->setObjetoFuncion($arrayFuncionNueva);
                          }else{
                                       $arrayFuncionNueva[$funciones][" Nombre"] = $nuevaFuncionNombre;
                                       $this->setObjetoFuncion($arrayFuncionNueva);
                                       $arrayFuncionNueva[$funciones][" Horario Inicio"] = $horarioInicio;
                                       $this->setObjetoFuncion($arrayFuncionNueva);
                                       $arrayFuncionNueva[$funciones][" Duracion"] = $duracion;
                                       $this->setObjetoFuncion($arrayFuncionNueva);
                                       $arrayFuncionNueva[$funciones][" Precio"] = $nuevaFuncionPrecio;
                                       $this->setObjetoFuncion($arrayFuncionNueva);
                          }
             }
             public function verDatosFunciones(){
                          $arrayFuncionNueva = $this->getObjetoFuncion();
                          foreach($arrayFuncionNueva as $array){
                                       foreach($array as $key => $value){
                                       echo  $key." ->".print_r($value)." \n";
                                       }
                          }   
             }
             public function __toString(){
             return " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n│ Nombre del teatro: ".$this->getNombre()."\n│ Direccion: ". $this->getDireccion()."\n".$this->verDatosFunciones()."\n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n\n";
             }
}