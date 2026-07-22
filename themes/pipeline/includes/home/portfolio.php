<section id="sucesso-dos-clientes" class="section-padding py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8">
                <div class="title-elaborado-col">
                    <span class="subtitle-tag">Nossa melhor métrica é o</span>
                    <h2 class="display-5 fw-bold">Sucesso dos <span class="text-accent">Clientes.</span></h2>
                </div>
            </div>
            <div class="col-lg-4 d-flex align-items-end justify-content-lg-end mt-3 mt-lg-0">
                <p class="small text-muted mb-0">Transformando visibilidade em faturamento real para negócios locais.
                </p>
            </div>
        </div>

        <div class="portfolio-masonry">

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
                    <div class="portfolio-item item-medium">

                        <!-- img -->
                        <?php echo pipe_get_img(get_the_ID(), true, 'medium', 'img-fluid'); ?>

                        <div class="portfolio-overlay">
                            <div class="overlay-content">

                                <?php
                                    $primary_category = get_post_primary_category(get_the_ID());
                                ?>
                                <span class="client-category">
                                   <b>Cliente:</b> <?PHP echo $primary_category->name; ?>
                                </span>
                                <h4 class="fw-bold">
                                    <?php the_title(); ?>
                                </h4>
                                <a href="#" class="btn-case-detail" data-analytics="portfolio-click-alexandre">Ver Case <i
                                        class="fas fa-external-link-alt ms-2"></i></a>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
                wp_reset_postdata(); // Restaura os dados originais do post
            else:
                echo 'Nenhum post encontrado.';
            endif;
            ?>

        </div>
    </div>
</section>