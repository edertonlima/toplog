<?php get_header(); ?>

<session class="slide-page">
    <?php
        $getSlide = array(
            'post_type' => 'post',
            'post_status' => 'any',
            'category_name' => 'home',
            'orderby'           => date,
            'order'             => 'ASC'
        );
        $slide = new WP_Query( $getSlide );
        if(count($slide) > 0){ 
        	$i = 0; ?>

			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<?php while($slide->have_posts()) : $slide->the_post(); 
						$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>
						<div class="item <?php if($i == 0){ echo 'active'; } ?>" style="background-image: url('<?php if($imagem[0]){ echo $imagem[0]; } ?>');">
							<?php the_field('texto_slide') ?>
						</div>
						<?php $i = $i+1; 
					endwhile; ?>
				</div>
				<?php if($i > 0){ ?>
					<ol class="carousel-indicators">
						<?php for($indicator=0; $indicator<$i; $indicator++){ ?>
							<li data-target="#myCarousel" data-slide-to="<?php echo $indicator; ?>" class="<?php if($indicator == 0){ echo "active"; } ?>"></li>
						<?php } ?>
					</ol>
				<?php } ?>
			</div>
            
        <?php }
    ?>
</session>

<session class="box-conteudo">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-1 justify-center">
				<img src="<?php the_field('imagem_beneficio', 12) ?>" alt="Benefícios">
				<h2 class="destaque"><?php the_field('titulo_beneficio', 12) ?></h2>
				<p><?php the_field('texto_beneficio', 12) ?></p>
			</div>
			<div class="col-md-4 col-md-offset-2 justify-center ">
				<img src="<?php the_field('imagem_servicos', 12) ?>" alt="Serviços">
				<h2 class="destaque"><?php the_field('titulo_servicos', 12) ?></h2>
				<p><?php the_field('texto_servicos', 12) ?></p>
			</div>
		</div>
	</div>
</session>

<session class="box-conteudo imagem full-height" style="background-image: url('<?php the_field('imagem_destaque', 12) ?>');">
	<h2 class="destaque"><span><?php the_field('texto_destaque', 12) ?></span></h2>
</session>

<session class="box-conteudo" id="contato">
	<div class="container">
		<div class="row">
			<div class="col-md-6 box-contato">
				<h2 class="destaque center">Localização</h2>
				<div class="col-md-6 localizacao">
					<h3><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-mapa-verde.png">Brasil</h3>
					<p><?php the_field('brasil', 12) ?></p>
				</div>
				<div class="col-md-6 localizacao">
					<h3><img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-mapa-vermelho.png">China</h3>
					<p><?php the_field('china', 12) ?></p>
				</div>
			</div>
			<div class="col-md-6 box-contato">
				<h2 class="destaque center">Fale Conosco</h2>
				<p class="msg-form"></p>
				<form action="javascript:" class="contato">
					<fieldset>
						<input type="text" name="nome" id="nome" placeholder="NOME">
						<input type="text" name="email" id="email" placeholder="E-MAIL">
						<input type="text" name="telefone" id="telefone" placeholder="TELEFONE">
						<textarea name="mensagem" id="mensagem" placeholder="ESCREVA AQUI SUA MENSAGEM"></textarea>
						<button type="submit" class="enviar">ENVIAR</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</session>

<?php get_footer(); ?>
 
<script type="text/javascript">
	$(document).ready(function(){
		$(".enviar").click(function(){
			$('.enviar').html('ENVIANDO').prop( "disabled", true );
			$('.msg-form').html('').hide();
			var nome = $('#nome').val();
			var email = $('#email').val();
			var telefone = $('#telefone').val();
			var mensagem = $('#mensagem').val();

			if(email!=''){
				$.getJSON("<?php echo get_template_directory_uri(); ?>/mail.php", { nome: nome, email: email, telefone: telefone, mensagem: mensagem }, function(result){		
					$('.msg-form').html(result).show();
					$('.contato').trigger("reset");
					$('.enviar').html('ENVIAR').prop( "disabled", false );
				});
			}else{
				$('.msg-form').html('Por favor, digite um e-mail válido.').show();
				$('.enviar').html('Enviar').prop( "disabled", false );
			}
		});
	});
</script>