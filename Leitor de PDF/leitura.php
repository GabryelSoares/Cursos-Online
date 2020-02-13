<?php
// Capturar as informções passadas via url

$ReqGET = filter_input(INPUT_GET, "file" ,FILTER_DEFAULT );

// Função responsável por enviar cabeçalhos ao servidor

function Inputheader($Filename, $Filepath) {
	header("Content-disposition: inline; filename ={$Filename}");
	header("Content-type: application/pdf");
	readfile($Filepath);

}

switch ($ReqGET) {
	case '1':
		$Filename = "cartao.pdf";
		$Filepath = "pdfs/{$Filename}";
		Inputheader($Filename, $Filepath);
		break;
}