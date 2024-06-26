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
    background-image:url("https://i.postimg.cc/B4nBhq9v/basketball-ring-bw-net-122454-1920x1080.jpg");
    background-position:cover;
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
        <form action="<?= base_url(); ?>GestionAdmin/ModificaCliente/<?= $artic->idCliente ?>" method="POST"   class ="view">
            <p>Modificacion del Cliente <?php  ?></p>
            <p>Ingrese Nombre</p>  <input type="text" autofocus name="nombre" class="form-control" value="<?= $artic->nombre?>" required="" autocomplete="off">
            <p>Ingrese mail</p>  <input type="email" autofocus name="mail" class="form-control" value="<?= $artic->mail?>" required="" autocomplete="off">
            <p>Ingrese dni</p>  <input type="text" name="dni" class="form-control" value="<?= $artic->dni?>" required="" autocomplete="off">
            <br>
            <input class="submitt"  name="Actualizar" value="Actualizar" type="submit"> 
        </form>
    </div>
</body>
</html>