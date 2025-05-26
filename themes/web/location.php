<?php
    echo $this->layout("_theme");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/png" href="themes/web/assets/img/local.png" />
  <title>Zenith - Centro de Saúde e Bem-Estar</title>
   <link rel="stylesheet" href="themes/web/assets/css/location.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
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

  <!-- LOCALIZAÇÃO -->
  <section class="localizacao">
    <h2>Como Chegar</h2>

    <div class="conteudo">
      <div class="info">
        <h3><i class="fas fa-map-marker-alt"></i> Endereço</h3>
        <p>Rua das Flores, 123 – Centro<br>Pelotas, RS – 96010-000</p>

        <h3><i class="fas fa-phone-alt"></i> Telefone</h3>
        <p>(53) 1234-5678<br>(53) 9876-5432</p>

        <h3><i class="fas fa-envelope"></i> E-mail</h3>
        <p>contato@vidasaude.com.br</p>

        <h3><i class="fas fa-bus"></i> Transporte Público</h3>
        <p>Linhas 01, 07, 23 e 45 passam pela rua da clínica.</p>
      </div>

      <div class="mapa">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.462650714925!2d-52.3369!3d-31.7654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9511a63f22fae6c5%3A0x400d3d9a2c60e1f7!2sPelotas%2C%20RS!5e0!3m2!1spt-BR!2sbr!4v1683903949910!5m2!1spt-BR!2sbr"
          width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </section>

</body>
</html>
