<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="<?= base_url('assets/css/cssListaClientes.css'); ?>">
</head>
<body>
     <section class="contenido-princ">
       <h2>Lista de Clientes</h2>

     <div>
     <table border="1" width="90%" align="center">
               <tr>
                    <th>Nombre</th>
                    <th>E-Mail</th>
                    <th>DNI</th>
               </tr>
            <?php //acá se pasó el array, artic estaba como parámetro
            foreach ($cliente->result() as $cli){?>
               
                   <tr>
                        <td>
                           <?= $cli->nombre; ?> <!--nombre, descripcion y precio -->
                       </td>                         <!-- son los campos de la bas de datos-->
                       <td>
                            <?= $cli->mail; ?>
                       </td>
                       <td>
                            <?= $cli->dni; ?>
                       </td>

                       <td><a href="<?= base_url(); ?>GestionAdmin/EliminaCliente/<?= $cli->idCliente; ?>">Eliminar</a></td>
                       <td><a href="<?= base_url(); ?>GestionAdmin/ModificaCliente/<?= $cli->idCliente; ?>">Modificar</a></td>
                    </tr> 
               <?php 
               }
                ?>
        </table>
        
     </div>
     <a style="margin:3rem;" href="<?= base_url(); ?>GestionAdmin/AgregaCliente/" class="actualizarProductos" > Actualizar Clientes</a>     
</body>
</html>
