
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Cherry+Swash&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+Telugu:wght@500&display=swap');

  body {
    background-image:url("https://beeimg.com/images/i51029449193.jpg");
  }
        .contenedor {
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            margin-top:5rem;
            height:100vh;
            font-size:1.2rem;
        }
        form {
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            gap:1rem;
            font-family: 'Noto Sans Telugu', sans-serif;
            background-color: rgba(0, 0, 0, 0.5);
            height:35rem;
            width:25rem;
            color: #fff;
        }

        input {
            padding: 0.5rem;
        }  
        .submitt {
            transition:1s;
            font-size:1.3rem;
            box-shadow: 1px 1px 5px #fff;
            border:none;
        }
        .submitt:hover {
            background-color:orange;
            border:none;
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <form action="<?= base_url(); ?>GestionAdmin/ModificaArticulo/<?= $artic->idArticulo ?>" method="POST"   class ="view">
            <p>Modificacion del articulo <?php  ?></p>
            <p>Ingrese Nombre</p>  <input type="text" autofocus name="nombre" class="form-control" value="<?= $artic->nombre?>" required="" autocomplete="off">
            <p>Ingrese descripcion</p>  <input type="text" autofocus name="descripcion" class="form-control" value="<?= $artic->descripcion?>" required="" autocomplete="off">
            <p>Ingrese Precio</p>  <input type="text" name="precio" class="form-control" value="<?= $artic->precio?>" required="" autocomplete="off">
            <p>Ingrese Stock</p>  <input type="text" name="stock" class="form-control" value="<?= $artic->stock?>" required="" autocomplete="off">
            <br>
            <input class="submitt" name="Actualizar" value="Actualizar" type="submit"> 
        </form>
    </div>
</body>
</html>