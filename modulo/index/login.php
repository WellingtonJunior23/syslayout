<?php
include_once '../../autoload.php';


if($_POST['usuario'] == 'marcio' or $_POST['usuario'] == 'clay'){
	echo "<script>
			window.document.location.href = '../comercial';		
		  </script>";
//	header('location: /sgp/modulo/portaria');
}else{
	echo 'Seu usuario esta incorreto!';
}

?>