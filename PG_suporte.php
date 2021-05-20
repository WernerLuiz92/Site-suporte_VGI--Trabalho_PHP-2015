<style type="text/css">
#conteiner {
	width: 793px;
}
#formulario {
	width: 615px;
	margin-right: auto;
	margin-left: auto;
}
</style>
<p><img src="Imagens/Contato.jpg" width="793" height="160" />
</p>
<div id="conteiner">
  <div id="formulario">
  <form action="PHP_suporte.php" method="post" enctype="multipart/form-data">
    <fieldset>
      <fieldset class="grupo">
        <div class="campo">
          <label for="nome">* Nome:</label>
          <input type="text" style="width: 295px" name="nome" id="nome" />
        </div>
        <div class="campo">
          <label for="empresa">* Empresa:</label>
          <input type="text" style="width: 295px" name="empresa" id="empresa" />
        </div>
      </fieldset>
      <fieldset class="grupo">
        <div class="campo">
          <label for="telefone">* Fone:</label>
          <input type="text" style="width: 295px" name="telefone" id="telefone" />
        </div>
        <div class="campo">
          <label for="celular">Celular:</label>
          <input type="text" style="width: 295px" name="celular" id="celular" />
        </div>
      </fieldset>
      <div class="campo">
        <label for="email">* E-Mail:</label>
        <input type="text" style="width: 600px" name="email" id="email" />
      </div>
      <div class="campo">
      	<fieldset class="grupo">
        	<label>* Tipo de acesso remoto:</label>
        	<div class="campo">
            	<label>
              		<input name="acesso" type="radio" value="1" checked="checked" />
              		<img src="Imagens/LogoTeam.png" width="24" height="24" />TeamViewer
            	</label>
            </div>
            <div class="campo">
            	<label>
              		<input name="acesso" type="radio" value="2" />
              		<img src="Imagens/LogoShow.png" width="24" height="24" />Show My PC
            	</label>
			</div>
            <div class="campo">
            	<label>
              		<input name="acesso" type="radio" value="3" />
              		<img src="Imagens/LogoAmmyy.png" width="24" height="24" />AMMYY Admin 
            	</label>
          	</div>
      	</fieldset>
      </div>
      <fieldset class="grupo">
        <div class="campo">
          <label for="id_acesso">* ID:</label>
          <input type="text" style="width: 295px" name="id_acesso" id="id_acesso" />
        </div>
        <div class="campo">
          <label for="senha_acesso">Senha:</label>
          <input type="text" style="width: 295px" name="senha_acesso" id="senha_acesso" />
        </div>
      </fieldset>
      <div class="campo">
           	  <label for="anexo">Anexar um arquivo:</label>
            	<input type="file" name="anexo" id="anexo" /> 
              </label>
      </div>
      <div class="campo">
        <label for="descricao">* Descreva o problema:</label>
        <textarea rows="4" style="width: 600px" id="descricao" name="descricao"></textarea>
      </div>
      <button type="submit" name="submit" class="botao">Solicitar Suporte</button>
    </fieldset>
  </form>
  </div>
</div>