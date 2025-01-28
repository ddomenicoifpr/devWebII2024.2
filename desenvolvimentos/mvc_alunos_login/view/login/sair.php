<?php

include_once(__DIR__ . "/../../controller/UsuarioController.php");

//Deslogar o usuário do sistema
$usuCont = new UsuarioController();
$usuCont->deslogar();
header("location: " . BASE_URL . "/view/login/login.php");