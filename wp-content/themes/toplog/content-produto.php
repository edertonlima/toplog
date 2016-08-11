<?php $imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>
<li class="box-conteudo imagem full-height item" style="background-image: url('<?php if($imagem[0]){ echo $imagem[0]; } ?>');"">
	<div class="container" style="top:0;">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<a href="javascript:" class="mais close-item" title="Saiba mais"></a>
				<div class="scroll">
					<img src="<?php the_field('icon_produto') ?>" alt="">
					<h2><?php the_title(); ?></h2>
					<?php the_field('conteudo_produto'); ?>
					<a href="<?php echo home_url(); ?>/contato/#fale-conosco" class="button" title="IMPORTE CONOSCO">IMPORTE CONOSCO</a>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-item">
		<a href="javascript:" class="mais" title="Saiba mais"></a>
	</div>
</li>