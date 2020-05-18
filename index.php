<?php
/**
 * Plugin Name: BMS Formulario 
 * Author: Manuel Villavicencio G.
 * Description: Formulario personalizado que utiliza shortcode [bms-form1]
 * Version: 1.0
 */
// Define el shortcode que muestra el formulario
add_shortcode('bms_form1','bms_form1');


    function bms_form1() 
{
    
    ob_start();
?>

<h1>Prueba</h1>


<?php
return ob_get_clean();
}
?>