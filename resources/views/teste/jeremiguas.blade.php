<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeremiguas</title>
</head>
<body>

    <!-- USANDO O PHP TRADICIONAL
        Com PHP tradicional sempre temos que abrir e fechar blocos PHP, imprimindo dados na tela e percorrendo uma array, criando itens de lista em uma tag li no exemplo abaixo:
    -->
    <?php echo 'Olá jeremiguas!'; ?>

    <?php foreach(range(1, 5) as $key): ?>
        <li><?php echo $key; ?></li>
    <?php endforeach; ?>

    <br><br>

    <!-- REESCREVENDO O CÓDIGO ACIMA COM O BLADE-->
     @foreach(range(1, 5) as $key)
        <li>{{ $key }}</li>
     @endforeach

     @auth
        <span>vc esta autenticado</span>
     @endauth

</body>
</html>
