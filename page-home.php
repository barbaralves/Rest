<?php
// Template name: Menu da Semana
?>

<?php get_header(); ?>
<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
	<section class="container">
		<h2 class="subtitulo"><?php the_title(); ?></h2>

		<div class="menu-prato grid-8">
			<h2>Peixes</h2>
			<ul>
				<?php
					$pratos = get_field2('pratos');
					if(isset($pratos)) { foreach($pratos as $prato) {
				?>
					<li>
						<span><sup>R$</sup><?php echo $prato['preco']; ?></span>
						<div>
							<h3><?php echo $prato['nome']; ?></h3>
							<p><?php echo $prato['descricao']; ?></p>
						</div>
					</li>
				<?php } } ?>
			</ul>
		</div>

		<div class="menu-prato grid-8">
			<h2>Carnes</h2>
			<ul>
				<?php
					$comidas = get_field2('comidas');
					if(isset($comidas)) { foreach($comidas as $comida) {
				?>
					<li>
						<span><sup>R$</sup><?php echo $comida['preco']; ?></span>
						<div>
							<h3><?php echo $comida['nome']; ?></h3>
							<p><?php echo $comida['descricao']; ?></p>
						</div>
					</li>
				<?php } } ?>
			</ul>
		</div>

	</section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>