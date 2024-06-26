
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
    background-image:url("https://i.pinimg.com/originals/df/7e/76/df7e7638baef3fe9ac00294829a6cb65.jpg");
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
        <form action="<?= base_url(); ?>GestionAdmin/AgregaCliente/" method="POST"   class ="view">
            <p>Agregue el Cliente</p>
            <p>Ingrese Nombre</p>  <input type="text" autofocus name="nombre" class="form-control" required="" autocomplete="off">
            <p>Ingrese descripcion</p>  <input type="mail" autofocus name="mail" class="form-control"  required="" autocomplete="off">
            <p>Ingrese Precio</p>  <input type="password" name="dni" class="form-control"  required="" autocomplete="off">
            <br>
            <input class="submitt" name="Actualizar" value="Actualizar" type="submit"> 
        </form>
    </div>
</body>
</html>