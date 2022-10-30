<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/estilos.css">

</head>
<body>



 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="img-bar"></span>
        <span class="img-bar"></span>
        <span class="img-bar"></span>                        
      </button>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="homepage.php">Inicio</a></li>
 
        <li><a href="homepage.php">Contacto</a></li>
      </ul>

    </div>
  </div>
</nav>


<div class="jumbotron">
  <div class="container text-center">
  <img src="../recursos/img/OIP.jpg">
    <h1>Datos del Formulario</h1>      
    <p>Tarea de Programacion Avanzada</p>
  </div>
</div>


<center>
<h2>Datos Ingresados</h2>

  <form>
    <div class="form-group">

<!--ESTO ES CODIGO PHP-->
<?php
// Obtener datos ingresados

if (isset($_POST['btnEnviar'])) {
// declarar variables vacias
$var ="";
$varnom ="";
$varape ="";
$varedad ="";
$varpeso ="";
$varsexo ="";
$varestado ="";
$varestudio ="";
//$varaficiones =[($_POST['aficion'])];
//$varaficiones1 = array(($_POST['aficion']));


if ($_POST['nombre']==null || $_POST['nombre']=="") {

    $var= "No se ingreó el nombre";
   $varnom ="";

}  
//SI TODO ESTA CORRECTO    $varestado = ($_POST['estado']);
else
{
   $var = "Los datos ingresados son: ";
   $varnom = ($_POST['nombre']);
   $varape = ($_POST['apellido']);
   $var1 = " Con una edad entre los ";
   $varedad = ($_POST['edad']);
   $var2 = " y un peso de ";
   $varpeso = ($_POST['peso']);
   $varsexo = ($_POST['sexo']);
   $varestado = ($_POST['estado']);
   $varestudio = ($_POST['estudio']);
   //$varaficiones = [($_POST['aficion'])];
  // $varaficiones1 = [($_POST['aficion'])];
   
}

//Validar el genero de la  persona
if ($_POST['sexo']== "hombre") {
    $varsexo = "Sexo masculuno,";
}else{
    $varsexo = "Sexo femenino,";
}

//Validar el estado civil
if ($_POST['estado']== "casado") {
    $varestado = "Casado(a)";
}
elseif ($_POST['estado']== "soltero") {
    $varestado = "Soltero(a)";
}
else{
    $varestado = "otro";
}

//Validar los estudios
switch ($varestudio) {
    case "no":
        $varestudio = "No tiene estudio";
        break;

    case "primarios":
        $varestudio = "Tiene estudios primarios";
        break;
    
    default:
    $varestudio = "Tiene estudios secundarios";
        break;
}


//Validar aficiones de la persona
/*switch ($varaficiones) {
    case "cine":
        $varaficiones += "cine";
        break;

    case "literatura":
        $varaficiones += "literatura";
        break;
    
    default:
    $varaficiones = "videojuegos";
        break;
}*/


//$var= "aqui van los valores";
//Validacion de envio de formulario

   


       /* if(isset($_POST['btnEnviar'])){ 
        if(!empty($_POST['check_lista'])) {
            // Contando el numero de input seleccionados "checked" checkboxes.
            $checked_contador = count($_POST['check_lista']);
            echo "<p>Has seleccionado los siguientes ".$checked_contador." opcione(s):</p> <br/>";
            // Bucle para almacenar y visualizar valores activados checkbox.
            foreach($_POST['check_lista'] as $seleccion) {
            echo "<p>".$seleccion ."</p>";
            }
            echo "<br/><b>Nota :</b> <span>De manera similar, también puede realizar operaciones CRUD usando estos valores seleccionados.</span>";
            }
            else{
            echo "<p><b>Por favor seleccione al menos una opción.</b></p>";
            }
            }*/



//IMPRIMIR EN PANTALLA
echo "$var" . "$varnom" . " $varape" ."<br>";

echo "$var1" . " $varedad" . " $var2" ." $varpeso" . " kg ".  "<br>";
echo " $varsexo"." $varestado" . "<br>";
echo " $varestudio" . "<br>";
//echo " $varaficiones" . "<br>";

//echo implode(" ", $varaficiones). "<br>";
//echo implode(" ", $varaficiones1);

if(isset($_POST['btnEnviar'])){
    if(!empty($_POST['aficion'])){
    // Contando el numero de input seleccionados "checked" checkboxes.
    $checked_contador = count($_POST['aficion']);
    echo "Con las siguientes ".$checked_contador." aficiones:</br>";
    // Bucle para almacenar y visualizar valores activados checkbox.
    foreach($_POST['aficion'] as $seleccion) {
    echo $seleccion ."</br>";
    }
    
    }
    else{
    echo "<p><b>No seleccionó ninguna afición.</b></p>";
    }
    }

}
?>


</div>
</form>
</center>


<footer>
       
       <div class="container-footer-all">
        
            <div class="container-body">

                <div class="colum1">

                    <h1>Redes Sociales</h1>

                    <div class="row">
                        <img src="../recursos/img/facebook.png">
                        <label>Siguenos en Facebook</label>
                    </div>
                    <div class="row">
                        <img src="../recursos/img/twitter.png">
                        <label>Siguenos en Twitter</label>
                    </div>
                    <div class="row">
                        <img src="../recursos/img/instagram.png">
                        <label>Siguenos en Instagram</label>
                    </div>


                </div>

                <div class="colum2">

                    <h1>Informacion Contactos</h1>

                    <div class="row2">
                        <img src="../recursos/img/house.png">
                        <label>San José, Costa Rica</label>
                    </div>

                    <div class="row2">
                        <img src="../recursos/img/smartphone.png">
                        <label>2222 2222</label>
                    </div>

                    <div class="row2">
                        <img src="../recursos/img/contact.png">
                         <label>informacion@arisoft.com</label>
                    </div>

                </div>

            </div>
        
        </div>
        
        <div class="container-footer">
               <div class="footer">
                    <div class="copyright">
                        © 2022 Todos los Derechos Reservados | <a href="">Arisoft</a>
                    </div>

                    <div class="information">
                        <a href="">Informacion Compañia</a> | <a href="">Privacion y Politica</a> | <a href="">Terminos y Condiciones</a>
                    </div>
                </div>

            </div>
        
    </footer>




</body>
</html>
