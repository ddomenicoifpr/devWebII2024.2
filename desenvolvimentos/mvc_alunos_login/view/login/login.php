<?php
#Página com o formulário de login

include_once(__DIR__ . "/../../controller/UsuarioController.php");

$msgErro = "";

$login = "";
$senha = "";

if(isset($_POST['login'])) {

    //Captura os dados oriundos do formulário
    $login = trim($_POST['login']);
    $senha = trim($_POST['senha']);

    //Chama o UsuarioController para realizar o login
    $usuCont = new UsuarioController();
    $erros = $usuCont->logar($login, $senha);

    //Verifica se houve erros
    if(! $erros) {
        //Se não houve erros, redireciona para a página inicial do sistema
        header("location: " . BASE_URL);
        exit;
    }

    //Se tiver erros, mantém na mesma página e exibe-os
    $msgErro = implode("<br>", $erros);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC Alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row mt-5">
            <h3 class="col-12">Informe suas credenciais para acessar o sistema</h3>
        </div>

        <div class="row">
            <div class="col-6 alert alert-info">
                <form name="frmLogin" method="POST" >
                    
                    <div>
                        <label class="form-label" for="txtLogin">Login:</label>
                        <input class="form-control" type="text" id="txtLogin" name="login"
                            maxlength="15" value="<?= $login ?>" />
                    </div>

                    <div>
                        <label class="form-label" for="txtSenha">Senha:</label>
                        <input class="form-control" type="password" id="txtSenha" name="senha"
                            maxlength="15" value="<?= $senha ?>" />
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-success">Logar</button>
                    </div>
                </form>
            </div>

            <div class="col-6">
                <?php if ($msgErro): ?>
                    <div id="msgErro" class="alert alert-danger"><?= $msgErro ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>