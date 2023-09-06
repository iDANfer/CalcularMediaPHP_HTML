<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Resultado da Média</title>
</head>

<body>
    <h1>Resultado da Média</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $nota1 = floatval($_POST["nota1"]);
        $nota2 = floatval($_POST["nota2"]);

        $media = ($nota1 + $nota2) / 2;

        echo "O aluno $nome ficou com " . number_format($media, 1, ',', '.') . " de média.";
    } else {
        echo "Ocorreu um erro ao processar o formulário.";
    }
    ?>
</body>

</html>