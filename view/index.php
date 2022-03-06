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
<body>
    <section>
    <div class="wave"></div>
</section>

    <div class="login-form">
        
    <form action="../controler/controleUser.php" method="POST">

        <h3 class="text-center" style="font-family: Candara;">Cadastro</h3>  <br>     
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" required="required" name="email">

        </div>
        
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Senha" required="required" name="senha">
        </div>
        <div class="form-group">
            <br>
            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
            
        </div>
        <div class="clearfix">
            
        </div>        
    </form>
    
</div>

</body>
</html>