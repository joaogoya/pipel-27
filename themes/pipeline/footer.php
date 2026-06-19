</main>
<footer class="bg-black text-white py-5 border-top border-danger border-4">
    <div class="container pt-4">
        <div class="row g-5 align-items-start">

            <div class="col-lg-4">
                <div class="logo-navbar me-2">
                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo03.png" class="img-fluid"
                        alt="Manutenção Mecânica POA Car Service" title="POA Car Service - Especialistas em Manutenção"> -->

                    <?php
                    $img_id = pipe_get_img_id_by_slug('logo-rantengular-poa-car-service-fundo-transparente');

                    if ($img_id) {
                        echo pipe_get_img($img_id, false, 'medium', 'img-fluid');
                    }
                    ?>
                </div>
                <p class="text-white-50 mb-4">
                    A <strong>POA Car Service</strong> é referência em Porto Alegre para quem busca tecnologia de
                    diagnóstico e transparência total. Nossa missão é garantir a sua segurança e a performance do
                    seu motor.
                </p>

                <div class="social-nav-footer d-flex gap-4">
                    <a data-analytics="bt-instagram-socialBar-footer" title="Ir para o Instagram"
                        href="https://www.instagram.com/poacarservice/" target="_blank" rel="noopener"
                        class="social-icon-only" aria-label="Ir para o Instagram da POA Car Service">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a data-analytics="bt-google-maps-socialBar-footer" title="Ir para o Google Meu Negócio"
                        href="https://share.google/v83ggvgllRneTxbzi" target="_blank" rel="noopener"
                        class="social-icon-only" aria-label="Ir para o Google Meu Negócio da POA Car Service">
                        <i class="fa-brands fa-google" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 text-center">
                <h5 class="text-white fw-bold mb-4 title-impact">Excelência Certificada</h5>
                <div class="mb-3">
                    <?php
                    $img_id = pipe_get_img_id_by_slug('certificado-oficina-amiga-da-mulher');

                    if ($img_id) {
                        echo pipe_get_img($img_id, false, 'medium', 'certificado-oam img-fluid rounded shadow-lg border border-2 border-white-50');
                    }
                    ?>
                </div>
                <p class="text-white-50 small px-xl-5">
                    Somos certificados como <strong>Oficina Amiga da Mulher</strong>, garantindo um atendimento
                    ético, respeitoso e transparente para todas as motoristas.
                </p>
            </div>

            <div class="col-lg-4 text-start">
                <h5 class="text-white fw-bold mb-4 title-impact">Dicas Técnicas</h5>

                <?php
                // 1. Configuração da Query (Últimos 3 posts)
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 3,
                    'no_found_rows'  => true, // Melhora a performance se não precisar de paginação
                );

                $footer_blog_query = new WP_Query($args);

                // 2. O Loop
                if ($footer_blog_query->have_posts()) :
                    while ($footer_blog_query->have_posts()) : $footer_blog_query->the_post(); ?>

                        <div class="d-flex align-items-center mb-3 blog-mini-post">
                            <div class="flex-shrink-0">
                                <a
                                     href="<?php the_permalink(); ?>"
                                     aria-label="Visite o post clicando na imagem"
                                     data-analytics="link-p-post-rodape"
                                >
                                    <?php if (has_post_thumbnail()) : ?>                                        
                                        <?php echo pipe_get_img(get_the_ID(), true, 'thumbnail', 'img-fluid post-thumb'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-blog.jpg"
                                            alt="Blog" class="img-fluid rounded shadow-sm" width="80">
                                    <?php endif; ?>
                                </a>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <a
                                    href="<?php the_permalink(); ?>" 
                                    class="text-white text-decoration-none fw-bold small-title"
                                    aria-label="Visite o post clicando no título"
                                     data-analytics="link-p-post-rodape"
                                >
                                    <?php the_title(); ?>
                                </a>
                            </div>
                        </div>

                <?php endwhile;
                    // 3. SEMPRE resetar o post data após uma WP_Query personalizada
                    wp_reset_postdata();
                endif; ?>

                <div class="text-start">
                    <a
                        href="<?php echo get_permalink(get_option('page_for_posts')); ?>"
                        class="btn btn-footer-blog fw-bold text-uppercase px-4"
                        aria-label="Visite a lista de posts"
                        data-analytics="link-p-postlist-rodape"
                    >
                        Veja todos os posts
                    </a>
                </div>
            </div>
        </div>

        <hr class="mt-5 border-secondary opacity-25">

        <div class="row align-items-center pb-4">
            <div class="col-md-6 text-center text-md-start">
                <p class="text-white-50 small mb-0">&copy; 2026 POA Car Service - Porto Alegre/RS.</p>
            </div>
            <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                <p class="text-white-50 small mb-0">Estratégia Digital por <span class="text-white fw-bold">Pulso
                        Comercial</span></p>
            </div>
        </div>
    </div>
    <button 
        id="backToTop"
        class="btn-back-to-top"
        aria-label="Voltar para o início da página."
        data-analytics="btn-footer-voltar-topo"
    >
       <i class="fa-solid fa-angles-up" aria-hidden="true"></i>
    </button>
</footer>

<?php wp_footer(); ?>
</body>
</html>