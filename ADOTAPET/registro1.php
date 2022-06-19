<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdotaPet | Cadastro</title>
    <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="assets/css/login.css">
  <link rel="sylesheet" href="assets/css/templatemo-572-designer.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<body>
 
        <!-- /.login-logo -->
    <div id="corpo-cad" class="login-box-body">
      <h1>Cadastre-se</h1>

      <form method="post">
      
        <input type="text" placeholder="Nome" name="nome" required>
        <input type="texte" placeholder="Sobrenome" name="sobrenome" required>

        <input type="Telefone" placeholder="Telefone" name="Telefone" required>
        <input type="CPF" placeholder="CPF" name="CPF" required>

        <input type="Data de Nascimento" placeholder="Data de Nascimento" name="Data de Nascimento" required>
        <input type="Endereço" placeholder="Endereço" name="Endereço" required>
            
        <input type="email" placeholder="Email" name="email" required>
                <!--<span class="glyphicon glyphicon-envelope form-control-feedback"></span>-->
            
        <input type="password" placeholder="Senha" name="senha" required>
        <input type="password" placeholder="Confirmar Senha" name="confirmarsenha" required>
                <!--<span class="glyphicon glyphicon-lock form-control-feedback"></span>-->
                       
        <input type="submit" value="Confirmar Cadastro">   
        <a href="login.php" class="text-center">Já possui uma conta? <strong>Entre</strong> agora mesmo!</a>         
        <a href="registro2.php" class="text-center">Deseja ser um doador? <strong>Clique </strong>aqui!</a>        
      </form>
    </div>
    <?php
    if(isset($_POST['nome']))
        {
            $reg = new Registra();
        } 
        
    ?>
</body>
</html>