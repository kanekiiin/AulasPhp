<?php
	
	const ID = "hiERrUuVOUbmxH3dwDFy3";
	const SECRET = "IrFDqhj98acGNQQG0Zp3FHj8kWKBiFheY9Oh1Z49";

	const BASE_URL = "https://api.aerisapi.com/conditions/";
	$cidade =$_GET['campo_cidade'];
	$cidade = urlencode($cidade);
	$url = BASE_URL . "{$cidade},br?client_id=" . ID . "&client_secret=" . SECRET;

	$json  = file_get_contents($url);
	$dados = json_decode($json, true);

	$nome = $dados['response'][0]['place']['name'];
	$temperatura = $dados['response'][0]['periods'][0]['tempC'];
	$sensacao = $dados['response'][0]['periods'][0]['feelslikeC'];
	$umidade = $dados['response'][0]['periods'][0]['humidity'];
	$velocidade = $dados['response'][0]['periods'][0]['windSpeedKPH'];

	include "Atividadde2.php";