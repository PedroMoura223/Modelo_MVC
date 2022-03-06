<?php 

session_start();
if ((!isset($_SESSION['usuario']) == true) && (!isset($_SESSION['conta']) == true)) {
  unset($_SESSION['usuario']);
  unset($_SESSION['conta']);
  header('location:../index.php');
}

include '../model/read.php';

 ?>

<!DOCTYPE html>
<html>
<head>
     <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="../stylealterar.css">
    <link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
    <script type="text/javascript" src="../style/js/jquery.min.js"></script>
    <script type="text/javascript" src="../style/js/bootstrap.min.js"></script>
</head>
<body background="">
    <section>
    <div class="wave"></div>
</section>

    <div class="login-form">
        
    <form action="../controler/controleBusca.php" method="POST">

        <h3 class="text-center" style="font-family: Candara;">Busca</h3>  <br>     
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" required="required" name="email">

        </div>
        
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Senha" required="required" name="senha">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="ID para Busca" required="required" name="id">
        </div>
        <div class="form-group">
            <br>
            <button type="submit" class="btn btn-warning btn-block ">Buscar</button>
            
        </div>
        <div class="clearfix">
            
        </div>        
    </form>
    
</div>

</body>
</html>