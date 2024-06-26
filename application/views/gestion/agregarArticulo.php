
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
    background-image:url("https://beeimg.com/images/x62747199451.jpg");
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
        <form action="<?= base_url(); ?>GestionAdmin/AgregaArticulo/" method="POST"   class ="view">
            <p>Agregue el articulo</p>
            <p>Ingrese Nombre</p>  <input type="text" autofocus name="nombre" class="form-control" required="" autocomplete="off">
            <p>Ingrese descripcion</p>  <input type="text" autofocus name="descripcion" class="form-control"  required="" autocomplete="off">
            <p>Ingrese Precio</p>  <input type="text" name="precio" class="form-control"  required="" autocomplete="off">
            <p>Ingrese Stock</p>  <input type="text" name="stock" class="form-control" required="" autocomplete="off">
            <br>
            <input class="submitt" name="Actualizar" value="Actualizar" type="submit"> 
        </form>
    </div>
</body>
</html>