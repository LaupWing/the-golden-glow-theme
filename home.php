<?php
/**
 * The template for displaying the blog home page
 *
 * @package The_Golden_Glow
 */

get_header();
?>

<div class="blog-archive-wrapper py-12 md:py-16 lg:py-20">
    <div class="container mx-auto px-[5%]">

        <!-- Page Title -->
        <div class="text-center mb-12">
            <h2 class="font-heading text-3xl md:text-4xl lg:text-5xl font-semibold text-secondary">
                The Golden Glow Blog
            </h2>
        </div>

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-[35px]">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    get_template_part('templates/blog-card-2', null, ['post_id' => get_the_ID()]);
                endwhile;
            else :
            ?>
                <p class="col-span-full text-center text-gray-500">
                    Geen blogposts gevonden.
                </p>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <?php
        if (have_posts()) :
            $pagination = paginate_links(array(
                'type' => 'array',
                'prev_text' => '&laquo; Vorige',
                'next_text' => 'Volgende &raquo;',
            ));

            if ($pagination) :
        ?>
                <nav class="pagination mt-12 flex justify-center gap-2" aria-label="Blog pagination">
                    <?php foreach ($pagination as $page) : ?>
                        <div class="page-item">
                            <?php echo $page; ?>
                        </div>
                    <?php endforeach; ?>
                </nav>
        <?php
            endif;
        endif;
        ?>

    </div>
</div>

<?php
get_footer();
