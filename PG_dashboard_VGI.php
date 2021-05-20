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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.css" rel="stylesheet">

<!-- Documentation extras -->
<link href="assets/css/docs.css" rel="stylesheet">
<link href="assets/css/pygments-manni.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard VGI - Técnicos</title>
<!--Icone da página-->
<link rel="icon" href="Imagens/Logo.png" type="image/x-icon"/>
<link rel="shortcut icon" href="Imagens/Logo.png" type="image/x-icon"/>

<link href="CSS.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cadastros <span class="caret"></span> </button>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Consultas <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Adm BD <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Envio de Boletos <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Downloads <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Outras <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>

<!--
<span class="label label-default">Default</span><BR />
<span class="label label-primary">Primary</span><BR />
<span class="label label-success">Success</span><BR />
<span class="label label-info">Info</span><BR />
<span class="label label-warning">Warning</span><BR />
<span class="label label-danger">Danger</span><BR />
-->
<table width="500" border="1">
  <thead>
    <th width="42" scope="col">ID</th>
    <th width="389" scope="col">Nome</th>
    <th width="47" scope="col">Status</th>
  </thead>
  <tr>
    <th>0001</td>
    <td>Werner Luiz Gottschalt</td>
    <td><span class="label label-success">OK</span><BR /></td>
  </tr>
  <tr class="odd">
    <th>0002</td>
    <td>Andressa Oliveira Laurini</td>
    <td><span class="label label-primary">Na Fila</span><BR /></td>
  </tr>
  <tr>
    <th>0003</td>
    <td>Marcelo Von Groll</td>
    <td><span class="label label-danger">Erro</span><BR /></td>
  </tr>
  <tr class="odd">
    <th>0004</td>
    <td>Luan Michael</td>
    <td><span class="label label-success">OK</span><BR /></td>
  </tr>
  <tr>
    <th>0005</td>
    <td>Amanda Terra</td>
    <td><span class="label label-warning">Correios</span><BR /></td>
  </tr>
</table>


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