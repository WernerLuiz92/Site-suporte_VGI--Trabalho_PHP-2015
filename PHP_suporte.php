<?php
if (!isset($_SESSION)) {
    session_start();
}
require 'DB_Config.php';
require 'DB_Connection.php';
require 'DB_Database.php';

//----------------------------------------------------		
		$suport_datahora = date('Y-m-d H:i:s');
		$suport_nome = $_POST["nome"];
		$suport_empresa = $_POST["empresa"];
		$suport_fone = $_POST["telefone"];
		$suport_celular = $_POST["celular"];
		$suport_email = $_POST["email"];
		$suport_acesso = $_POST["acesso"];
		$suport_id_acesso = $_POST["id_acesso"];
		$suport_senha_acesso = $_POST["senha_acesso"];
		/*if(isset($_POST["anexo"])){
			$suport_anexo = $_POST["anexo"];
		}*/		
		$suport_descricao = $_POST["descricao"];
//----------------------------------------------------

		if (!$suport_nome || !$suport_empresa || !$suport_fone || !$suport_email || !$suport_descricao){
			$_SESSION["mensagemCadastro"] = '<script>alert("Os campos são obrigatórios, Por favor verifiquee! ");</script>';
			header('Location: index.php?pagina=PG_suporte#ANCORA');
			exit();
		}elseif($suport_acesso == 1 and (!$suport_id_acesso || !$suport_senha_acesso)){
			$_SESSION["mensagemCadastro"] = '<script>alert("Os campos ID e Senha do TeamViewer são obrigatórios, Por favor verifique! ");</script>';
			header('Location: index.php?pagina=PG_suporte#ANCORA');
			exit();
		}elseif($suport_acesso == 2 and !$suport_senha_acesso){
			$_SESSION["mensagemCadastro"] = '<script>alert("O Acesso do Show My PC exige uma Senha, Por favor verifique! ");</script>';
			header('Location: index.php?pagina=PG_suporte#ANCORA');
			exit();
		}elseif($suport_acesso == 3 and !$suport_id_acesso){
			$_SESSION["mensagemCadastro"] = '<script>alert("O Acesso do Show My PC exige uma Senha, Por favor verifique! ");</script>';
			header('Location: index.php?pagina=PG_suporte#ANCORA');
			exit();
		}else{
				$suporte = array(
					'DATAHORA'		=> $suport_datahora,
					'nome'			=> $suport_nome,
					'empresa'		=> $suport_empresa,
					'fone'			=> $suport_fone,
					'celular'		=> $suport_celular,
					'email'			=> $suport_email,
					'acesso'		=> $suport_acesso,
					'id_acesso'		=> $suport_id_acesso,
					'senha_acesso'	=> $suport_senha_acesso,
					//'anexo'		=> $suport_anexo,
					'descricao'		=> $suport_descricao
				);
			
				$insert = DBInsert('suporte', $suporte);
			
				if($insert){
					$_SESSION["mensagemCadastro"] = '<script>alert("Solicitação de Suporte enviada com sucesso!   Aguarde o contato de um dos técnicos!");</script>';
					header('Location: index.php?pagina=PG_contato#ANCORA');
					exit();
				}else{
					$_SESSION["mensagemCadastro"] = '<script>alert("Houve um erro ao enviar a solicitação, por favor tente novamente mais tarde!");</script>';
					header('Location: index.php?pagina=PG_contato#ANCORA');
					exit();
				}
			}	