<?php

function carrega_estilos(){

	wp_enqueue_style( 'estilos-pai', get_template_directory_uri() . '/style.css');
	wp_enqueue_style( 'estilos-filho', get_stylesheet_directory_uri() . '/CSS/style.css');
	wp_enqueue_style( 'estilos-filho-cadastro-negociacoes-bootstrap', get_stylesheet_directory_uri() . '/CSS/bootstrap.min.css');
	wp_enqueue_style( 'estilos-filho-cadastro-negociacoes-bootstrap-map', get_stylesheet_directory_uri() . '/CSS/bootstrap.min.css.map');
	
	if (is_page( 'painel' ) ):
		wp_enqueue_style( 'estilos-filho-painel', get_stylesheet_directory_uri() . '/CSS/estilo-painel.css');
		wp_enqueue_script('script-filho-painel', get_stylesheet_directory_uri(  ).'/JS/script-painel.js',array('jquery'),false,true);
	endif;

	if (is_page( 'cadastro-de-negociacoes' ) ):
		wp_enqueue_style( 'estilos-filho-cadastro-negociacoes', get_stylesheet_directory_uri() . '/CSS/estilo-cadastro-negociacoes.css');
		wp_enqueue_script('script-cadastro-negociacoes', get_stylesheet_directory_uri(  ).'/JS/script-cadastro-negociacoes.js',array('jquery'),false,true);
	endif;
	
	if (is_page( 'clientes' ) ):
		wp_enqueue_style( 'estilos-filho-clientes', get_stylesheet_directory_uri() . '/CSS/estilo-clientes.css');
	endif;
	
	if (is_page( 'cadastro-de-cliente' ) ):
		wp_enqueue_style( 'estilos-filho-cadastro-cliente', get_stylesheet_directory_uri() . '/CSS/estilo-cadastro-cliente.css');
	endif;
		
	if (is_page( 'veiculos' ) ):
		wp_enqueue_style( 'estilos-filho-veiculos', get_stylesheet_directory_uri() . '/CSS/estilo-veiculos.css');
	endif;
	
	if (is_page( 'cadastro-de-veiculo' ) ):
		wp_enqueue_style( 'estilos-filho-cadastro-veiculo', get_stylesheet_directory_uri() . '/CSS/estilo-cadastro-veiculo.css');
	endif;
	
	if (is_page( 'anuncio' ) ):
		wp_enqueue_style( 'estilos-filho-anuncio', get_stylesheet_directory_uri() . '/CSS/estilo-anuncio.css');
		wp_enqueue_script('script-filho-anuncio', get_stylesheet_directory_uri(  ).'/JS/script-anuncio.js',array('jquery'),false,true);
	endif;
		
	if (is_page( 'pedidos' ) ):
		wp_enqueue_style( 'estilos-filho-pedidos', get_stylesheet_directory_uri() . '/CSS/estilo-pedidos.css');
	endif;
		
	if (is_page( 'ofertados' ) ):
		wp_enqueue_style( 'estilos-filho-ofertados', get_stylesheet_directory_uri() . '/CSS/estilo-ofertados.css');
	endif;
		
	if (is_page( 'negociacoes' ) ):
		wp_enqueue_style( 'estilos-filho-negociacoes', get_stylesheet_directory_uri() . '/CSS/estilo-negociacoes.css');
	endif;
	
	if (is_page( 'financeiro' ) ):
		wp_enqueue_style( 'estilos-filho-financeiro', get_stylesheet_directory_uri() . '/CSS/estilo-financeiro.css');
		wp_enqueue_script('script-filho-financeiro', get_stylesheet_directory_uri(  ).'/JS/script-financeiro.js',array('jquery'),false,true);
	endif;	

	if (is_page( 'faturamento' ) ):
		wp_enqueue_style( 'estilos-filho-faturamento', get_stylesheet_directory_uri() . '/CSS/estilo-faturamento.css');
	endif;	
		
	if (is_page( 'despesas' ) ):
		wp_enqueue_style( 'estilos-filho-despesas', get_stylesheet_directory_uri() . '/CSS/estilo-despesas.css');
	endif;
		
	if (is_page( 'receitas' ) ):
		wp_enqueue_style( 'estilos-filho-receitas', get_stylesheet_directory_uri() . '/CSS/estilo-receitas.css');
	endif;
	
}

add_action( 'wp_enqueue_scripts', 'carrega_estilos');

//Adicionado jQuery
wp_enqueue_script("jquery");
wp_enqueue_script('script', get_stylesheet_directory_uri(  ).'/JS/script.js',array('jquery'),false,true);
wp_enqueue_script('bootstrap', get_stylesheet_directory_uri(  ).'/JS/bootstrap.min.js',array('jquery'),false,true);