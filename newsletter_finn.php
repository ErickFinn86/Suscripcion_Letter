<?php
/*
Plugin Name: Newsletter_Finn
Plugin URI: 
Description: crear un input para suscribirse a nuestra newsletter
Version: 
Author: Erick Frias
Author URI: 
License: 
License URI: 
*/
?>


<?php
function newsletter() {
?>
<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="news.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script>

       function ocultar(){
    
        var box = document.getElementById("div1")
        if (box.style.display === "none") {
        box.style.display = "block";
        } else {
        box.style.display = "none";}}
        
    </script>    
    

</head> 
<body>
  <div id="div1">
     <form method="post" id="formulario" action="enviarcorreo.php">
     <label>Deja tu correo electrónico para suscribirte a nuestro Newsletter</label>
     <br>
     <input name="correo" type="email" id="correo"
     value="" placeholder="Correo Electronico" style="width:50%" />
     <button id="btn2" type="submit">Suscribir</button>
     </form>
  </div>
     <button id="btn1" type="button" onclick="ocultar()">Hide</button>

    

</body>
</html>


<?php
}
add_action('the_content','newsletter');

?>


<?php

function titulo($text){
    
    $text = 'Newsletter de Erick Frias';
    
    return $text;
}

add_filter('the_title', 'titulo');

?>



