<?php
/**
 * The template for displaying single blog posts
 *
 * @package The_Golden_Glow
 */

get_header();
?>

<div id="content" class="blog-wrapper blog-single page-wrapper">
    <div class="container mx-auto px-[5%] py-12">
        <div class="grid lg:grid-cols-12 gap-8">

            <!-- Main Content -->
            <div class="lg:col-span-9">
                <?php
                while (have_posts()) :
                    the_post();
                ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="article-inner">

                            <!-- Entry Header -->
                            <header class="entry-header">
                                <div class="entry-header-text entry-header-text-top text-center mb-8">

                                    <!-- Category -->
                                    <h6 class="entry-category is-xsmall uppercase text-xs text-primary mb-4">
                                        <?php
                                        $categories = get_the_category();
                                        if (!empty($categories)) {
                                            echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '" class="hover:text-secondary transition-colors">' . esc_html($categories[0]->name) . '</a>';
                                        }
                                        ?>
                                    </h6>

                                    <!-- Title -->
                                    <h1 class="entry-title font-heading text-3xl md:text-4xl lg:text-5xl text-secondary mb-6">
                                        <?php the_title(); ?>
                                    </h1>

                                    <!-- Divider -->
                                    <div class="entry-divider is-divider small mx-auto my-6"></div>

                                    <!-- Meta -->
                                    <div class="entry-meta uppercase is-xsmall text-xs text-gray-500 space-x-2">
                                        <span class="posted-on">
                                            Posted on
                                            <a href="<?php the_permalink(); ?>" rel="bookmark" class="hover:text-primary transition-colors">
                                                <time class="entry-date published" datetime="<?php echo get_the_date('c'); ?>">
                                                    <?php echo get_the_date('d/m/Y'); ?>
                                                </time>
                                            </a>
                                        </span>
                                        <span class="byline">
                                            by
                                            <span class="meta-author vcard">
                                                <a class="url fn n hover:text-primary transition-colors" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                                                    <?php the_author(); ?>
                                                </a>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </header>

                            <!-- Entry Content -->
                            <div class="entry-content single-page">
                                <?php
                                the_content();

                                wp_link_pages(array(
                                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'the_golden_glow'),
                                    'after'  => '</div>',
                                ));
                                ?>
                            </div>

                            <!-- Social Share -->
                            <div class="blog-share text-center mt-12">
                                <div class="is-divider medium mx-auto mb-6"></div>
                                <div class="social-icons share-icons flex justify-center gap-3">
                                    <!-- WhatsApp -->
                                    <a href="whatsapp://send?text=<?php echo urlencode(get_the_title() . ' - ' . get_permalink()); ?>"
                                       class="icon button circle is-outline inline-flex items-center justify-center w-10 h-10 rounded-full border-2 border-gray-300 text-gray-600 hover:border-primary hover:text-primary transition-colors"
                                       title="Share on WhatsApp">
                                        <span class="sr-only">WhatsApp</span>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                                    </a>

                                    <!-- Facebook -->
                                    <a href="//www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"
                                       onclick="window.open(this.href,'','width=500,height=500,top=300px,left=300px'); return false;"
                                       class="icon button circle is-outline inline-flex items-center justify-center w-10 h-10 rounded-full border-2 border-gray-300 text-gray-600 hover:border-primary hover:text-primary transition-colors"
                                       title="Share on Facebook">
                                        <span class="sr-only">Facebook</span>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                    </a>

                                    <!-- Twitter -->
                                    <a href="//twitter.com/share?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>"
                                       onclick="window.open(this.href,'','width=500,height=500,top=300px,left=300px'); return false;"
                                       class="icon button circle is-outline inline-flex items-center justify-center w-10 h-10 rounded-full border-2 border-gray-300 text-gray-600 hover:border-primary hover:text-primary transition-colors"
                                       title="Share on Twitter">
                                        <span class="sr-only">Twitter</span>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                                    </a>

                                    <!-- Email -->
                                    <a href="mailto:?subject=<?php echo urlencode(get_the_title()); ?>&body=<?php echo urlencode('Check this out: ' . get_permalink()); ?>"
                                       class="icon button circle is-outline inline-flex items-center justify-center w-10 h-10 rounded-full border-2 border-gray-300 text-gray-600 hover:border-primary hover:text-primary transition-colors"
                                       title="Share via Email">
                                        <span class="sr-only">Email</span>
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </article>

                    <?php
                    // Comments template
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;

                endwhile;
                ?>
            </div>

            <!-- Sidebar -->
            <aside class="lg:col-span-3">
                <div id="secondary" class="widget-area" role="complementary">
                    <?php dynamic_sidebar('blog-sidebar'); ?>
                </div>
            </aside>

        </div>
    </div>
</div>

<?php
get_footer();
