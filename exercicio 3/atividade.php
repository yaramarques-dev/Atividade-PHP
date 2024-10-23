<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo da Média</title>
</head>
<body>
    <h2>Cálculo da Média de Três Valores</h2>
    <form method="post" action="">
        <label for="valor1">Valor 1:</label>
        <input type="number" step="0.01" name="valor1" id="valor1" required><br>
        <label for="valor2">Valor 2:</label>
        <input type="number" step="0.01" name="valor2" id="valor2" required><br>
        <label for="valor3">Valor 3:</label>
        <input type="number" step="0.01" name="valor3" id="valor3" required><br>
        <input type="submit" value="Calcular Média">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Captura os valores enviados pelo formulário
        $valor1 = $_POST['valor1'];
        $valor2 = $_POST['valor2'];
        $valor3 = $_POST['valor3'];

        // Calcula a média
        $media = ($valor1 + $valor2 + $valor3) / 3;

        // Verifica se a média está acima ou abaixo do esperado
        $resultado = $media >= 7 ? "acima do esperado" : "abaixo do esperado";

        // Exibe o resultado
        echo "<h3>Resultado:</h3>";
        echo "A média dos valores é: " . number_format($media, 2) . "<br>";
        echo "Resultado: $resultado";
    }
    ?>
</body>
</html>
