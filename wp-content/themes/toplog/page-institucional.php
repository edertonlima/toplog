<?php get_header(); ?>

<session class="slide-page">
    <?php
        $getSlide = array(
            'post_type' => 'post',
            'post_status' => 'any',
            'category_name' => 'institucional',
            'orderby'           => date,
            'order'             => 'ASC'
        );
        $slide = new WP_Query( $getSlide );
        if(count($slide) > 0){ ?>

			<div id="myCarousel" class="carousel slide" data-ride="carousel">

				<div class="carousel-inner" role="listbox">
					<?php while($slide->have_posts()) : $slide->the_post(); 
						$i = $i+1; 
						$imagem = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' ); ?>
						<div class="item <?php if($i == 1){ echo 'active'; } ?>" style="background-image: url('<?php if($imagem[0]){ echo $imagem[0]; } ?>');">
							<?php the_field('texto_slide') ?>
						</div>
					<?php endwhile; ?>
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

<?php while ( have_posts() ) : the_post(); ?>
	
	<session class="box-conteudo" id="missao">
		<div class="container">
			<div class="row">
				<div class="col-md-12 justify-center">
					<img src="<?php the_field('imagem_missao') ?>" alt="Missão">
					<h2 class="destaque">MISSÃO</h2>
					<p><?php the_field('texto_missao') ?></p>
				</div>
			</div>
		</div>
	</session>

	<session class="box-conteudo imagem full-height" style="background-image: url('<?php the_field('imagem_destaque'); ?>');">
		<h2><span><?php the_field('texto_destaque') ?></span></h2>
	</session>

	<session class="box-conteudo" id="nossa-historia">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</session>

<?php endwhile; ?>
<?php get_footer(); ?>