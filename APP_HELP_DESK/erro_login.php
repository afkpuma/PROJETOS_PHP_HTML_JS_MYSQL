<?php
  if (isset($_GET['login']) && $_GET['login'] == 'erro') {
    echo '<div class="text-danger">Usuário ou senha inválidos</div>';
  }
?>
