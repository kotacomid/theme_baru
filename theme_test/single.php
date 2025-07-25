<?php
/**
 * Template untuk menampilkan konten Postingan tunggal (Single Post).
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
    <div class="max-w-screen-xl mx-auto p-4 md:py-12">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('prose dark:prose-invert max-w-none'); ?>>
                
                <header class="entry-header mb-8">
                    <?php the_title( '<h1 class="entry-title text-4xl font-extrabold text-gray-900 dark:text-white mb-4">', '</h1>' ); ?>
                    <div class="text-gray-500 dark:text-gray-400">
                        <time datetime="<?php echo get_the_date( 'c' ); ?>">
                            Dipublikasikan pada <?php echo get_the_date(); ?>
                        </time>
                    </div>
                </header>
                
                <?php if ( has_post_thumbnail() ) : ?>
                    <figure class="post-thumbnail mb-8 not-prose">
                        <?php the_post_thumbnail('full', ['class' => 'w-full h-auto rounded-lg shadow-md']); ?>
                    </figure>
                <?php endif; ?>

                <div class="entry-content">
                    <?php
                    // Fungsi ini yang memuat semua konten dari editor.
                    the_content();
                    ?>
                </div>

            </article>
            <?php
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>