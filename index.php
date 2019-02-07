<!-- Área do HTML -->
<link rel="stylesheet" href="css/style.css">
<form id="contact" action="php/acao.php" method="post">
		<div class="container">
			<a><img id="imagem" src="https://uploaddeimagens.com.br/images/001/849/340/original/estourouganhou.jpg?1548166471" alt="Promocao Estourou Ganhou"/></a>
			<br>
			
			<h4>Preencha com seus dados e selecione um balão</h4>
			
			<fieldset>
				<input placeholder="Nome" name="nome" type="nome" tabindex="1" required>
			</fieldset>
			
			<fieldset>
				<input placeholder="E-mail" name="email" type="email" tabindex="2" required>
			</fieldset>

			<fieldset>
				<input placeholder="Codigo" name="codigo" type="codigo" tabindex="3" required>
			</fieldset>

			<fieldset>
				<input placeholder="Cidade" name="cidade" type="cidade" tabindex="4" required>
			</fieldset>

			<br>

			<table id="tabelabaloes">
			<td>
				<button name="BTEnvia" type="submit" id="contact-submit" value="submit1"></button>

				<button name="BTEnvia" type="submit" id="contact-submit2" value="submit2"></button>
			</td>

			<td>
				<button name="BTEnvia" type="submit" id="contact-submit3" value="submit3"></button>
			  
				<button name="BTEnvia" type="submit" id="contact-submit4" value="submit4"></button>
			</td>

			<td>
				<button name="BTEnvia" type="submit" id="contact-submit5" value="submit5"></button>
				
				<button name="BTEnvia" type="submit" id="contact-submit6" value="submit6"></button>
			</td>
		</table>
	</div>
</form>
<!-- FIM Área do HTML -->