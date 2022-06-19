<?php require_once "header.login.inc.php";
 
?>
<body>
 
        <!-- /.login-logo -->
    <div id="corpo-form-Cad" class="login-box-body">
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
        <a href="cadastro2.php" class="text-center">Deseja ser um doador? <strong>Clique </strong>aqui!</a>        
      </form>
    </div>
    <?php
    if(isset($_POST['nome']))
        {
            $reg = new Registra();
        } 
        
    ?>
</body>