<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/cssSeleccion.css">
    <title>DeporStock</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
<link rel="manifest" href="../favicon/favicon/site.webmanifest">
<link rel="mask-icon" href="../faviconfavicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
</head>
<body>
    <h3 class="panel-title colorN">¡Bienvenido Admin!</h3>
    <h3  style="margin-top:-2rem;"class="panel-title colorN">Por favor, inicie sesión</h3>
        <div class="panel-body">

            <form action="<?= base_url(); ?>IniciarSesion/ValidaAdmin" method="POST">                              
               <div class="campos">
                <p>Ingrese su Usuario</p>  <input type="text" autofocus name="usuario" class="form-control" required="" autocomplete="off">
                 <p>Ingrese su Clave</p>  <input type="password" name="clave" class="form-control"   required="" autocomplete="off">
                </div>
                 <hr/>
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span><p>Entrar</p></button>
                <p><br/></p>
             </form>

         </div>
</body>
</html>