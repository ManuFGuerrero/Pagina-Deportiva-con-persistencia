<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Lista de productos</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href="../assets/css/cssProductos.css">
</head>
<body>
     <section class="contenido-princ">
       <h2>LISTA DE PRODUCTOS</h2>
     <div class="cajaProductos">
     <table border="1" width="90%" align="center">
               <tr>
               <th>Imagen</th>   
               <th>Artículo</th>
               
                    <th class=" d-none">Descripción</th>
                    <th class="d-none">Precio</th>
                    <th class="d-none">Stock</th>
                    <th style="text-align:center;">Acciones</th>
               </tr>
            <?php //acá se pasó el array, artic estaba como parámetro
            foreach ($artic->result() as $articulo){?>
                <tr>

                <td>
                         <div>
                            
                         <img src="<?= base_url(); ?>assets/images/<?=$articulo->idArticulo?>.png" width="100px" height="100px">
                          </div>
                    </td>
                    <td>
                         <div>
                        <?= $articulo->nombre; ?>
                          </div>
                    </td>
                    <td class="d-none">
                        <div class="product-description" >
                            <?= $articulo->descripcion; ?>
                        </div>
                    </td>
                    <td class="d-none">
                        <div class="product-price" >
                            <?= $articulo->precio; ?>
                        </div>
                    </td>
                    <td class="d-none">
    <div class="d-none product-stock">
        <?php if ($articulo->stock > 0){ 
            echo $articulo->stock;
        } else { ?>
            <p>El artículo estará disponible próximamente</p>
        <?php } ?>
    </div>
</td>
                    <td class="acciones">
                    <a data-toggle="product-info" href="<?= base_url(); ?>PaginaPrincipal/MuestraProductoAdmin/<?= $articulo->idArticulo; ?>">Mostrar</a>

                        <a href="<?= base_url(); ?>GestionAdmin/EliminaArticulo/<?= $articulo->idArticulo; ?>">Eliminar</a>
                        <a href="<?= base_url(); ?>GestionAdmin/ModificaArticulo/<?= $articulo->idArticulo; ?>">Modificar</a>
                    </td>
                </tr>
            <?php 
            }
            ?>
        </table>
        
        <a href="<?= base_url(); ?>GestionAdmin/AgregaArticulo/<?= $articulo->idArticulo; ?>" class="actualizarProductos" > Actualizar productos </a>

     </div>
     </section>

     

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>