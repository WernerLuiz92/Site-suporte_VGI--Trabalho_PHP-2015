<style type="text/css">
#ConteinerSenha {
	width: 793px;
	height: 400px;
	border: 2px solid #CE2F2C;
}
#AvisoAreaTec {
	width: 793px;
	top: 0px;
	font-family: "Comic Sans MS", cursive;
	font-size: 24px;
	color: #CD342C;
	text-align: center;
	height: 125px;
}
#Login {
	width: 200px;
	height: 275px;
	text-align: center;
	margin-right: auto;
	margin-left: auto;
}
div.radiologin {
	text-align:left;
}
</style>
<p><img src="Imagens/Contato.jpg" width="793" height="181" />
</p>
<div id="ConteinerSenha">
  <div id="AvisoAreaTec">
    <p>*** Atenção ***</p>
    <p> Esta área é restrita! Será necessária autenticação para acessá-la!  </p>
  </div>
  <div id="Login">
    <form action="#" method="post">
	<fieldset>
		<div class="campo">
		  <label for="pass">Senha de acesso:</label>
		  <input type="password" style="width: 195px" name="pass" id="pass">
		</div>
        <fieldset class="grupo">
        	<div class="radiologin">
        		<div class="campo">
    				<label>
    					<input name="acesso" type="radio" value="1" checked="checked"> VGI Informática
    				</label>
    				<label>
    					<input name="acesso" type="radio" value="2"> Sub-Revenda
    				</label>
    			</div>
        	</div>
        </fieldset>
        <button type="submit" name="submit" class="botao">Acessar</button>
	</fieldset>
    </form>
  </div>
</div>

