<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';

//montagem do texto
$titulo = $_POST['titulo'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];

$texto = $titulo . '#' . $categoria . '#' . $descricao. PHP_EOL;

//abrindo arquivo
$arquivo = fopen('arquivo.hd', 'a');

fwrite($arquivo, $texto);
fclose($arquivo);

echo str_replace('#', '-', $texto);
?>


