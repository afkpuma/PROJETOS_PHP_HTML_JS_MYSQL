<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    

    $usuario_possui_cartao_loja = true;
    $valor_compra = 255;

    $valor_frete = 50;
    $recebeu_desconto_frete = true;

    if ($usuario_possui_cartao_loja  AND $valor_compra >= 100) {
        $valor_frete = 0;
        $recebeu_desconto_frete = true;
    }

    ?>
    
    <h1>Detalhes do pedido</h1>
    <p>Possui cartão da loja?
        <?php
        if ($usuario_possui_cartao_loja) {
            echo 'SIM';
        } else {
            echo 'NÃO';
        }
        ?>
    </p>

    <p>Valor da compra: <?= $valor_compra ?></p>

    <p>Recebeu desconto no frete?
        <?php
        if ($recebeu_desconto_frete) {
            echo 'SIM';
        } else {
            echo 'NÃO';
        }
        ?>
    </p>

    <p>Valor do frete: <?= $valor_frete ?></p>
    ?> 
</body>

</html>