<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/cssHome.css">
    <title>DeporStock</title>
    <link rel="icon" href="<?= base_url('favicon/favicon.ico') ?>" type="image/x-icon">



</head>
<body>
<div class="cartelBienvenida">
    <h1> Bienvenido, ¿cómo desea ingresar?</h1>
</div>

    <div class="divE">
            
        <form action="<?= base_url(); ?>IniciarSesion/CargarVistaVisitante" method="POST"   class ="view">
            <input name="Visitante" value="Visitante" type="submit"> 
            
            </form>
        
            <form action="<?= base_url(); ?>IniciarSesion/CargarVistaCliente" method="POST"   class ="view">

           
            <input name="Cliente" value="Cliente" type="submit"> 
            

            </form>
           
            <form action="<?= base_url(); ?>IniciarSesion/CargarVistaAdmin" method="POST"   class ="view">

            
            <input  name="Administrador" value="Administrador" type="submit"> 
            
            </form>

    </div>
</body>
</html>