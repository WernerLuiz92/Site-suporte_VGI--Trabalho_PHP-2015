<?php
if (!isset($_SESSION)) {
    session_start();
}

	//Proteção contra SQL Injection
	function DBEscape($dados){
		$link = DBConnect();
		
		if(!is_array($dados)){
			$dados = mysqli_real_escape_string($link, $dados);
		}else{
			$arr = $dados;
			
			foreach ($arr as $key => $value){
				$key   = mysqli_real_escape_string($link, $key);
				$value = mysqli_real_escape_string($link, $value);
				
				$dados[$key] = $value;
			}
		}
		DBClose($link);
		
		return $dados;
	}
	
	//Abre Conexão com MySQL
	function DBConnect(){
		$link = @mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die($_SESSION["mensagemCadastro"]= '<script>alert("Nao foi possivel conectar: '.mysqli_connect_error().'");</script>');
		mysqli_set_charset($link, DB_CHARSET) or die($_SESSION["mensagemCadastro"]= '<script>alert("Erro ao setar o Charset: '.mysqli_error($link).'");</script>');
		
		return $link;
	}
	
	//Fecha Conexão com MySQL
	function DBClose($link){
		@mysqli_close($link) or die($_SESSION["mensagemCadastro"]= '<script>alert("Erro ao fechar conexão: '.mysqli_error($link).'");</script>');
	}
	