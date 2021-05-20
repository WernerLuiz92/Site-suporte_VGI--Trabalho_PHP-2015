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
  <form action="PHP_contato.php" method="post">
    <fieldset>
      <fieldset class="grupo">
        <div class="campo">
          <label for="nome">* Nome:</label>
          <input type="text" style="width: 295px" name="nome" id="nome" />
        </div>
        <div class="campo">
          <label for="rzsocial">Razão Social:</label>
          <input type="text" style="width: 295px" name="rzsocial" id="rzsocial" />
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
        <label>* Setor que deseja entrar em contato:</label>
        <fieldset class="grupo">
          <div class="campo">
            <label>
              <input name="setor" type="radio" value="1" checked="checked" />
              Atendimento </label>
            <label>
              <input name="setor" type="radio" value="2" />
              Financeiro </label>
          </div>
          <div class="campo">
            <label>
              <input name="setor" type="radio" value="4" />
              Administrativo </label>
            <label>
              <input name="setor" type="radio" value="5" />
              Suporte </label>
          </div>
          <div class="campo">
            <label>
              <input name="setor" type="radio" value="5" />
              Vendas </label>
            <label>
              <input name="setor" type="radio" value="6" />
              Ouvidoria </label>
          </div>
        </fieldset>
      </div>
      <fieldset class="grupo">
        <div class="campo">
          <label for="cidade">* Cidade</label>
          <input type="text" style="width: 295px" id="cidade" name="cidade" value="" />
        </div>
        <div class="campo">
          <label for="estado">* Estado</label>
          <select name="estado" id="estado">
            <option value="" selected="selected">--</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="RO">RO</option>
            <option value="RR">RR</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
          </select>
        </div>
      </fieldset>
      <div class="campo">
        <label for="mensagem">* Mensagem</label>
        <textarea rows="4" style="width: 600px" id="mensagem" name="mensagem"></textarea>
      </div>
      <div class="campo">
        <label>Newsletter</label>
        <label>
          <input type="checkbox" name="newsletter" value="1" />
          Gostaria de receber a Newsletter da empresa </label>
      </div>
      <button type="submit" name="submit" class="botao">Enviar</button>
    </fieldset>
  </form>
  </div>
</div>