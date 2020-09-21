<?php 
	
	require "./bibliotecas/lib1/lib1.php";
	require "./bibliotecas/lib2/lib2.php";

	use A\Cliente as C1; //---C1 se torna o apelido do Cliente de namespace \A\
	//sem apelidar um dos dois Clientes haverá conflito na aplicação.
	use B\Cliente;

	// ----- Cliente namespace \B\
	$c = new Cliente();
	print_r($c);
	echo '<br>' . $c->__get('nome');

	// ----- Cliente namespace \A\
	$c1 = new C1();
	print_r($c1);
	echo '<br>' . $c1->__get('nome');

?>


