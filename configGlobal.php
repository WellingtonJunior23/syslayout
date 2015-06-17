<?php
session_start();

date_default_timezone_set('America/Sao_Paulo');


$configGlobal = array();

$configGlobal['projectName'] = 'Menu';

$configGlobal['systemName'] = '..:: Layout Padrão ::..';

$configGlobal['comercial'] = 'Comercial';

$configGlobal['administracao'] = 'Administração';

$configGlobal['tituloRodape'] = '..:: TECNOLOGIA DA INFORMAÇÃO ::..';

/* Usado para indicar a pasta raiz do projeto*/
$configGlobal['path'] = 'layout';

include_once 'vendor/autoload.php';

?>