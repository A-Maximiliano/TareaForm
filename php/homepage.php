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
        <li class="active"><a href="#">Inicio</a></li>

        <li><a href="#">Contacto</a></li>
      </ul>

    </div>
  </div>
</nav>


<div class="jumbotron">
  <div class="container text-center">
  <img src="../recursos/img/OIP.jpg">
    <h1>Mi Formulario</h1>      
    <p>Tarea de Programacion Avanzada</p>
  </div>
</div>




<div class="container">
  <h2>Ingrese los datos solicitados</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="nombre">nombre:</label>
      <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" name="nombre">
      <br> </br>
      <label for="nombre">apellido:</label>
      <input type="text" class="form-control" id="nombre" placeholder="Ingrese apellido" name="nombre">
      <br> </br>
      <label for="nombre">edad:</label>
      <!-- <input type="text" id="cmbedad" placeholder="Seleccione edad" name="combobox"/> -->
        <select name=" optionlist " onChange="combo(this, 'cmbedad')">
        <option> 18-25</option>
        <option>26-33</option>
        <option>34-41</option>
        <option> 42-50 </option>
        <option> mas de 51 </option>
        </select>

      <br> </br>
      <label for="nombre">peso:</label>
      <input type="number" class="form-control" id="nombre" placeholder="Ingrese su peso" name="nombre">

      <br> </br>
      <label for="nombre">Sexo:</label>
      <div>
      <div class="radio">
        <label><input type="radio" name="optradio" >Hombre </label>
        
        
        <label><input type="radio" name="optradio">Mujer</label>
 
    </div>
   
    <label for="nombre">Estado civil:</label>
    <div class="radio">
        <label><input type="radio" name="optradio" >Casado</label>
        
        
        <label><input type="radio" name="optradio">Soltero</label>
        
      
        <label><input type="radio" name="optradio" >Otro</label>
    </div>

    <label for="nombre">Estudios:</label>
    <div class="radio">
        <label><input type="radio" name="optradio" >No tiene estudios</label>
        
        
        <label><input type="radio" name="optradio">Estudios primarios</label>
        
      
        <label><input type="radio" name="optradio" >Estudios secundarios</label>
    </div>

    </div>
    
      <label for="nombre">Aficiones:</label>
    <div class="checkbox">
    <label class="checkbox-inline"><input type="checkbox" value="">Cine</label>
    <label class="checkbox-inline"><input type="checkbox" value="">Literatura</label>
    <label class="checkbox-inline"><input type="checkbox" value="">Teatro</label>
    </div>
    <div class="checkbox">
    <label class="checkbox-inline"><input type="checkbox" value="">Deporte</label>
    <label class="checkbox-inline"><input type="checkbox" value="">Música</label>
    <label class="checkbox-inline"><input type="checkbox" value="">Televisión</label>
    </div>
    <br> </br>
    <button type="submit" class="btn btn-default">Enviar</button>
    <button type="submit" class="btn btn-default">Cancelar</button>
  </form>
</div>
</div>
</div>


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
