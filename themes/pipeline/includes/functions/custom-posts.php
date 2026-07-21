<?php

/*******************************************************/
/******************** POSTTYPE HOME ********************/
/*******************************************************/


add_action('init', 'type_home_config');

function type_home_config()
{

    $descritivos = array(
        'name' => 'Home Config',
        'singular_name' => 'Configuração',
        'add_new' => 'Adicionar Nova configuração',
        'add_new_item' => 'Adicionar configuração',
        'edit_item' => 'Editar configuração',
        'new_item' => 'Nova configuração',
        'view_item' => 'Ver configurações',
        'search_items' => 'Procurar configuração',
        'not_found' =>  'Nenhum configuração encontrada',
        'not_found_in_trash' => 'Nenhum configuração na Lixeira',
        'parent_item_colon' => '',
        'menu_name' => 'Home Config'
    );

    $args = array(
        'labels' => $descritivos,
        'public' => true,
        'hierarchical' => false,
        'menu_icon' => 'dashicons-admin-home',
        'menu_position' => 36,
        'supports' => array('title', 'custom-fields', 'revisions')
    );

    register_post_type('home_config', $args);
    flush_rewrite_rules();
}



/*******************************************************/
/***************** POSTTYPE SERVICES *******************/
/*******************************************************/


add_action('init', 'type_services');

function type_services()
{

    $descritivos = array(
        'name' => 'Servicos',
        'singular_name' => 'Servico',
        'add_new' => 'Adicionar Novo servico',
        'add_new_item' => 'Adicionar servico',
        'edit_item' => 'Editar servico',
        'new_item' => 'Novo servico',
        'view_item' => 'Ver servicos',
        'search_items' => 'Procurar servico',
        'not_found' =>  'Nenhum servico encontrado',
        'not_found_in_trash' => 'Nenhum servico na Lixeira',
        'parent_item_colon' => '',
        'menu_name' => 'Servicos'
    );

    $args = array(
        'labels' => $descritivos,
        'public' => true,
        'hierarchical' => false,
        'menu_icon' => 'dashicons-store',
        'menu_position' => 36,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes', 'post-formats')
    );

    register_post_type('services', $args);
    flush_rewrite_rules();
}


