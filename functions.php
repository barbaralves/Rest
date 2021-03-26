<?php

function get_field2($key, $page_id = 0){
	$id = $page_id !== 0 ? $page_id : get_the_ID();

	return get_post_meta($id, $key, true);
}

function the_field2($key, $page_id = 0){
	echo get_field2($key, $page_id);
}

//                         HOME

add_action('cmb2_admin_init', 'cmb2_fields_home');
function cmb2_fields_home() {
	$cmb = new_cmb2_box([
		'id' => 'home_box',
		'title' => 'Menu da Semana - CMB2',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-home.php',
		],
	]);

	$cmb->add_field([
		'name' => 'SEO',
		'id' => 'seo',
		'type' => 'title',
	]);

	$cmb->add_field([
		'name' => 'Título SEO',
		'id' => 'title_seo',
		'type' => 'text',
	]);

	$cmb->add_field([
		'name' => 'Descrição SEO',
		'id' => 'description_seo',
		'type' => 'textarea_small',
	]);

	$pratos = $cmb->add_field([
		'name' => 'Pratos',
		'id' => 'pratos',
		'type' => 'group',
		'repeatable' => true,
		'options' => [
			'group_title' => 'Prato {#}',
			'add_button' => 'Adicionar Prato',
			'sortable' => true,
		]
	]);

	$cmb->add_group_field($pratos, [
		'name' => 'Nome',
		'id' => 'nome',
		'type' => 'text',
	]);

	$cmb->add_group_field($pratos, [
		'name' => 'Descrição',
		'id' => 'descricao',
		'type' => 'text',
	]);

	$cmb->add_group_field($pratos, [
		'name' => 'Preço',
		'id' => 'preco',
		'type' => 'text',
	]);

	$comidas = $cmb->add_field([
		'name' => 'Pratos Tipo 2',
		'id' => 'comidas',
		'type' => 'group',
		'repeatable' => true,
		'options' => [
			'group_title' => 'Prato {#}',
			'add_button' => 'Adicionar Prato',
			'sortable' => true,
		]
	]);

	$cmb->add_group_field($comidas, [
		'name' => 'Nome',
		'id' => 'nome',
		'type' => 'text',
	]);

	$cmb->add_group_field($comidas, [
		'name' => 'Descrição',
		'id' => 'descricao',
		'type' => 'text',
	]);

	$cmb->add_group_field($comidas, [
		'name' => 'Preço',
		'id' => 'preco',
		'type' => 'text',
	]);
}

//                         SOBRE

add_action('cmb2_admin_init', 'cmb2_fields_sobre');
function cmb2_fields_sobre() {

	$cmb = new_cmb2_box([
		'id' => 'sobre_box',
		'title' => 'Sobre',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-sobre.php',
		],
	]);

	$cmb->add_field([
		'name' => 'SEO',
		'id' => 'seo',
		'type' => 'title',
	]);

	$cmb->add_field([
		'name' => 'Título SEO',
		'id' => 'title_seo_sobre',
		'type' => 'text',
	]);

	$cmb->add_field([
		'name' => 'Descrição SEO',
		'id' => 'description_seo_sobre',
		'type' => 'textarea_small',
	]);

	$cmb->add_field([
		'name' => 'História',
		'id' => 'titulo_1',
		'type' => 'title',
	]);

	$cmb->add_field([
		'name' => 'Parágrafo 1',
		'id' => 'paragrafo_1',
		'type' => 'textarea_small',
	]);

	$cmb->add_field([
		'name' => 'Parágrafo 2',
		'id' => 'paragrafo_2',
		'type' => 'textarea_small',
	]);

	$cmb->add_field([
		'name' => 'Visão',
		'id' => 'visao',
		'type' => 'textarea_small',
	]);

	$cmb->add_field([
		'name' => 'Valores',
		'id' => 'valores',
		'type' => 'textarea_small',
	]);

	$cmb->add_field([
		'name' => 'Foto Rest',
		'id' => 'foto_rest',
		'type' => 'file',
		'options' => [
			'url' => false,
		],
		'query_args' => array(
			'type' => array(
			'image/jpeg',
			'image/png',
			),
		),
	]);
		
}

//                         CONTATO

add_action('cmb2_admin_init', 'cmb2_fields_contato');
function cmb2_fields_contato() {

	$cmb = new_cmb2_box([
		'id' => 'contato_box',
		'title' => 'Contato',
		'object_types' => ['page'],
		'show_on' => [
			'key' => 'page-template',
			'value' => 'page-contato.php',
		],
	]);

	$cmb->add_field([
		'name' => 'SEO',
		'id' => 'seo',
		'type' => 'title',
	]);

	$cmb->add_field([
		'name' => 'Título SEO',
		'id' => 'title_seo_contato',
		'type' => 'text',
	]);

	$cmb->add_field([
		'name' => 'Descrição SEO',
		'id' => 'description_seo_contato',
		'type' => 'textarea_small',
	]);

	$cmb->add_field([
		'name' => 'Dados Cabeçalho',
		'id' => 'cabecalho',
		'type' => 'title',
	]);

	$cmb->add_field([
		'name' => 'Endereço Cabeçalho',
		'id' => 'endereco_cabecalho',
		'type' => 'text',
	]);

	$cmb->add_field([
		'name' => 'Telefone Cabeçalho',
		'id' => 'telefone_cabecalho',
		'type' => 'text',
	]);

	$cmb->add_field([
		'name' => 'Dados Mapa',
		'id' => 'mapa',
		'type' => 'title',
	]);

	$cmb->add_field([
		'name' => 'Link Mapa',
		'id' => 'link_mapa',
		'type' => 'text_url',
	]);

	$cmb->add_field([
		'name' => 'Imagem Mapa',
		'id' => 'imagem_mapa',
		'type' => 'file',
		'options' => [
			'url' => false,
		],
		'query_args' => array(
			'type' => array(
			'image/jpeg',
			'image/png',
			),
		),
	]);

	$contato = $cmb->add_field([
		'name' => 'Dados',
		'id' => 'dados',
		'type' => 'group',
		'repeatable' => true,
		'options' => [
			'group_title' => 'Informação {#}',
			'add_button' => 'Adicionar Dado',
			'sortable' => true,
		]
	]);

	$cmb->add_group_field($contato, [
		'name' => 'Título Dados',
		'id' => 'titulo_dados',
		'type' => 'text',
	]);

	$cmb->add_group_field($contato, [
		'name' => 'Informação Dados',
		'id' => 'informacao_dados',
		'type' => 'text',
	]);

	$cmb->add_group_field($contato, [
		'name' => 'Informação Dados',
		'id' => 'informacao2_dados',
		'type' => 'text',
	]);

	$cmb->add_group_field($contato, [
		'name' => 'Informação Dados',
		'id' => 'informacao3_dados',
		'type' => 'text',
	]);
}

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

?>