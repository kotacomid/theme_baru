<?php
/**
 * Template untuk menampilkan konten Halaman (Pages).
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
    <div class="max-w-screen-xl mx-auto p-4 md:py-12">
        <?php
        // The Loop: Bagian ini mengambil dan menampilkan konten halaman Anda.
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('prose dark:prose-invert max-w-none'); ?>>
                
                <header class="entry-header mb-8">
                    <?php the_title( '<h1 class="entry-title text-4xl font-extrabold text-gray-900 dark:text-white">', '</h1>' ); ?>
                </header>

                <div class="entry-content">
                    <?php
                    // Fungsi ini yang memuat semua konten dari editor (termasuk Greenshift).
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