<?php
	function SenhaPDV(){
		$dia = date('d');
		$mes = date('m');
		$ano = date('y');
		
		$senha = ($dia * $mes * $ano * 8);
		
		return $senha;
	}
