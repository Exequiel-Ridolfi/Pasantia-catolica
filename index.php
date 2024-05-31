<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body style ="background-color: white">

  <header class ="container-fluid" style="background-image: url('img/nav.jpg'); height: 200px;  color: white; display: flex;
  align-items: center; justify-content: flex-start; margin-bottom: 50px; " >
   <h2 style= "color: white;">Formulario de prueba</h2>
  </header>

 
  <form method="post" class ="container-fluid"  style ="background-color:#e5dcdd; width: 500px; height: 700px; border-radius: 8px; padding: 14px; margin-bottom: 10px;">
    <h2 style="margin-top: 20px;">Complete este formulario</h2>

      <label id="email" class="form-label"> Email del afiliado</label>
      <input type="email"  class="form-control" style="margin-bottom: 30px; padding-left: 20px;" id="email" name="email" placeholder="Ingrese su Email"  value=""  required>


      <label id="Dni" class="form-label" > Dni del afiliado</label>
      <input type="number" class="form-control" style="margin-bottom: 30px; padding-left: 20px;" id="Dni" name="dni" placeholder="Ingrese su DNI" value=""  required>

      <label id="nombre_completo" class="form-label" > Apellido y Nombre del prestador</label>
      <input type="text"  class="form-control" style="margin-bottom: 30px; padding-left: 20px;" id="nombre_completo" name="nombre_completo"
        placeholder="Ingrese  el Apellido y Nombre del prestador" value=""  required pattern="[a-zA-Z, ,. , ,]+">

      <label id="Matricula" class="form-label" >Matricula de Prestador</label>
      <input type="number" class="form-control"  style="margin-bottom: 30px; padding-left: 20px;" id="Matricula" name="matricula" placeholder="Ingrese la Matricula de Prestador"required value="">

      <label id="Comentarios" class="form-label" > Comentarios o sugerencias</label>
      <input type="text" class="form-control" style="margin-bottom: 70px; padding-left: 20px;" id="Comentarios" name="comentarios" placeholder="Ingrese el Comentario" value="" >
      <button class="button" style ="margin-right:270px; background-color:#f98109; padding: 8px; border: none;border-radius: 5px; color: white; font-size: 16px; cursor: pointer;  transition: background-color 0.3s;
    margin-top: 5px;" type="submit" name="subir_informacion" id="subir_informacion">Enviar</button>
      
      <button class="btnBorrar" style ="background-color: transparent; color: #d25401; outline: none; border: none; cursor: pointer;" type="reset" name="btnBorrar" >Borrar formulario</button>

  </form>


 <div  class ="container-fluid" style = "background-color: #1d262d; padding:10px "  >
  <footer >
   <img src="img/logo_sj_gobierno_dark.png" alt="logo_dark" style = "width: 120px;" >
  </footer>
 </div>

</body>
<?php include("accion.php")?>
</html>
