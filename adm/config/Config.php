<?php
session_start();
ob_start();
define('URL', 'http://localhost/sistema/adm/');

define('CONTROLER', 'controle-login');
define('METODO', 'login');

//Credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'db');

function __autoload($Class) {
    $dirName = array(
        'controllers',
        'models',
        'models/helper',
        'views',
        'config'
    );
    foreach ($dirName as $diretorios) {
        if (file_exists("{$diretorios}/{$Class}.php")):
            require("{$diretorios}/{$Class}.php");        
        endif;
    }
    
}
