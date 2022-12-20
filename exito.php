<?php
include("header.php");
?>

    <div id="msj-gracias" class="container">
        <h2 class="text-center pb-5">¡Gracias por tu mensaje!</h2>
        <h4 class="alert alert-success text-center" role="alert">Tu inscripción como orador ha sido exitosa.</h4> 
        <h5 class="text-center pb-5">Pronto te contactaremos por email.</h5>
    </div>

    <div class="text-center align-items-center pt-3">
        <strong class="pe-3">Redireccionando...</strong>
        <div class="spinner-border text-warning" role="status">
        </div>
    </div>

    <!-- Redirección interna: -->
    <script>
        setTimeOut(function(){
            window.location.replace("index.php");
        },7000);
    </script>

    <!-- Redirección externa: -->
    <!--
    <script type="text/javascript">
        //Redireccionamiento tras 5 segundos
        setTimeout( function() { 
            window.location.href = "www.google.com.ar"; }, 7000 );
    </script>
    -->

</body>
</html>