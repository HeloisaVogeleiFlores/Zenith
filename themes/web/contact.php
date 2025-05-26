<?php
    echo $this->layout("_theme");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/png" href="themes/web/assets/img/contact-mail.png" />
  <title>Zenith - Centro de Saúde e Bem-Estar</title>
  <link rel="stylesheet" href="themes/web/assets/css/contact.css">
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

  <!-- CONTATO DA CLÍNICA -->
  <section class="clinica-contato">
    <h2>Contato da Clínica</h2>
    <p><strong>Telefone:</strong> (51) 1234-5678</p>
    <p><strong>E-mail:</strong> contato@clinicavidaesaude.com</p>
    <p><strong>Endereço:</strong> Rua das Flores, 123 – Centro, Pelotas, RS – 96010-000</p>
    <p><strong>Atendimento:</strong> Segunda a Sexta, das 8h às 22h</p>
  </section>

  <!-- PROFISSIONAIS -->
  <section class="profissionais">
    <h2>Contatos dos Profissionais</h2>

    <div class="cards">

      <div class="card">
        <img src="themes/web/assets/img/doctor.jpg" alt="Dr. João Silva">
        <h3>Dr. João Silva</h3>
        <p><strong>Especialidade:</strong> Cardiologia</p>
        <p><strong>E-mail:</strong> joao.silva@clinicavidaesaude.com</p>
        <p><strong>Telefone:</strong> (51) 99876-5432</p>
      </div>

      <div class="card">
        <img src="themes/web/assets/img/medic.jpg" alt="Dra. Fernanda Costa">
        <h3>Dra. Fernanda Costa</h3>
        <p><strong>Especialidade:</strong> Ginecologia</p>
        <p><strong>E-mail:</strong> fernanda.costa@clinicavidaesaude.com</p>
        <p><strong>Telefone:</strong> (51) 99877-1122</p>
      </div>

      <div class="card">
        <img src="themes/web/assets/img/psico.jpg" alt="Dra. Marina Lopes">
        <h3>Dra. Marina Lopes</h3>
        <p><strong>Especialidade:</strong> Psicologia</p>
        <p><strong>E-mail:</strong> marina.lopes@clinicavidaesaude.com</p>
        <p><strong>Telefone:</strong> (51) 99788-3344</p>
      </div>

    </div>
  </section>

</body>
</html>
