<?php 
use system\model\TbArquivo;
use system\core\FormController;

include_once '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'/autoload.php';
include_once 'config.php';

include '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'componente/topo.php';
include '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'componente/menuprincipal.php';

include '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'modulo/home/ModuloHome.php';

/* session_destroy(); */

echo '<pre>';
print_r($_SESSION);
echo '</pre>';


$tbUsuario = new TbArquivo();

$grid = new \system\core\Grid(array('Numeracao','Nome Fantasia','Emprestimo'),$tbUsuario->findAll());
$grid->colunaoculta = 1;
$grid->show(isset($_SESSION['action']) ? false : true);


$form = new FormController();
$form->setForm()
	 ->getForm();

include '../../layout/rodape.php';
?>