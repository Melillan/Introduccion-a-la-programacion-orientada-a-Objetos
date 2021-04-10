<?php
include "Teatro.php";
include_once "Funciones.php";
function menuOpciones(){
             // Menú de opciones
             echo "\n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐ Escoja una opción: ‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮  \n";
             echo "│ 1. Cambiar nombre del teatro.                    │\n";
             echo "│ 2. Cargar Funcion del teatro.                    │\n";
             echo "│ 3. Modificar funciones.                          │\n";
             echo "│ 4. Ver las funciones.                            │\n";
             echo "│ 0. Salir.                                        │\n";
             echo "╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
             // Ingreso y lectura de la opcion
             echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
             echo "│ Ingrese su opción.                                          │";
             echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
             $respuesta = (int) trim(fgets(STDIN));
             return $respuesta;
}

$funcionNueva = new Funciones("Kimetsu no Yaiba", ["hs"=>"20", "min"=>"00"], ["hs"=>"3", "min"=>"00"], "3000");
$funcionesArreglo = array($funcionNueva);
$teatro = new Teatro("La Casa de la Cultura", "25 de Mayo, General Roca", $funcionesArreglo);

function tiempo(){
             do{
                          $valida = true;
                          echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                          echo "│ Ingrese las horas:                                          │";
                          echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                          $horas = trim(fgets(STDIN));
                          if ($horas >= 0 && $horas <= 23){
                                       echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                       echo "│ Ingrese los minutos:                                        │";
                                       echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                       $minutos = trim(fgets(STDIN));
                                       if ($minutos >= 0 && $minutos <= 60){
                                                    $valida = false;
                                                    $tiempo = ["hs"=> $horas, "min"=> $minutos];
                                       }else{
                                                    echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                                    echo "│ Los minutos no son validos.                                 │";
                                                    echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                       }
                          }else{
                                       echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                       echo "│ Las horas no son validas.                                   │";
                                       echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                          }
             } while ($valida);
             return $tiempo;
}

do{
             $respuesta = menuOpciones();
             switch ($respuesta) {
                          case 0:
                                       echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                       echo "│ Salida.                                                     │";
                                       echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                       break;
                          case 1:
                                       echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                       echo "│ Ingrese nombre del teatro:                                  │";
                                       echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                       $nombreNuevo = trim(fgets(STDIN));
                                       echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                       echo "│ Ingrese direccion del teatro:                               │";
                                       echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                       $direccionNueva = trim(fgets(STDIN));
                                       echo $teatro->cambioNombre_Direccion($nombreNuevo, $direccionNueva)."\n";
                                       break;
                          case 2:
                                       $arrayFuncionNueva = $teatro->getObjetoFuncion();  
                                       $contador = count($arrayFuncionNueva);
                                       while ($contador <=3){
                                                    echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                                    echo "│ Nombre de la función:                                       │";
                                                    echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                                    $nombreFuncion = trim(fgets(STDIN));
                                                    echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                                    echo "│ Horario de inicio de la función:                            │";
                                                    echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                                    $horarioInicio = tiempo();
                                                    $teatro->horario($horarioInicio);
                                                    echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                                    echo "│ Duracion de la función:                                     │";
                                                    echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                                    $duracionFuncion = tiempo();
                                                    echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                                    echo "│ Precio de la función:                                       │";
                                                    echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                                    $precioFuncion = trim(fgets(STDIN));
                                                    echo $teatro->cargarFunciones($nombreFuncion,$horarioInicio, $duracionFuncion, $precioFuncion)."\n";
                                                    $contador++;
                                       }
                                       break;
                          case 3:   
                                       echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                       echo "│ ¿Desea modificar una sola función o todas? si / no          │";
                                       echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                       $modificacion = trim(fgets(STDIN));
                                       if ($modificacion == "si"){
                                                    echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                                    echo "│ ¿Qué turno desea modificar?                                 │\n";
                                                    echo "│ ➸ Primer turno (1).                                         │\n";
                                                    echo "│ ➸ Segundo turno (2).                                        │\n";
                                                    echo "│ ➸ Tercer turno (3).                                         │\n";
                                                    echo "│ ➸ Cuarto turno (4).                                         │";
                                                    echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                                    $turno = (int) trim(fgets(STDIN));
                                                    $teatro->funcionNuevaPrecio($modificacion, $turno,"Re:ZERO -Starting Life in Another World- ", ["hs"=>"16", "min"=>"00"], ["hs"=>"3", "min"=>"00"], "4000")."\n";
                                       }else{
                                                    $auxiliarTurnos = 1;
                                                    while($auxiliarTurnos <= 4){
                                                                 echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                                                 echo "│ Nombre de la función: ".$auxiliarTurnos."                                     │";
                                                                 echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                                                 $nombreFuncionModificada = trim(fgets(STDIN));
                                                                 echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                                                 echo "│ Horario de inicio de la función: ".$auxiliarTurnos."                          │";
                                                                 echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                                                 $horarioFuncionModificada = tiempo();
                                                                 $teatro->horario($horarioFuncionModificada);
                                                                 echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                                                 echo "│ Duracion de la función: ".$auxiliarTurnos."                                   │";
                                                                 echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                                                 $duracionFuncionModificada = tiempo();
                                                                 echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                                                 echo "│ Precio de la función: ".$auxiliarTurnos."                                     │";
                                                                 echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                                                 $precioFuncionModificada = trim(fgets(STDIN));
                                                                 $teatro->funcionNuevaPrecio($modificacion, $auxiliarTurnos, $nombreFuncionModificada, $horarioFuncionModificada, $duracionFuncionModificada, $precioFuncionModificada ) ."\n";
                                                                 $auxiliarTurnos++;
                                                    }
                                       }
                                       break;
                          case 4:
                                       print_r ($teatro);
                                       break;
                          }
}while($respuesta != 0);
