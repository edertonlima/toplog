
<?php include '../includes/head.php'; ?>

<header class="header">
	<?php include '../includes/header.php'; ?>
	<?php include '../includes/slide-exportacao.php'; ?>
</header>

<ul class="list-produtos">
	<li class="box-conteudo imagem full-height item" style="background-image: url('<?php echo $url; ?>/assets/images/acai.jpg');"">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<a href="javascript:" class="mais close-item" title="Saiba mais"></a>
					<div class="scroll">
						<img src="../assets/images/acai.png" alt="BAZAR">
						<h2>AÇAI</h2>
						<span>
							<strong></strong>
						</span>
						<a href="javascript:" class="button" title="IMPORTE CONOSCO">IMPORTE CONOSCO</a>
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