<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Média</title>
</head>
<body>
    <h2>Verificação de Média</h2>
    <form method="post" action="">
        <label for="nome">Nome do Aluno:</label>
        <input type="text" name="nome" id="nome" required><br>
        <label for="nota1">Nota 1:</label>
        <input type="number" step="0.01" name="nota1" id="nota1" required><br>
        <label for="nota2">Nota 2:</label>
        <input type="number" step="0.01" name="nota2" id="nota2" required><br>
        <label for="nota3">Nota 3:</label>
        <input type="number" step="0.01" name="nota3" id="nota3" required><br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Captura os valores enviados pelo formulário
        $nome = $_POST['nome'];
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];

        // Calcula a média
        $media = ($nota1 + $nota2 + $nota3) / 3;

        // Verifica se o aluno foi aprovado ou reprovado
        $status = $media >= 7 ? "Aprovado" : "Reprovado";

        // Exibe o resultado
        echo "<h3>Resultado:</h3>";
        echo "Nome: $nome<br>";
        echo "Média: " . number_format($media, 2) . "<br>";
        echo "Situação: $status";
    }
    ?>
</body>
</html>
