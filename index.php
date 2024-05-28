<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <div class="header">
    <img src="img/logo.png" alt="logo" class="img">
    <div class="divisor"></div>
    <h3 class="title1">Ministerio de <br><b>Salud</b></h3>
    <h3 class="title1"> Obra Social <br> Provicia</h3>
  </div>
  <div class="container-titulo">
    <h2 id="titulo">Prueba de Formulario-Cobro de plus</h2>
  </div>
  <form method="post">

    <div class="container">
      <label id="email"> Email del afiliado</label>
      <input type="email" id="email" name="email" placeholder="Ingrese su Email"  value=""  required>
    </div>


    <div class="container">
      <label id="Dni"> Dni del afiliado</label>
      <input type="number" id="Dni" name="dni" placeholder="Ingrese su DNI" value=""  required>
    </div>

    <div class="container">
      <label id="nombre_completo"> Apellido y Nombre del prestador</label>
      <input type="text" id="nombre_completo" name="nombre_completo"
        placeholder="Ingrese  el Apellido y Nombre del prestador" value=""  required pattern="[a-zA-Z, ]+">
    </div>

    <div class="container">
      <label id="Matricula">Matricula de Prestador</label>
      <input type="number" id="Matricula" name="matricula" placeholder="Ingrese la Matricula de Prestador"required value="">
    </div>

    <div class="container">
      <label id="Comentarios"> Comentarios o sugerencias</label>
      <input type="text" id="Comentarios" name="comentarios" placeholder="Ingrese el Comentario" value="" >
    </div>
    <div class="contenBtn">
      <button class="button" type="submit" name="subir_informacion" id="subir_informacion">Enviar</button>
      <button class="btnBorrar" type="reset" name="btnBorrar" >Borrar formulario</button>
    </div>
  </form>


</body>
<?php include("accion.php")?>
</html>