<?php 
/** Función utilizada para calcular la cantidad de botellas total
* @param array $cantBotellasVino
* @return array 
*/
function cantidadBotellas($cantBotellasVino){
    $sumaCantidad = 0;
    for ($i=0; $i < count($cantBotellasVino) ; $i++) { 
        $sumaCantidad = $sumaCantidad + $cantBotellasVino[$i];
    }
    $estadisticaVinosBotellas = array();
    $estadisticaVinosBotellas = ["cantidad" => $sumaCantidad];
    return $estadisticaVinosBotellas;
}
/** Función utilizada para calcular el promedio de precios de las distintas variedades de un vino
* @param array $precioUnidadVino
* @return array 
*/
function precioPromedio($precioUnidadVino){
    $sumaPrecio = 0;
    for ($i=0; $i < count($precioUnidadVino) ; $i++) { 
        $sumaPrecio = $sumaPrecio + $precioUnidadVino[$i];
    }
    $promedio = $sumaPrecio / count($precioUnidadVino);
    $promedioRedondeado = round($promedio);
    $estadisticaVinosPrecio = array();
    $estadisticaVinosPrecio = ["precio" => $promedioRedondeado];
    return $estadisticaVinosPrecio;
}
/** Función main donde se realiza la estructura de arreglo y se ejecuta el bucle repetitivo 
 * para interactuar con el usuario y arrojar los datos pertinentes. 
 * @param array $vinitos
 */
function main(){
    $vinitos = array();
    $vinitos ["Malbec"] = array(
            "variedad" => ["seco  ", "amargo", "dulce "],
            "cantBotellas" => [700, 400, 800],
            "anioProduccion" => [2000, 2002, 1999 ],
            "precioUnidad" => [1000, 1100, 1200 ]);
    $vinitos ["Cabernet Sauvignon"] = array(
            "variedad" => ["dulce ", "amargo", "seco  "],
            "cantBotellas" => [600, 300, 750],
            "anioProduccion" => [2002, 2005, 2000 ],
            "precioUnidad" => [1300, 1200, 1000 ]);
    $vinitos ["Merlot"] = array(
            "variedad" => ["amargo", "dulce ", "seco  "],
            "cantBotellas" => [350, 500, 600],
            "anioProduccion" => [2004, 2002, 2001 ],
            "precioUnidad" => [1000, 1300, 1100 ]);

        do{

            echo "╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐ Escoja un vino a su elección: ‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮  \n│⋯⋯⋯⋯⋯⋯➤ 1: Malbec                                            │\n│⋯⋯⋯⋯⋯⋯➤ 2: Cabernet Sauvignon                                │ \n│⋯⋯⋯⋯⋯⋯➤ 3: Merlot                                            │\n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
            $eleccionDeVino = trim(fgets(STDIN));
                if ($eleccionDeVino == 1){
                    for ($i=0; $i < 3 ; $i++) { 
                        echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                        echo "│ La variedad de su vino es: ". $vinitos["Malbec"]["variedad"][$i] . "                           │\n";
                        echo "│ Este vino posee: " . $vinitos["Malbec"]["cantBotellas"][$i] . " botellas.                              │\n";
                        echo "│ El año de la elaboración de este vino fue en: " . $vinitos["Malbec"]["anioProduccion"][$i] . "          │\n";
                        echo "│ El precio por unidad del vino es: $" . $vinitos["Malbec"]["precioUnidad"][$i]."                     │";
                        echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                        }
                        $estadisticaVinosBotellas = cantidadBotellas( $vinitos["Malbec"]["cantBotellas"]);
                        $estadisticaVinosPrecio = precioPromedio($vinitos["Malbec"]["precioUnidad"]);
                        echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                        echo "│ Hay ".$estadisticaVinosBotellas["cantidad"]." vinos en total.                                    │\n";
                        echo "│ El precio promedio del vino es de: $".$estadisticaVinosPrecio["precio"]."                    │";
                        echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";       
                }

                elseif ($eleccionDeVino == 2){
                    for ($i=0; $i < 3 ; $i++) { 
                        echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                        echo "│ La variedad de su vino es: ". $vinitos["Cabernet Sauvignon"]["variedad"][$i] . "                           │\n";
                        echo "│ Este vino posee: " . $vinitos["Cabernet Sauvignon"]["cantBotellas"][$i] . " botellas.                              │\n";
                        echo "│ El año de la elaboración de este vino fue en: " . $vinitos["Cabernet Sauvignon"]["anioProduccion"][$i] . "          │\n";
                        echo "│ El precio por unidad del vino es: $" . $vinitos["Cabernet Sauvignon"]["precioUnidad"][$i]."                     │";
                        echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                    }
                    $estadisticaVinosBotellas = cantidadBotellas( $vinitos["Cabernet Sauvignon"]["cantBotellas"]);
                    $estadisticaVinosPrecio = precioPromedio($vinitos["Cabernet Sauvignon"]["precioUnidad"]);
                    echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                    echo "│ Hay ".$estadisticaVinosBotellas["cantidad"]." vinos en total.                                    │\n";
                    echo "│ El precio promedio del vino es de: $".$estadisticaVinosPrecio["precio"]."                    │";
                    echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";       
                }

                elseif ($eleccionDeVino == 3){
                    for ($i=0; $i < 3 ; $i++) { 
                        echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                        echo "│ La variedad de su vino es: ". $vinitos["Merlot"]["variedad"][$i] . "                           │\n";
                        echo "│ Este vino posee: " . $vinitos["Merlot"]["cantBotellas"][$i] . " botellas.                              │\n";
                        echo "│ El año de la elaboración de este vino fue en: " . $vinitos["Merlot"]["anioProduccion"][$i] . "          │\n";
                        echo "│ El precio por unidad del vino es: $" . $vinitos["Merlot"]["precioUnidad"][$i]."                     │";
                        echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
                    }
                    $estadisticaVinosBotellas = cantidadBotellas( $vinitos["Merlot"]["cantBotellas"]);
                    $estadisticaVinosPrecio = precioPromedio($vinitos["Merlot"]["precioUnidad"]);
                    echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                    echo "│ Hay ".$estadisticaVinosBotellas["cantidad"]." vinos en total.                                    │\n"; 
                    echo "│ El precio promedio del vino es de: $".$estadisticaVinosPrecio["precio"]."                    │";         
                    echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
            }
            else{
                echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
                echo "│ Error, ingrese una opcion entre las 3, vuelva a intentar    │";
                echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
            }
            echo " \n╭‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╮\n";
            echo "│ ¿Quiere ver otra opcion? si/no                              │";
            echo " \n╰‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐‐╯\n";
            $opcion = trim(fgets(STDIN));
        } while ($opcion  <> "no");
}
main(); 
