<?php	

	include_once("conexao.php");

    session_start();

    $usuario1 = $_SESSION['$usuario1'];

	$html = '<body>';	
	$html .= '';
	$html .= '<tr>';
	$html .= '<th>ID</th>';
	$html .= '<th>COD Transação</th>';
	$html .= '<th>Tipo de Pagamento</th>';
	$html .= '<th>Status da Transação</th>';
	$html .= '<th>E-mail</th>';
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	$result_boleto= "SELECT * FROM reservas ";
	$resultado_trasacoes = mysqli_query($conexao, $result_transacoes);
	while($row_transacoes = mysqli_fetch_assoc($resultado_trasacoes)){
		$html .= '<h2>Nome:</h2>'.'<p>'.$row_transacoes['id'] ."</p>";
		$html .= '<h2>Usuário:</h2>'.'<p>'.$row_transacoes['transacao_cod'] . "</p>";
		$html .= '<h2>Computador:</h2>'.'<p>'. $row_transacoes['tipo_pagamento'] . "</p>";
		$html .= '<p>'.$row_transacoes['status_transacao'] . "</p>";
		$html .= '<p>'.$row_transacoes['email'] . "</p>";		
	}
	
	$html .= '</body>';


	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	
	// Carrega seu HTML
	$dompdf->load_html('
			<h1 style="text-align: center;">Celke - Relatório de Transações</h1>
			'. $html .'
		');

	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"relatorio_celke.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>