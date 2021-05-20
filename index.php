<?php
if (!isset($_SESSION)) {
    session_start();
}
require 'DB_Config.php';
require 'DB_Connection.php';
require 'DB_Database.php';
require 'PHP_senha.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.css" rel="stylesheet">

<!-- Documentation extras -->
<link href="assets/css/docs.css" rel="stylesheet">
<link href="assets/css/pygments-manni.css" rel="stylesheet">
  
<!--Icone da página-->
<link rel="icon" href="Imagens/Logo.png" type="image/x-icon"/>
<link rel="shortcut icon" href="Imagens/Logo.png" type="image/x-icon"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Suporte VGI</title>
<link href="CSS.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #CCC;
	margin-top: 10px;
}
</style>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body>
<div id="Banner"><img src="Imagens/Banner2.png" width="1004" height="183" /></div>
<a name="ANCORA"></a>
<div id="Separador"></div>
<div id="Corpo">
  <div id="Conteudo">
    <?php
      //ve se tem alguma pagina citada na url do site
      if ((isset($_REQUEST['pagina'])) and ($_REQUEST['pagina'] <> '')) {
                          
        //verifica se a pagina da url solicitada existe e se existir mostra a mesma
        if(file_exists($_REQUEST['pagina'].'.php')){
          include $_REQUEST['pagina'].'.php';
        }else {
          //se nao existir mostra a inicial
          include 'PG_inicio.php';
        }
      }else{
        //nao tem nada setado na url
        include 'PG_inicio.php';
      }
    ?>
  </div>
  <div id="MenuLateral">
    <div id="MenuSpry">
      <ul id="MenuBar1" class="MenuBarVertical">
        <li><a href="?pagina=PG_inicio" >P&aacute;gina Inicial</a></li>
        <li><a href=" " class="MenuBarItemSubmenu">Quem Somos</a>
          	<ul>
            	<li><a href="?pagina=PG_quemsomos#ANCORA">Sobre N&oacute;s</a></li>
            	<li><a href="?pagina=PG_produtos#ANCORA">Nossos Produtos</a></li>
			</ul>
        </li>
        <li><a href="?pagina=PG_suporte#ANCORA">Solicitar Suporte</a></li>
        <li><a href="?pagina=PG_contato#ANCORA">Contato</a></li>
        <li><a href="?pagina=PG_localizacao#ANCORA">Localiza&ccedil;&atilde;o</a></li>
        <li><a href="?pagina=PG_tecnicosenha#ANCORA">&Aacute;rea T&eacute;cnica</a></li>
      </ul>
    </div>
    <div id="SenhaPDV">
      <?php
			echo SenhaPDV();
		?>
    </div>
  </div>
</div>
<div id="RodaPe">
  <div id="RodaTelefones">
    <p>
   	<h3>
   		<i class="glyphicon glyphicon-earphone"></i> Telefones
    </h3>
    	(55) 3332-7075<BR />
        (55) 8444-1363<BR />
        (55) 8133-3770<BR />    
    </p>
  </div>
  <div id="RodaEndereco">
    <p>
    	<h3>
    		<i class="glyphicon glyphicon-road"></i> Endereço
        </h3>
        Rua Ernesto Alves, 330<BR />
        Ed. Antares - Sala 12<BR />
        Centro - Ijuí - RS<BR />
        CEP: 98700-000<BR />
    </p>
  </div>
  <div id="RodaEmail">
  	<p>
    	<h3>
    		<i class="glyphicon glyphicon-envelope"></i> E-Mails
        </h3>
        vgi@vgiinformatica.com.br<BR />
        <img src="Imagens/LogoSkype.png" width="24" height="24" />atendimento@vgiinformatica.com.br<BR />
        <img src="Imagens/LogoSkype.png" width="24" height="24" />suporte@vgiinformatica.com.br<BR />
        comercial@vgiinformatica.com.br<BR />
        marcelo@vgiinformatica.com.br<BR />  
	</p>
  </div>
</div>
<div id="CopyRight">
  <p>Site desenvolvido por: Werner Luiz Gottschalt - E.T.E. 25 de Julho - Cusro Técnico em Informática</p>
</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
<!-- JS and analytics only. -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="dist/js/bootstrap.js"></script>

    <script src="http://platform.twitter.com/widgets.js"></script>
    <script src="assets/js/holder.js"></script>

    <script src="assets/js/application.js"></script>
    
</body>
</html>


<?php
if (isset($_SESSION["mensagemCadastro"])){
echo $_SESSION["mensagemCadastro"];
unset($_SESSION["mensagemCadastro"]);
}
