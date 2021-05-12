<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="Atividade4_index.php" method="GET">
        <p> Sua porcetagem de anjo é: <?= $anjo ?> </p>
        <p> Informe o seu dia de nascimento</p> 
        <input type="text" name="diaNascimento"> <br />
        <p> Informe o seu mês de nascimento</p> 
        <input type="text" name="mesNascimento"> <br />
        <p> Informe o seu ano de nascimento</p> 
        <input type="text" name="anoNascimento"> <br />
        <input type="submit">
    </form>
    
</body>

</html>