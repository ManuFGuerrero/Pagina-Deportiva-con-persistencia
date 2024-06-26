<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/cssProductoParticular.css'); ?>">
    <style>
        .contenedor-img {
    background-image: url('<?= base_url(); ?>assets/images/<?= $artic->idArticulo ?>.png');
    background-repeat: no-repeat;
    background-size:cover;
}
    </style>
</head>
<body>
    <div class="contenedorGeneral">
        <div class="contenedor-img" >
           
        </div>

        <div class="contenedor-informacion">
            <div>
            <h2> Articulo</h2>
            <p><?= $artic->nombre; ?></p>
            </div>
            
            <div>
            <h2> Descripcion</h2>
            <p><?= $artic->descripcion; ?></p>
            </div>

            
            <div>
            <h2> Precio</h2>
            <p><?= $artic->precio; ?></p>
            </div>

            <div>
            <h2>Stock</h2>
<?php if ($artic->stock > 0) { ?>
    <p><?= $artic->stock ?></p>
<?php } else { ?>
    <p>El artículo estará disponible próximamente</p>
<?php } ?>
</div>


        </div>

    </div>
</body>
</html>