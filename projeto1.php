<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="projeto1css.css">
    <title>Document</title>
</head>

<body>

    <?php foreach ($pokemons as $poke) : ?>
        <div class="card">

            <img src="<?= $poke['imagem'] ?>" alt="">
            <h5><?= $poke['nome'] ?></h5>
            <p>altura: <?= $poke['altura'] ?> cm.</p>
            <p>peso: <?= $poke['peso'] ?> grs.</p>
            <p>habilidades: </p>

            <ul>
                <?php foreach ($poke['habilidade'] as $hab) : ?>
                    <li><?= $hab['ability']['name'] ?></li>
                <?php endforeach; ?>
            </ul>

        </div> <!-- /.card  -->
    <?php endforeach; ?>
</body>

</html>