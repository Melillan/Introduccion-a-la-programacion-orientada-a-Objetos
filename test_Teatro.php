<?php
include_once "Teatro.php";
function menuOpciones(){
             echo "\n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐ Escoja una opción: ‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮  \n";
             echo "│ 1. Ver la funcion de estreno.                    │\n";
             echo "│ 2. Ver otras funciones del día.                  │\n";
             echo "│ 3. Cambiar nombre del teatro.                    │\n";
             echo "│ 4. Crear 4 funciónes.                            │\n";
             echo "│ 5. Modificar funciones.                          │\n";
             echo "│ 6. Ver las funciones creadas.                    │\n";
             echo "│ 7. Ver todas las funciones.                      │\n";
             echo "│ 0. Salir.                                        │\n";
             echo "╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
             // Ingreso y lectura de la opcion
             echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
             echo "│ Ingrese su opción.                                          │";
             echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
             $respuesta = (int) trim(fgets(STDIN));
             return $respuesta;
}

$teatro = new Teatro("", "","", 0);
$funcion1 = new Teatro("La Casa de la Cultura", "9 de Julio, General Roca","Kimetsu no Yaiba", 3000);
$funcion2 = new Teatro("La Casa de la Cultura", "9 de Julio, General Roca","Jujutsu Kaisen", 2500);
$funcion3 = new Teatro("La Casa de la Cultura", "9 de Julio, General Roca","Shingeki No Kyojin", 3500);
$funcion4 = new Teatro("La Casa de la Cultura", "9 de Julio, General Roca","Haikyuu", 2000);

do{
             $respuesta = menuOpciones();
             switch ($respuesta) {
                          case 0:
                                       echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                       echo "│ Salida.                                                     │";
                                       echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                       break;
                          case 1:
                                       echo $funcion1;
                                       break;
                          case 2: 
                                       do {
                                                    echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                                    echo "│ ¿De qué función desea obtener información? 2/3/4            │";
                                                    echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                                    $informacion = (int) trim(fgets(STDIN));
                                                    if ($informacion == 2){
                                                    echo $funcion2;
                                                    }elseif($informacion == 3){
                                                                 echo $funcion3;
                                                    }elseif($informacion == 4){
                                                                 echo $funcion4;
                                                    }
                                                    echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                                    echo "│ ¿Desea ver otra función? si / no                            │";
                                                    echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                                    $informacion = trim(fgets(STDIN));
                                       }while ($informacion == "si");
                                       break;
                          case 3:
                                       echo $teatro->cambioNombre_Direccion("Broadway","Avenida Broadway, 350")."\n";
                                       break;
                          case 4:
                                       $funcionCreada = 1;
                                       while ($funcionCreada <= 4) {
                                                    echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                                    echo "│ Nombre de la función:                                       │";
                                                    echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                                    $nombreCreado = trim(fgets(STDIN));
                                                    echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                                    echo "│ Precio de la función:                                       │";
                                                    echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                                    $precioCreado = (int)trim(fgets(STDIN));
                                                    echo $teatro->funcionNueva($nombreCreado, $precioCreado, $funcionCreada);
                                                    $funcionCreada++;
                                       }
                                       break;
                          case 5:   
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
                                                    $teatro->funcionNuevaPrecio($modificacion, $turno,"Re:ZERO -Starting Life in Another World- ", 4000)."\n";
                                       }else{
                                                    $auxiliarTurnos = 1;
                                                    while($auxiliarTurnos <= 4){
                                                                 echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                                                 echo "│ Nombre de la función: ".$auxiliarTurnos."                                     │";
                                                                 echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                                                 $nombreFuncionModificada = trim(fgets(STDIN));
                                                                 echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                                                                 echo "│ Precio de la función: ".$auxiliarTurnos."                                     │";
                                                                 echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                                                                 $precioFuncionModificada = trim(fgets(STDIN));
                                                                 $teatro->funcionNuevaPrecio($modificacion, $auxiliarTurnos, $nombreFuncionModificada, $precioFuncionModificada ) ."\n";
                                                                 $auxiliarTurnos++;
                                                    }
                                       }
                                       break;
                          case 6:
                                       echo $teatro;
                                       break;
                          case 7: 
                                       $teatro->verDatosFunciones();
                                       $funcion1->verDatosFunciones();
                                       $funcion2->verDatosFunciones();
                                       $funcion3->verDatosFunciones();
                                       $funcion4->verDatosFunciones();
                                       break;           
             }
}while($respuesta != 0);