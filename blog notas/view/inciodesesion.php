<html>
<head>
   <meta charset="utf-8">
   <title>Mostrar Ventane Modal de forma Automático</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/sesion.css">

</head>
<body>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mostrarmodal">
  session
</button>   
<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <!-- <div class="modal-content"> -->
           <!-- <div class="modal-header">
              <h3>Cabecera de la ventana</h3>
           </div> -->
           <div class="modal-body">
           <div role="alert" id="fondologin">
              <img id="imagendefondo" src="img/fondocel.jpg" alt="fondo">
              <img id="logo"src="img/logo.png" alt="logo">
              <form>
          <div class="form-group">
            <label id="label" for="recipient-name" class="col-form-label">Correo:</label>
            <input type="email" class="inputcontra">
          </div>
          <div class="form-group">
            <label id="label"for="message-text" class="col-form-label">Contraseña:</label>
            <input type="password" class="inputcontra"></input>
            
            <div class="form-group"> 
            <button id="botonaceptar" type="button"  data-dismiss="modal">Aceptar</button>
            </div> 

            <a id="enlace" href="recuperar.php" class="">olvidaste tu contraseña?</a>
            <a id="enlacenotengo" href="recuperar.php" class="">No tengo cuenta</a>

         </div>
        </form>
            </div>

       <!-- </div> -->
           <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a>
           </div>
      </div>
   </div>
</div>
</body>
</html>