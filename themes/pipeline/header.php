<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon"
        href="<?php bloginfo('template_url'); ?>/assets/images/logo-redondo-poa-car-service-fundo-transparente.png"
        type="image/png">


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/telas/style.css">

    <!-- font awesome -->
    <!-- <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="rel" id="font-awesome-css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </noscript> -->

    <!-- Google Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Roboto:wght@300;400;700&display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Roboto:wght@300;400;700&display=swap"
        media="print" onload="this.media='all'"> -->

    <?php wp_head(); ?>
</head>

<body>



    <header id="masthead" class="site-header">
        <div class="top-bar py-2">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="top-info">
                    <small><i class="fas fa-bolt text-accent"></i> Foco em performance local</small>
                </div>
                <div class="social-nav">
                    <a href="#" data-analytics="top-link-whatsapp"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" data-analytics="top-link-instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" data-analytics="top-link-youtube"><i class="fab fa-youtube"></i></a>
                    <a href="#" data-analytics="top-link-email"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg sticky-top bg-dark navbar-dark">
            <div class="container">
                <a class="navbar-brand fw-bold" href="#">PIPELINE DIGITAL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navMain">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item"><a class="nav-link" href="#servicos">Serviços</a></li>
                        <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfólio</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">SEO</a></li>
                                <li><a class="dropdown-item" href="#">Google Ads</a></li>
                                <li><a class="dropdown-item" href="#">Perfil de Empresas</a></li>
                                <li><a class="dropdown-item" href="#">Sites e Landings</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sucesso dos Clientes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ms-lg-3">
                            <a class="btn-cta-nav" href="#contato" data-analytics="nav-click-orcamento">Orçamento</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main id="conteudo-principal">