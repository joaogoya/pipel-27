<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon"
        href="<?php bloginfo('template_url'); ?>/assets/images/logo-redondo-poa-car-service-fundo-transparente.png"
        type="image/png">

    <!-- font awesome -->
    <!-- <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="rel" id="font-awesome-css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </noscript> -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Roboto:wght@300;400;700&display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Roboto:wght@300;400;700&display=swap"
        media="print" onload="this.media='all'">


    <!-- preload da img do hero -->
    <?php
    $hero_preload_id = null;

    if (is_front_page()) {
        // Caso 1: Home (usa a Thumbnail/Destaque)
        $hero_preload_id = get_post_thumbnail_id(get_the_ID());
    } elseif (is_page('oficina-amiga-da-mulher-certificada-em-porto-alegre')) {
        // Caso 2: Landing Page OAM (usa o ID pelo slug da imagem)
        $hero_preload_id = pipe_get_img_id_by_slug('pretty-young-woman-holding-a-red-car-toy');
    }

    // Se encontrou um ID, renderiza o link de preload
    if ($hero_preload_id) :
        // Buscamos o srcset completo (partindo do 'full' para ter todas as opções)
        $img_url    = wp_get_attachment_image_url($hero_preload_id, 'large');
        $img_srcset = wp_get_attachment_image_srcset($hero_preload_id, 'full');

        // Mantendo a consistência com o que discutimos de 100vw para Heros
        $imagesizes = "(max-width: 576px) 100vw, (max-width: 992px) 100vw, 100vw";
    ?>
        <link rel="preload" as="image" href="<?php echo esc_url($img_url); ?>"
            imagesrcset="<?php echo esc_attr($img_srcset); ?>" imagesizes="<?php echo esc_attr($imagesizes); ?>"
            fetchpriority="high">
    <?php endif; ?>


    <?php wp_head(); ?>
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <header id="masthead" class="site-header">
        <?php
        if (is_front_page()) :
            // 1 - Navbar Completa da Home (Âncoras)
            get_template_part('includes/home/navbar');

        elseif (is_page('oficina-amiga-da-mulher-certificada-em-porto-alegre/') || is_page('oam')) :
            // 2 - Navbar da Landing Page OAM
            // Dica: use o slug correto da sua página OAM dentro do is_page()
            get_template_part('includes/landing/navbar-oam');

        elseif (is_home() || is_archive() || is_single()) :
            // 3 - Navbar Clean para Blog, Categorias ou Post Detalhe
            get_template_part('includes/navbar-blog');

        else :
            // Fallback para qualquer outra página que venha a surgir
            get_template_part('includes/home/navbar');
        endif;
        ?>
    </header>

    <main id="conteudo-principal">