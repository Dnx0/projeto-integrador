<?php

require 'config.php';


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/reset.css">
  <link rel="stylesheet" href="../styles/Login/login.css">
  <link rel="stylesheet" href="../styles/global.css">
  <link rel="stylesheet" href="../styles/Login/login-responsive.css">
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
        <p id="field__title">Acesse o <span class="bravo-font-color">Bravo 4 Fun</span> com a sua conta!</p>
      </div>

      <div class="fields__textboxs">
        <input type="email" placeholder="E-mail ou número de celular" name="" id="field__email">
        <input type="password" placeholder="Senha" name="" id="field_pass">
      </div>
      
      <div class="fields__remember">
          <input type="checkbox" name="" id="field_remember">
          <label for="field_remember">Lembrar sempre do meu acesso</label>
      </div>

      <div class="fields_buttons">
          <button id="btnlogin" class="bravo-button-bg">Entrar</button>
      </div>

      <div class="fields__recover">
        <a href="#">Esqueci senha ou e-mail</a>
      </div>

      <div class="fields__create">
        <a href="#">Não tem conta? <span class="pink-font">Criar agora</span></a>
      </div>


    </div>
  </div>

</body>
</html>