<?php
    echo $this->layout("_theme");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/png" href="themes/web/assets/img/medical-report.png" />
  <title>Zenith - Centro de Saúde e Bem-Estar</title>
  <link rel="stylesheet" href="themes/web/assets/css/doctors.css">
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

  <!-- SEÇÃO DE ESPECIALISTAS -->
  <section class="especialistas">
    <h2>Nossos Especialistas</h2>
    <div class="medicos-lista">
      <div class="medico">
        <img src="themes/web/assets/img/medico.jpg" alt="Dr. João da Silva">
        <h3>Dr. João da Silva</h3>
        <p><strong>Especialidade:</strong> Cardiologia</p>
        <p><strong>Qualificações:</strong> USP, Mestrado na UFRGS</p>
        <p><strong>Área de Atuação:</strong> Doenças cardíacas, hipertensão</p>
      </div>

      <div class="medico">
        <img src="themes/web/assets/img/medico1.jpg" alt="Dra. Ana Oliveira">
        <h3>Dra. Ana Oliveira</h3>
        <p><strong>Especialidade:</strong> Pediatria</p>
        <p><strong>Qualificações:</strong> Residência no Einstein, Pós em Neonatologia</p>
        <p><strong>Área de Atuação:</strong> Saúde infantil, vacinação</p>
      </div>

      <div class="medico">
        <img src="themes/web/assets/img/medico2.jpg" alt="Dr. Marcos Souza">
        <h3>Dr. Marcos Souza</h3>
        <p><strong>Especialidade:</strong> Ortopedia</p>
        <p><strong>Qualificações:</strong> UNICAMP, Especialização em Cirurgia</p>
        <p><strong>Área de Atuação:</strong> Fraturas, lesões articulares</p>
      </div>
    </div>
  </section>

</body>
</html>
