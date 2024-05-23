<?php include("connections/db.php")?>
<?php
if(isset( $_POST['subir_informacion'])){
    $email = $_POST['email'];
    $dni = $_POST['dni'];
    $nombre_completo =$_POST['nombre_completo'];
    $matricula =$_POST['matricula'];
    $comentarios = $_POST['comentarios'];
    $query = "INSERT  INTO prestadores(email,dni,nombre_completo,matricula,comentarios) 
              VALUES ('$email','$dni','$nombre_completo','$matricula','$comentarios')"; 
    $result = mysqli_query($conn, $query);
   if(!$result){
    $error_message = "Fallo en el query. Error: " . mysqli_error($conn);
        die($error_message);
   }else{
    ?>
    <script>alert("Registro Guardado");</script>
    <script> window.history.go(-1);</script>
    <?php 
}
}

?>