<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdotaPet | Login</title>
    <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="assets/css/login.css">
  
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">



  
   
</head>
<body class="hold-transition login-page">


<body>

 
        <!-- /.login-logo -->
    <div id="corpo-form" class="login-box-body">
      <h1>AdotaPet</h1>        
        <div id="fundo-corpo">
      <form method="post">
            
                <input type="email" placeholder="Email" name="email" required>
                <!--<span class="glyphicon glyphicon-envelope form-control-feedback"></span>-->
            
                <input type="password" placeholder="Senha" name="senha" required>
                <!--<span class="glyphicon glyphicon-lock form-control-feedback"></span>-->
                       
                <input type="submit" value="Entrar">
               
                <a href="cadastro1.php" class="text-center"><strong>Cadastre-se</strong> agora mesmo!</a>
        </form>
        </div>

        <label id="el"><strong>Campos obrigatórios faltando!</strong></label>

    </div>

    <script>
        function valida(){
            if (form1.senha.value == "" || form1.email.value == "")
            {
            document.getElementById('el').style.display = 'block';
            alert('Campos obrigatórios faltando');
            event.returnValue = false;
            return false;
            }
        }
    </script>
</body>

</html>