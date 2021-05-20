<?php

if (!isset($_SESSION)) {
    session_start();
}
require 'DB_Config.php';
require 'DB_Connection.php';
require 'DB_Database.php';

//----------------------------------------------------
        $cont_datahora = date('Y-m-d H:i:s');
        $cont_nome = $_POST['nome'];
        $cont_rzsocial = $_POST['rzsocial'];
        $cont_fone = $_POST['telefone'];
        $cont_celular = $_POST['celular'];
        $cont_email = $_POST['email'];
        $cont_setor = $_POST['setor'];
        $cont_cidade = $_POST['cidade'];
        $cont_estado = $_POST['estado'];
        $cont_mensagem = $_POST['mensagem'];
        if (isset($_POST['newsletter'])) {
            $cont_news = 1;
        } else {
            $cont_news = 0;
        }
//----------------------------------------------------

        if (!$cont_nome || !$cont_fone || !$cont_email || !$cont_setor || !$cont_cidade || !$cont_estado || !$cont_mensagem) {
            $_SESSION['mensagemCadastro'] = '<script>alert("Os campos sao obrigatórios, Por favor verifique novamente! ");</script>';
            header('Location: index.php?pagina=PG_contato#ANCORA');
            exit();
        } else {
            $contato = [
                'data_hora' => $cont_datahora,
                'nome' => $cont_nome,
                'rz_social' => $cont_rzsocial,
                'telefone' => $cont_fone,
                'celular' => $cont_celular,
                'email' => $cont_email,
                'setor' => $cont_setor,
                'cidade' => $cont_cidade,
                'estado' => $cont_estado,
                'mensagem' => $cont_mensagem,
                'newsletter' => $cont_news,
            ];

            $insert = DBInsert('contato', $contato);

            if ($insert) {
                $_SESSION['mensagemCadastro'] = '<script>alert("E-Mail enviado com sucesso!!");</script>';
                header('Location: index.php?pagina=PG_contato#ANCORA');
                exit();
            } else {
                $_SESSION['mensagemCadastro'] = '<script>alert("Houve algum erro ao enviar o E-Mail. Por favor tente mais tarde!");</script>';
                header('Location: index.php?pagina=PG_contato#ANCORA');
                exit();
            }
        }
