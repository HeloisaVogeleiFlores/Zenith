<?php
    echo $this->layout("_theme");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/png" href="themes/web/assets/img/add.png" />
 <title>Zenith - Centro de Saúde e Bem-Estar</title>
  <link rel="stylesheet" href="themes/web/assets/css/register.css">
</head>
<body>
 <!-- HEADER
  <header class="top-header">
    <div class="logo">Zenith</div>
    <nav class="nav">
      <a href="main.php" class="active">Home</a>
      <a href="services.php">Serviços</a>
      <a href="time.php">Horário</a>
      <a href="news.php">Notícias</a>
      <a href="doctors.php">Doutores e Especialistas</a>
      <a href="location.php">Localização</a>
      <a href="contact.php">Contatos</a>
      <a href="login.php">Entrar</a>
      <a href="register.php">Criar conta</a>
    </nav>
  </header> -->

  <main class="main-content">
    <div class="registro-container">
      <h2>Registro</h2>
      <p>Crie sua conta na clínica</p>
      <form class="registro-form">
        <label for="nome">Nome completo</label>
        <input type="text" id="nome" placeholder="Seu nome" required>
  
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Seu email" required>
  
        <label for="senha">Senha</label>
        <input type="password" id="senha" placeholder="Crie uma senha" required>
  
        <label for="confirmar">Confirmar senha</label>
        <input type="password" id="confirmar" placeholder="Confirme a senha" required>
  
        <button type="submit">Registrar</button>
      </form>
  
      <div class="extra-links">
        <p>Já tem uma conta? <a href="login.html">Entrar</a></p>
      </div>
    </div>
  </main>

</body>
</html>
