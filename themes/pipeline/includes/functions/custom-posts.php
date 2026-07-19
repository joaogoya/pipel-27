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






