<?php
$erro = "";
$resultado = "";

if(isset($_POST['valor1'])) {
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $operacao = $_POST['operacao'];

    if($valor1 && $valor2 && $operacao) {
        $res = 0;
        if($operacao == '+')
            $res = $valor1 + $valor2;
        elseif($operacao == '-')
            $res = $valor1 - $valor2;
        elseif($operacao == '*')
            $res = $valor1 * $valor2;
        elseif($operacao == '/')
            $res = $valor1 / $valor2;

        $resultado = $valor1 . " " . $operacao . " " . $valor2 . " = " . $res;
    } else
        $erro = "Valores inválidos!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

    <h2>Calculadora</h2>

    <form method="POST" >
        <input type="number" name="valor1"
            placeholder="Informe o valor 1" />

        <br><br>

        <input type="number" name="valor2"
            placeholder="Informe o valor 2" />

        <br><br>

        <select name="operacao">
            <option value="">----Selecione a operação----</option>
            <option value="+">Somar</option>
            <option value="-">Subtrair</option>
            <option value="*">Multiplicar</option>
            <option value="/">Dividir</option>
        </select>

        <br><br>

        <input type="submit" value="Calcular" />
    </form>

    <div style="color: red;">
        <?php echo $erro; ?>
    </div>

    <div style="color: blue;">
        <?php echo $resultado; ?>
    </div>

</body>
</html>
