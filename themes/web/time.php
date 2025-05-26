<?php
    echo $this->layout("_theme");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="icon" type="image/png" href="themes/web/assets/img/clock.png" />
  <title>Zenith - Centro de Saúde e Bem-Estar</title>
  <link rel="stylesheet" href="themes/web/assets/css/time.css">
</head>
<body>

 <!-- HEADER
 <header class="top-header">
  <div class="logo">Zenith</div>
  <nav class="nav">
    <a href="main.html" class="active">Home</a>
    <a href="services.html">Serviços</a>
    <a href="time.html">Horário</a>
    <a href="news.html">Notícias</a>
    <a href="doctors.html">Doutores e Especialistas</a>
    <a href="location.html">Localização</a>
    <a href="contact.html">Contatos</a>
    <a href="login.html">Entrar</a>
    <a href="register.html">Criar conta</a>
  </nav> -->
</header>

  <!-- HORÁRIOS -->
  <section class="horarios">
    <h2>Horários de Atendimento</h2>

    <table>
      <thead>
        <tr>
          <th>Especialidade</th>
          <th>Segunda a Sexta</th>
          <th>Sábado</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Clínico Geral</td>
          <td>08:00 - 18:00</td>
          <td>08:00 - 12:00</td>
        </tr>
        <tr>
          <td>Pediatria</td>
          <td>09:00 - 17:00</td>
          <td>09:00 - 13:00</td>
        </tr>
        <tr>
          <td>Cardiologia</td>
          <td>10:00 - 16:00</td>
          <td>Não atende</td>
        </tr>
        <tr>
          <td>Fisioterapia</td>
          <td>08:00 - 19:00</td>
          <td>08:00 - 14:00</td>
        </tr>
        <tr>
          <td>Vacinação</td>
          <td>08:00 - 17:00</td>
          <td>08:00 - 12:00</td>
        </tr>
      </tbody>
    </table>
  </section>

</body>
</html>
