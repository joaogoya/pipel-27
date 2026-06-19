<?php get_header(); ?>

<section class="blog-brand-list py-5">
    <div class="container">
        <br><br>
        <div class="text-center mb-5">
            <h6 class="text-red fw-bold text-uppercase mb-2" style="letter-spacing: 2px;">Blog</h6>
            <h2 class="display-4 fw-bold text-dark title-impact">
                DICAS DO <span class="text-red">ESPECIALISTA </span>
            </h2>
        </div>24swetfvyn 
        <hr><br>

        <div class="row g-4">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-12">
                <article class="post-card-horizontal">
                    <div class="row g-0 align-items-center">

                        <div class="col-md-4">
                            <a 
                                href="<?php the_permalink(); ?>" 
                                class="post-img-link"
                                data-analytics="link-post-na-listagem-de-posts"
                                aria-label="Visite o post clicando na imagem"
                            >
                                <?php if ( has_post_thumbnail() ) : ?>
                                       <?php echo pipe_get_img(get_the_ID(), true, 'medium', 'img-fluid post-thumb'); ?>
                                <?php else : ?>
                                <img src="path/to/placeholder.jpg" class="img-fluid post-thumb" alt="POA Car Service">
                                <?php endif; ?>
                            </a>
                        </div>

                        <div class="col-md-8">
                            <div class="card-body p-4">
                                <header class="entry-header mb-2">
                                    <time class="text-red fw-bold small text-uppercase"
                                        datetime="<?php echo get_the_date('c'); ?>">
                                        <?php echo get_the_date(); ?>
                                    </time>
                                    <h3 class="entry-title h4 mt-1">
                                        <a 
                                            href="<?php the_permalink(); ?>"
                                            class="text-decoration-none text-dark"
                                            data-analytics="link-thumb-na-listagem-de-posts"
                                            aria-label="Visite o post"
                                        >
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                </header>

                                <div class="entry-excerpt text-muted mb-3">
                                    <?php echo wp_trim_words(get_the_excerpt(), 25); ?>
                                </div>

                                <a 
                                    href="<?php the_permalink(); ?>" 
                                    class="btn-read-more"
                                    data-analytics="link-leia-mais-na-listagem-de-posts"
                                    aria-label="Visite o post"
                                >
                                    Ler Artigo <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </article>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>