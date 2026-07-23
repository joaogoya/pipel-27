<section id="servicos" class="section-padding bg-light-gray py-5 position-relative">
    <div class="container">

        <div class="title-elaborado-center mb-5">
            <span class="subtitle-tag d-block text-center">Mais do que tecnologia: um processo estruturado.</span>
            <h2 class="display-5 fw-bold text-center">
                Nosso <span class="text-accent">Pipeline</span> para você <span class="text-accent">Vender Mais</span>
            </h2>

            <?php
            // 1. Busca o objeto da página pelo slug (substitua 'minha-pagina' pelo seu slug)
            $pagina = get_page_by_path('servicos', OBJECT, 'page');
            $ps1 = '';
            $ps2 = '';

            if ($pagina) {

                // Conteúdo bruto da página (com os comentários de bloco do Gutenberg)
                $conteudo_raw = $pagina->post_content;

                // 2. Transforma o conteúdo em um array estruturado de blocos
                $blocos = parse_blocks($conteudo_raw);
            }

            if (!empty($blocos)) {
                foreach ($blocos as $bloco) {                    
                    // Se for o Título
                    if ($bloco['blockName'] === 'core/heading') {
                        // Renderiza o HTML do bloco e limpa as tags HTML
                        $texto_limpo = strip_tags(render_block($bloco));
                        $ps1 =  trim($texto_limpo);
                    }
                }
                foreach ($blocos as $bloco) {
                    if ($bloco['blockName'] === 'core/pullquote') {                        
                        $paragrafo_limpo = strip_tags(render_block($bloco));                       
                        $ps2 = trim($paragrafo_limpo);
                  }
                }
            }
            ?>
        </div>

        <div class="row g-4 mt-2">
            <div class="col-12">

            </div>
            <!--linha com os 4 cards -->
            <?php
            $args = array(
                'post_type'      => 'services',
                'posts_per_page' => 4,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            );

            $servicos_query = new WP_Query($args);

            if ($servicos_query->have_posts()) :
                while ($servicos_query->have_posts()) : $servicos_query->the_post(); ?>

            <div class="col-md-12 col-lg-6">
                <div class="pipeline-card">

                    <div class="pipeline-img-wrapper">

                        <!-- img -->
                        <?php echo pipe_get_img(get_the_ID(), true, 'medium', 'img-fluid'); ?>

                        <span class="pipeline-badge"> <?php echo get_field('badge'); ?></span>
                    </div>

                    <div class="pipeline-content">
                        <span class="pipeline-sub"> <?php echo get_field('subtitulo'); ?></span>
                        <h3 class="pipeline-title"> <?php the_title(); ?></h3>
                        <p class="pipeline-text">
                            <?php the_content(); ?>
                        </p>

                        <div class="pipeline-footer">
                            <!-- <a href="#" class="pipeline-btn">
                                <span>Saiba Mais</span>
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a> -->
                            <span class="pipeline-number">
                                <?php echo sprintf('%02d', ($servicos_query->post->menu_order + 1)) ; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <?php endwhile;
                wp_reset_postdata();
            else :
                echo 'Nenhum serviço encontrado.';
            endif;
            ?>
        </div>

        <br><br><br>


        <!-- CTA PÓS-SERVIÇOS (BANNER PREMIUM COM ESTRUTURA DE FASES) cta com lista -->











        <!-- CTA PÓS-SERVIÇOS (LAYOUT 2 COLUNAS VERTICAIS) -->
        <div class="col-12 mt-5">
            <div class="cta-box-services p-4 p-md-5 rounded-5 shadow-2 text-white position-relative overflow-hidden">

                <div class="row g-4 align-items-stretch position-relative z-2"">

                    <!-- COLUNA DA ESQUERDA: BADGE + TÍTULO + FASES EMPILHADAS -->
                    <div class="col-lg-7 cta-divider-right pe-lg-5">

                        <!-- Header da Esquerda -->
                        <div class="mb-4">
                            <span
                                class="badge bg-accent-soft text-accent px-3 py-2 rounded-pill fw-bold mb-3 d-inline-flex align-items-center gap-2"
                                style="font-size: 0.8rem;">
                                <i class="fa-solid fa-arrow-up-right-dots"></i> CRESCIMENTO PLANEJADO
                            </span>
                            <h3 class="display-6 fw-bold text-white mb-0">
                                Etapas do nosso <span class="text-accent">Pipeline</span>
                            </h3>
                        </div>

                        <!-- Fases Empilhadas (Fase 1 e Fase 2) -->
                        <div class="d-flex flex-column gap-3">

                            <!-- FASE 1 -->
                            <div class="phase-card p-3 rounded-4 bg-white-05 border border-white-10">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="phase-badge bg-white-20 text-white fw-bold px-2 py-1 rounded">FASE
                                        1</span>
                                    <strong class="text-white fs-6">Combater a Invisibilidade e tracionar</strong>
                                </div>

                                <div class="row g-2">
                                    <!-- Sub 01 -->
                                    <div class="col-sm-6">
                                        <div
                                            class="substep-item d-flex align-items-center gap-2 p-2 rounded-3 bg-white-05 h-100">
                                            <span class="substep-num">01</span>
                                            <div class="lh-sm">
                                                <span class="d-block text-white fw-semibold fs-7">Perfil de
                                                    Empresas</span>
                                                <small class="text-white-50" style="font-size: 0.75rem;">O básico para que buscadores e IAs encontrem você.</small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Sub 02 -->
                                    <div class="col-sm-6">
                                        <div
                                            class="substep-item d-flex align-items-center gap-2 p-2 rounded-3 bg-white-05 h-100">
                                            <span class="substep-num">02</span>
                                            <div class="lh-sm">
                                                <span class="d-block text-white fw-semibold fs-7">Tráfego Pago &
                                                    Captura</span>
                                                <small class="text-white-50" style="font-size: 0.75rem;">Volume e
                                                    recorrência de leads</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- FASE 2 -->
                            <div class="phase-card p-3 rounded-4 bg-white-05 border border-white-10">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <span class="phase-badge bg-white-20 text-white fw-bold px-2 py-1 rounded">FASE
                                        2</span>
                                    <strong class="text-white fs-6">Construir Autoridade</strong>
                                </div>

                                <div class="row g-2">
                                    <!-- Sub 03 -->
                                    <div class="col-sm-6">
                                        <div
                                            class="substep-item d-flex align-items-center gap-2 p-2 rounded-3 bg-white-05 h-100">
                                            <span class="substep-num">03</span>
                                            <div class="lh-sm">
                                                <span class="d-block text-white fw-semibold fs-7">Site
                                                    Institucional</span>
                                                <small class="text-white-50" style="font-size: 0.75rem;"> Profissionalismo e credibilidade.</small>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Sub 04 -->
                                    <div class="col-sm-6">
                                        <div
                                            class="substep-item d-flex align-items-center gap-2 p-2 rounded-3 bg-white-05 h-100">
                                            <span class="substep-num">04</span>
                                            <div class="lh-sm">
                                                <span class="d-block text-white fw-semibold fs-7">Exposição Orgânica
                                                    (SEO)</span>
                                                <small class="text-white-50" style="font-size: 0.75rem;">Posicionamento diferenciado para valorizar o seu trabalho</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- COLUNA DA DIREITA: TEXTO DE APOIO + BOTÃO CTA -->
                    <div class="col-lg-5 ps-lg-4 text-center text-lg-start d-flex flex-column justify-content-end">

                        <div class="cta-support-box p-4 rounded-4 bg-white-05 border border-white-10">

                            <div class="d-inline-flex align-items-center justify-content-center bg-accent-soft text-accent rounded-circle mb-3"
                                style="width: 45px; height: 45px;">
                                <!-- <i class="fa-solid fa-flag-checkered"></i> --><i class="fa-solid fa-award"></i>
                            </div>

                            <h4 class="fs-5 fw-bold text-white mb-2">
                                Em qual etapa estão seus desafios agora?
                            </h4>

                            <p class="text-white-50 fs-6 lh-base mb-4" style="font-size: 0.9rem !important;">
                                Fale com a gente para planejar suas ações e superar as etapas que faltam. Nosso trabalho é ajudar você a vender mais no Google.
                            </p>

                            <a href="https://wa.me/5551<?php echo get_afc_by_page_slug('whatsapp','home_config','informacoes-de-contato');?>"
                                target="_blank"
                                class="btn-pipeline-main btn-cta-block w-100 text-center py-3 px-4 rounded-4 fw-bold text-decoration-none d-block fs-6"
                                data-analytics="cta-click-services">
                                AVALIAR MEU MOMENTO <i class="fab fa-whatsapp ms-2 fs-5 align-middle"></i>
                            </a>

                            <small class="d-block text-center opacity-50 mt-3" style="font-size: 0.75rem;">
                                <i class="fas fa-shield-alt me-1"></i> PIPELINE DIGITAL
                            </small>

                        </div>

                    </div>

                </div>

            </div>
        </div>


























    </div>
</section>