<header id="masthead" class="site-header">

    <?php get_template_part('includes/home/topbar'); ?>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg sticky-top bg-dark navbar-dark">
        <div class="container">

            <!-- navbar-brand -->
            <a class="navbar-brand fw-bold" href="#">PIPELINE DIGITAL</a>

            <!-- btn toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPipeline">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- menu -->
            <div class="collapse navbar-collapse" id="navbarPipeline">
                <ul class="navbar-nav ms-auto text-center gap-2 gap-lg-3 w-100 justify-content-end align-items-center">
                    <li class="nav-item w-100-mobile"><a class="nav-link py-2" href="#sobre">Sobre</a></li>
                    <li class="nav-item w-100-mobile"><a class="nav-link py-2" href="#serviços">Serviços</a></li>
                    <li class="nav-item w-100-mobile"><a class="nav-link py-2" href="#portfolio">Portfólio</a></li>
                    <li class="nav-item w-100-mobile"><a class="nav-link py-2" href="#depoimentos">Depoimentos</a></li>

                    <!-- blog com seu submenu -->
                    <li class="nav-item dropdown w-100-mobile text-center">
                        <a class="nav-link dropdown-toggle py-2" href="#" id="blogDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Blog
                        </a>
                        <ul class="dropdown-menu custom-dropdown mx-auto" aria-labelledby="blogDropdown">
                            <li><a class="dropdown-item" href="#">Artigos</a></li>
                            <li><a class="dropdown-item" href="#">Materiais Ricos</a></li>
                        </ul>
                    </li>
                    
                    <!-- cta -->
                    <li class="nav-item w-100-mobile mt-3 mt-lg-0 mb-2 mb-lg-0">
                        <a class="nav-link btn-nav-accent text-center mx-auto" href="#contato"
                            data-analytics="nav-click-orcamento">
                            Solicitar Orçamento
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>

<main id="conteudo-principal">