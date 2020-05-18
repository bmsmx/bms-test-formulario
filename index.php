<?php
/**
 * Plugin Name: BMS Formulario 
 * Author: Manuel Villavicencio G.
 * Description: Formulario personalizado que utiliza shortcode [bms-form1]
 * Version: 1.0
 */
// Define el shortcode que muestra el formulario
add_shortcode('kfp_aspirante_form', 'Kfp_Aspirante_form');
 
/** 
 * Define la función que ejecutará el shortcode
 * De momento sólo pinta un formulario que no hace nada
 * 
 * @return string
 */
function Kfp_Aspirante_form() 
{
    
    ob_start();
?>

<h1>Prueba</h1>


<?php
return ob_get_clean();
}
?>