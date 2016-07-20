
<?php include '../includes/head.php'; ?>

<header class="header">
	<?php include '../includes/header.php'; ?>
	<?php include '../includes/slide-importacao.php'; ?>
</header>

<ul class="list-produtos">
	<li class="box-conteudo imagem full-height item" style="background-image: url('<?php echo $url; ?>/assets/images/bazar.jpg');"">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<a href="javascript:" class="mais close-item" title="Saiba mais"></a>
					<div class="scroll">
						<img src="../assets/images/bazar.png" alt="BAZAR">
						<h2>BAZAR</h2>
						<span>
							<strong>Móveis</strong>
							Banquetas, cadeiras, mesas, etc.
						</span>
						<span>
							<strong>Utilidades domésticas</strong>
							Cozinha, recipientes, lavanderia, etc.
						</span>
						<span>
							<strong>Pet</strong>
							Higiene, conforto, etc.
						</span>
						<span>
							<strong>Ferramentas</strong>
						</span>
						<span>
							<strong>Higiene e limpeza</strong>
							Lixeira, mops, etc.
						</span>
						<span>
							<strong>Textil</strong>
							Cama, mesa e banho
						</span>
						<span>
							<strong>Pneus</strong>
						</span>
						<a href="<?php echo $url; ?>/contato/#fale-conosco" class="button" title="IMPORTE CONOSCO">IMPORTE CONOSCO</a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-item">
			<a href="javascript:" class="mais" title="Saiba mais"></a>
		</div>
	</li>

	<li class="box-conteudo imagem full-height item" style="background-image: url('<?php echo $url; ?>/assets/images/construcao-civil.jpg');"">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<a href="javascript:" class="mais close-item" title="Saiba mais"></a>
					<div class="scroll">
						<img src="../assets/images/construcao-civil.png" alt="BAZAR">
						<h2>CONSTRUÇÃO CIVIL</h2>
						<span>
							<strong>Porcelanatos</strong>
						</span>
						<span>
							<strong>Cubas, vasos e acabamentos</strong>
						</span>
						<a href="<?php echo $url; ?>/contato/#fale-conosco" class="button" title="IMPORTE CONOSCO">IMPORTE CONOSCO</a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-item">
			<a href="javascript:" class="mais" title="Saiba mais"></a>
		</div>
	</li>

	<li class="box-conteudo imagem full-height item" style="background-image: url('<?php echo $url; ?>/assets/images/alimentos.jpg');"">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<a href="javascript:" class="mais close-item" title="Saiba mais"></a>
					<div class="scroll">
						<img src="../assets/images/alimentos.png" alt="BAZAR">
						<h2>ALIMENTOS</h2>
						<span>
							<strong>Azeite</strong>
						</span>
						<span>
							<strong>Pescados</strong>
						</span>
						<span>
							<strong>Massas e molhos</strong>
						</span>
						<span>
							<strong>Food Service</strong>
						</span>
						<a href="<?php echo $url; ?>/contato/#fale-conosco" class="button" title="IMPORTE CONOSCO">IMPORTE CONOSCO</a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-item">
			<a href="javascript:" class="mais" title="Saiba mais"></a>
		</div>
	</li>

	<li class="box-conteudo imagem full-height item" style="background-image: url('<?php echo $url; ?>/assets/images/industria.jpg');"">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<a href="javascript:" class="mais close-item" title="Saiba mais"></a>
					<div class="scroll">
						<img src="../assets/images/industria.png" alt="BAZAR">
						<h2>INDÚSTRIA</h2>
						<span>
							<strong>Resinas plásticas</strong>
						</span>
						<span>
							<strong>Metais</strong>
						</span>
						<span>
							<strong>Equipamentos</strong>
						</span>
						<span>
							<strong>Insumos industriais</strong>
						</span>
						<a href="<?php echo $url; ?>/contato/#fale-conosco" class="button" title="IMPORTE CONOSCO">IMPORTE CONOSCO</a>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-item">
			<a href="javascript:" class="mais" title="Saiba mais"></a>
		</div>
	</li>
</ul>

<?php include '../includes/footer.php'; ?>

<!-- JQUERY SLIM SCROLL -->
<script type="text/javascript" src="<?php echo $url; ?>/assets/js/jquery.slimscroll.js"></script>
<script type="text/javascript">
	$(function(){
	    $('.scroll').slimScroll({
		    size: '5px',
		    color: '#afafaf'
	    });
	});

	$(document).ready(function(){

		/* OPEN/CLOSE ITEM */
		$('.mais').click(function(){
			$(this).parent().siblings('.container').css('top',0);
		});

		$('.close-item').click(function(){
			$(this).parents('.container').css('top','100vh');
		});
	});	
</script>