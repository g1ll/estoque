<?php
//Inicialização da variável $config
unset($config);
$config = new stdClass();
$config->defaultClass = "AdminProd";
//Database
$config->dbuser = 'root';
$config->dbpassword = '';//modificar a senha caso seja necessário
$config->dbname = 'estoque';//nome do banco
$config->dbhost = 'localhost';//nome do servidor
$config->dbdrive = 'mysql';
