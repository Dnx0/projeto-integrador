<?php
require '../config.php';
require '../src/redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $usuario = new Usuario($mysql);
  $usuario->adicionar($_POST['field__name'], $_POST['field__sobrename'], $_POST['field__email'], $_POST['field_pass']);

  redireciona('/bravo4fun/index.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/reset.css">
  <link rel="stylesheet" href="./styles/Login/login.css">
  <link rel="stylesheet" href="./styles/global.css">
  <link rel="stylesheet" href="./styles/Login/login-responsive.css">
  <script src="https://kit.fontawesome.com/9ae2018d1c.js" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
  

  <title>Bravo 4 Fun</title>
</head>
<body>
  
<div class="logo">
  <img src="imgs/logo.png" alt="" srcset="">
</div>

  <div class="container">

    <div class="fields">

      <div class="fields__title">
        <p id="field__title">Cadastra-se no <span class="orkut-font-color">Bravo 4 Fun</span> É rápido e fácil</p>
      </div>

      <form action="cadastro.php" method="post">
      <div class="fields__textboxs">
      <input type="text" placeholder="Nome" name="" id="field__name">
      <input type="text" placeholder="Sobrenome" name="" id="field__sobrename">
        <input type="email" placeholder="E-mail" name="" id="field__email">
        <input type="password" placeholder="Nova Senha" name="" id="field_pass">
      </div>
      <div class="fields__remember">
    
        <p>Gênero</p>
        <label for="radio-feminino"><input type="radio" name="field_remember" value="feminino" id="radio-feminino">Feminino</label>
        <label for="radio-telefone"><input type="radio" name="field_remember" value="telefone" id="radio-telefone">Masculino</label>
        <label for="radio-whatsapp"><input type="radio" name="field_remember" id="radio-whatsapp">Personalizado</label>				
      
    </div>

      <div class="fields_buttons">
          <button id="btnlogin" class="bravo-button-bg">Cadastra-se</button>
      </div>
      </form>
</div>


    </div>
  </div>

</body>
</html>