
<?php
$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
$args = array(
    'post_type' => 'post', 
    'posts_per_page' => 12,
    'paged' =>  $paged
);

$wp_query = new WP_Query( $args );
if ( $wp_query->have_posts() ):
    $posts_array = $wp_query->get_posts();
?>


<div class="sm:grid lg:grid-cols-3 sm:grid-cols-2 gap-[30px] mt-[70px]">
    
    <?php foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
        <a href="<?php the_permalink() ?>">
            <div class="rounded-lg border border-neutral-200 my-10 sm:my-0">
                <?php if (has_post_thumbnail()): ?>
                <div class="rounded-t-lg h-[240px] bg-center bg-no-repeat bg-cover" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
                <?php else: ?>
                <div class="rounded-t-lg h-[240px] bg-neutral-100 flex items-center justify-center">
                    <div class="h-10 w-[130px]" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/logo.svg' ?>)"></div>
                </div>
                <?php endif; ?>
                <div class="mt-2 p-4">
                    <div class="flex items-center gap-x-2">
                    <?php foreach (get_the_category() as $category) {
                        echo '<div class="py-1 px-2 font-medium text-sm leading-5 text-neutral-700 rounded-lg border border-neutral-200 w-fit">' . $category->name . '</div>';
                    } ?>
                    </div>

                    
                        <div class="my-4 text-lg text-neutral-800 leading-[27px] font-semibold h-[54px] line-clamp-2"><?php the_title() ?></div>

                    <div class="font-medium text-neutral-600 text-sm"><?php echo get_the_date('l, F j, Y') ?></div>
                </div>
            </div>
        </a>
    <?php endforeach; wp_reset_postdata(); endif; ?>
</div>



<div class="pagination flex items-center gap-x-1 mt-[60px]">
    <?php
    // Pagination links.
    $big = 999999999; // Need an unlikely integer.
    echo paginate_links( array(
        'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'  => '?paged=%#%',
        'current' => max( 1, $paged ),
        'total'   => $wp_query->max_num_pages // Calculate total number of pages.
    ) );
    ?>
</div>



<!-- var_dump($posts_array->max_num_pages); -->