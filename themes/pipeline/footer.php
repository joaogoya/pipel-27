</main>

<button id="btnScrollTop" title="Voltar ao Topo"><i class="fas fa-chevron-up"></i></button>

<footer class="bg-dark text-white pt-5 pb-4 position-relative">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4">
                <a class="navbar-brand fw-bold fs-3 d-block mb-3" href="#">PIPELINE DIGITAL</a>
                <p class="small opacity-75 pe-lg-5">
                    Sua paixão merece os resultados que você merece. Especialistas em visibilidade local e performance
                    no pipeline das oportunidades.
                </p>
                <div class="social-nav-footer d-flex gap-3 mt-4">
                    <a href="#" class="social-icon-circle"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon-circle"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" class="social-icon-circle"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social-icon-circle"><i class="fas fa-envelope"></i></a>
                </div>
            </div>

            <div class="col-lg-2">
                <h5 class="fw-bold mb-4 text-accent">Serviços</h5>
                <ul class="list-unstyled footer-links">
                    <li><a href="#">SEO Local</a></li>
                    <li><a href="#">Google Ads</a></li>
                    <li><a href="#">Perfil de Empresa</a></li>
                    <li><a href="#">Landing Pages</a></li>
                    <li><a href="#">Auditoria Grátis</a></li>
                </ul>
            </div>

            <div class="col-lg-6">
                <h5 class="fw-bold mb-4 text-accent">Últimas do Blog</h5>
                <div class="row g-3">

                    <?php
                    $args = array(
                        'post_type'      => 'post', // Tipo de post (post, page, ou custom post type)
                        'posts_per_page' => 4,      // Quantidade de posts (-1 para todos)
                        'orderby'        => 'date', // Critério de ordenação
                        'order'          => 'DESC', // Ordem decrescente (do mais recente para o mais antigo)
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                    ?>
                            <div class="col-md-6">
                                <a href="#" class="blog-footer-card d-flex align-items-center text-decoration-none">
                                    <div class="blog-thumb">
                                        
                                            <!-- img -->
                        <?php echo pipe_get_img(get_the_ID(), true, 'thumbnail', 'img-fluid'); ?>
                                    </div>
                                    <div class="blog-info ms-3">
                                        <h6 class="mb-0 text-white small fw-bold">
                                            <?php the_title(); ?>
                                        </h6>
                                    </div>
                                </a>
                            </div>
                    <?php
                        endwhile;
                        wp_reset_postdata(); // Restaura os dados originais do post
                    else:
                        echo 'Nenhum post encontrado.';
                    endif;
                    ?>


           
                </div>
                <a href="#" class="btn btn-outline-light btn-sm mt-4 w-100 fw-bold border-opacity-25"
                    data-analytics="footer-btn-blog">VISITAR BLOG COMPLETO</a>
            </div>
        </div>

        <hr class="mt-5 opacity-10">

        <div class="row align-items-center pt-3">
            <div class="col-md-6 text-center text-md-start">
                <p class="small opacity-50 mb-0">&copy; 2026 Pipeline Digital - Todos os direitos reservados.</p>
            </div>
            <div class="col-md-6 text-center text-md-end mt-2 mt-md-0">
                <p class="small opacity-50 mb-0">Feito com foco em Performance Local <i
                        class="fas fa-bolt text-accent"></i></p>
            </div>
        </div>
    </div>
</footer>

<button id="btnScrollTop" title="Voltar ao topo"><i class="fas fa-arrow-up"></i></button>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Pipeline Digital",
        "url": "https://pipelinedigital.com.br",
        "description": "Especialistas em visibilidade local e marketing estratégico no Google em Porto Alegre.",
        "about": ["SEO", "Google Ads", "GPE", "Landing Pages"]
    }
</script>

<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/telas/main.js"></script> -->

<?php wp_footer(); ?>
</body>

</html>