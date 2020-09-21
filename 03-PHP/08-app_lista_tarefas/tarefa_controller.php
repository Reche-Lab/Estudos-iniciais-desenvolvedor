<!-- tarefa.controller.php -->
<?php

	require "../../08-app_lista_tarefas/tarefa.model.php";
	require "../../08-app_lista_tarefas/tarefa.service.php";
	require "../../08-app_lista_tarefas/conexao.php";

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
	$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : $pagina;

	if($acao == 'inserir'){
		$tarefa = new Tarefa();
		$tarefa->__set('tarefa', $_POST['tarefa']);

		$conexao = new Conexao();

		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefaService->inserir();

		header('Location: nova_tarefa.php?inclusao=1');
	
	} else if($acao == 'recuperar'){
		
		$tarefa = new Tarefa();
		$conexao = new Conexao();

		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefas = $tarefaService->recuperar();

	} else if($acao == 'atualizar'){
		$tarefa = new Tarefa();
		$tarefa->__set('id', $_POST['id']);
		$tarefa->__set('tarefa', $_POST['tarefa']);
		//caso eu utilize o return no método set do objeto Tarefa posso usar o set acima da seguinte forma
		//$tarefa->__set('id', $_POST['id'])->__set('tarefa', $_POST['tarefa']);


		$conexao = new Conexao();

		$tarefaService = new TarefaService($conexao, $tarefa);
		if ($tarefaService->atualizar()) {
			header('Location: '.$pagina.'.php');
		}
	
	} else if($acao == 'remover'){
		$tarefa = new Tarefa();
		$tarefa->__set('id', $_GET['id']);

		$conexao = new Conexao();

		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefaService->remover();
		
		header('Location: '.$pagina.'.php');
	
	} else if ($acao == 'marcarRealizada'){
		$tarefa = new Tarefa();
		$tarefa->__set('id', $_GET['id']);
		$tarefa->__set('id_status', 2);

		$conexao = new Conexao();

		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefaService->marcarRealizada();

		header('Location: '.$pagina.'.php');

	} else if ($acao == 'recuperarPendentes') {
		$tarefa = new Tarefa();
		$conexao = new Conexao();

		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefas = $tarefaService->recuperarPendentes();
	}

?>
