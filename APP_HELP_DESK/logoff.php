<?php
    session_start();
    // echo '<pre>';
    // print_r($_SESSION);
    // echo '<pre/>';
    // //remover ind do array de sessao
    // //unset()
    // unset($_SESSION['x']); // remove apenas o indice se existir

    // echo '<pre>';
    // print_r($_SESSION);
    // echo '<pre/>';

    // //destruir a variavel de sessao
    // //session_destroy()

    // session_destroy(); // sera destruida

    // echo '<pre>';
    // print_r($_SESSION);
    // echo '<pre/>';

    session_destroy();
    header('Location: index.php');




?>