<?php
// Template name: Sobre
?>

<?php get_header(); ?>
<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
	<section class="container sobre">
		<h2 class="subtitulo"><?php the_title(); ?></h2>

		<div class="grid-8">
			<img src="<?php the_field2('foto_rest')?>" alt="Fachada do Rest">
		</div>

		<div class="grid-8">
			<h2>História</h2>
			<p><?php the_field2('paragrafo_1'); ?></p>
			<p><?php the_field2('paragrafo_2'); ?></p>
			<h2>Visão</h2>
			<p><?php the_field2('visao'); ?></p>
			<h2>Valores</h2>
			<p><?php the_field2('valores'); ?></p>
		</div>
	</section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>