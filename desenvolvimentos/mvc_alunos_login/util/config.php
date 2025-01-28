<?php

//Mostrar erros do PHP
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Configurar essas variáveis de acordo com o seu ambiente
define("DB_HOST", "mysql-server");
define("DB_NAME", "mvc_alunos");
define("DB_USER", "root");
define("DB_PASSWORD", "root");

//Configuração da URL base da aplicação
define("BASE_URL", "/mvc_alunos_login");