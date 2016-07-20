
<?php include '../includes/head.php'; ?>

<script type="text/javascript">
	$(document).ready(function(){

		/* SELECT2 */
		$("select").select2({
			minimumResultsForSearch: 200
		});

		/* FILE STYLE */
		$("input").filestyle({buttonText: "Selecionar"});

	});	
</script>

<!-- CSS SELECT2-->
<link rel="stylesheet" type="text/css" href="../assets/css/select2.min.css" media="screen" />
<script type="text/javascript" src="../assets/js/select2.min.js"></script>

<!-- FILE STYLE -->
<script type="text/javascript" src="../assets/js/bootstrap-filestyle.min.js"></script>

<header class="header">
	<?php include '../includes/header.php'; ?>
	<?php include '../includes/slide-contato.php'; ?>
</header>

<session class="box-conteudo" id="fale-conosco">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h2 class="destaque center">Fale Conosco</h2>
				<form action="javascript:">
					<fieldset class="col-md-6">
						<input type="text" name="" placeholder="NOME COMPLETO *">
						<input type="text" name="" placeholder="E-MAIL *">
						<input type="text" name="" placeholder="TELEFONE *">
						<input type="text" name="" placeholder="EMPRESA *">
						<input type="text" name="" placeholder="CIDADE *">
						<select name="" data-placeholder="ESTADO *">
							<option value="AC">Acre</option>
							<option value="AL">Alagoas</option>
							<option value="AP">Amapá</option>
							<option value="AM">Amazonas</option>
							<option value="BA">Bahia</option>
							<option value="CE">Ceará</option>
							<option value="DF">Distrito Federal</option>
							<option value="ES">Espirito Santo</option>
							<option value="GO">Goiás</option>
							<option value="MA">Maranhão</option>
							<option value="MS">Mato Grosso do Sul</option>
							<option value="MT">Mato Grosso</option>
							<option value="MG">Minas Gerais</option>
							<option value="PA">Pará</option>
							<option value="PB">Paraíba</option>
							<option value="PR">Paraná</option>
							<option value="PE">Pernambuco</option>
							<option value="PI">Piauí</option>
							<option value="RJ">Rio de Janeiro</option>
							<option value="RN">Rio Grande do Norte</option>
							<option value="RS">Rio Grande do Sul</option>
							<option value="RO">Rondônia</option>
							<option value="RR">Roraima</option>
							<option value="SC">Santa Catarina</option>
							<option value="SP">São Paulo</option>
							<option value="SE">Sergipe</option>
							<option value="TO">Tocantins</option>
						</select>
						<select name="" data-placeholder="CATEGORIA">
							<optgroup label="Importação">
								<option value="volvo">Alimentos</option>
								<option value="saab">Construção</option>
							</optgroup>
							<optgroup label="Exportação">
								<option value="volvo">Alimentos</option>
								<option value="saab">Construção</option>
							</optgroup>
						</select>
					</fieldset>
					<fieldset class="col-md-6">
						<input type="text" name="" placeholder="ASSUNTO">
						<textarea name="" id="" class="row-5" placeholder="ESCREVA AQUI SUA MENSAGEM"></textarea>
						<button type="submit">ENVIAR</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</session>

<session class="box-conteudo imagem full-height" style="background-image: url('<?php echo $url; ?>/assets/images/slide-3.jpg');">
	<h2><span><strong>TRABALHE CONOSCO</strong>Faça parte da nossa equipe, conheça outras culturas, aprenda mais sobre comércio e descubra um novo jeito de fazer negócio!</span></h2>
</session>

<session class="box-conteudo" id="trabalhe-conosco">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h2 class="destaque center">SEU CURRÍCULO</h2>
				<form action="javascript:">
					<fieldset class="col-md-6">
						<input type="text" name="" placeholder="NOME COMPLETO *">
						<input type="text" name="" placeholder="E-MAIL *">
						<input type="text" name="" placeholder="TELEFONE *">
						<input type="file" class="filestyle" placeholder="ANEXAR CURRÍCULO *" data-input="false">
						<input type="text" name="" placeholder="QUAL CARGO DESEJA? *">
					</fieldset>
					<fieldset class="col-md-6">
						<textarea name="" id="" class="row-4" placeholder="ESCREVA AQUI SUA MENSAGEM"></textarea>
						<button type="submit">ENVIAR</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</session>

<?php include '../includes/footer.php'; ?>