<?php 
$login = "";
if(isset($_POST['login']))
    $login = $_POST['login'];

$senha = "";
if(isset($_POST['senha']))
    $senha = $_POST['senha'];

$logado = false;
if($login == 'ifpr' && $senha == 'tads')
    $logado = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php if(! $logado): ?>
        <h2>Login</h2>

        <form method="POST" action="">
            <input type="text" name="login" 
                placeholder="Informe o login" />

            <br><br>

            <input type="password" name="senha" 
                placeholder="Informe a senha"/>

            <br><br>

            <button type="submit">Logar</button>
        </form>
    <?php else: ?>
        <div style="color: green;"> 
            Bem-vindo ao TADS!
        </div>

        <a href="login.php">Sair</a>
    <?php endif;?>
</body>
</html>