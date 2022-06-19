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
        <input type="CPF/CNPJ" placeholder="CNPJ" name="CNPJ" required>

        <input type="Endereço" placeholder="Endereço" name="Endereço" required>       
        <input type="Conta Bancária" placeholder="Conta Bancária" name="Conta Bancária">

        <input type="email" placeholder="Email" name="email" required>
                <!--<span class="glyphicon glyphicon-envelope form-control-feedback"></span>-->
            
        <input type="password" placeholder="Senha" name="senha" required>
        <input type="password" placeholder="Confirmar Senha" name="confirsenha" required>

        
                <!--<span class="glyphicon glyphicon-lock form-control-feedback"></span>-->
                       
        <input type="submit" value="Confirmar Cadastro"> 
        <a href="login.php" class="text-center">Cadastra-se? <strong>Como </strong>Adotante</a>     
        <a href="login.php" class="text-center">Voltar para a tela de login</a> 
                
                
      </form>
    </div>
    <?php
    if(isset($_POST['nome']))
        {
            $reg = new Registra();
        } 
        
    ?>
</body>