<section id="servicos" class="section-padding bg-light-gray py-5 position-relative">
    <div class="container">

        <div class="title-elaborado-center mb-5">
            <span class="subtitle-tag d-block text-center">O que fazemos</span>
            <h2 class="display-5 fw-bold text-center">
                Estratégias para <span class="text-accent">Acelerar seu Pipeline</span> 
            </h2>
        </div>


        <div class="row g-4 mt-2">
            <!--linha com os 4 cards -->
            <?php
            $args = array(
                'post_type'      => 'services',
                'posts_per_page' => 4,
                'orderby'        => 'date',
                'order'          => 'DESC',
            );

            $servicos_query = new WP_Query($args);

            if ($servicos_query->have_posts()) :
                while ($servicos_query->have_posts()) : $servicos_query->the_post(); ?>

            <div class="col-md-6 col-lg-3">
                <div class="service-premium-card">

                    <!-- card img -->
                    <div class="card-img-box">

                        <!-- img -->
                        <?php echo pipe_get_img(get_the_ID(), true, 'medium', 'img-fluid'); ?>

                        <!-- imh badge -->
                        <span class="card-badge">
                            <?php echo get_field('badge');?>
                        </span>
                    </div>

                    <!-- card body -->
                    <div class="card-body-content">

                        <!-- badge titulo -->
                        <span class="card-pre-title">
                            <?php echo get_field('subtitulo');?>
                        </span>

                        <!-- tituo -->
                        <h3 class="h5 fw-bold mb-3">
                            <?php the_title(); ?>
                        </h3>

                        <!-- frase -->
                        <p class="small text-muted">
                           <?php the_content(); ?>
                        </p>

                        <!-- botao -->
                        <a href="#" class="btn-service-link" data-analytics="service-click-sites">

                            <span>Saiba Mais</span>
                            <div class="icon-circle">
                                <i class="fas fa-plus icon-plus"></i>
                                <i class="fas fa-chevron-right icon-arrow"></i>
                            </div>
                        </a>

                    </div><!-- fim card body -->
                </div><!-- fim service-premium-card -->
            </div> <!-- fim col -->

            <?php endwhile;
                wp_reset_postdata();
            else :
                echo 'Nenhum serviço encontrado.';
            endif;
        ?>

        </div>        
    </div>
</section>