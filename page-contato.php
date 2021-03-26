<?php
// Template name: Contato
?>

<?php get_header(); ?>
<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
	<section class="container contato">
		<h2 class="subtitulo"><?php the_title(); ?></h2>

		<div class="grid-16">
			<a href="<?php the_field2('link_mapa'); ?>" target="_blank"><img src="<?php the_field2('imagem_mapa'); ?>" alt="Mapa para o Rest"></a>
		</div>

		<?php
			$contatos = get_field2('dados');
			if(isset($contatos)) { foreach($contatos as $contato) {
		?>
			<div class="grid-1-3 contato-item">
				<h2><?php echo $contato['titulo_dados']; ?></h2>
				<p><?php echo $contato ['informacao_dados']; ?></p>
				<p><?php echo $contato ['informacao2_dados']; ?></p>
				<p><?php echo $contato ['informacao3_dados']; ?></p>
			</div>
		<?php } } ?>

	</section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>