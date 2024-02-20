<?php
// print_r($_GET);
// $_GET['email'];
// $_GET['senha'];

session_start();

//VARIAVEL QUE VERIFICA SE A AUT FOI REALIZADA
$usuario_autenticado = false;

//USER DO SISTEMA
$usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
);

// echo '<pre>';
// print_r($usuarios_app);
// echo '</pre>';

//lOOP PARA VERIFICAR USUARIOS
foreach ($usuarios_app as $user) {


    if ($user['email'] == $_POST['email'] and $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    }
}

if ($usuario_autenticado) {
    echo 'user autenticado';
    $_SESSION['autenticado'] = 'SIM';
} else {
    $_SESSION['autenticado'] = 'NAO';
    header('Location: index.php?login=erro');
}
?>
