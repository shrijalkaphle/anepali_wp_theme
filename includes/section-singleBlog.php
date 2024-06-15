<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="container mt-[60px] lg:px-[20%]">

    <div class="flex items-center gap-x-2">
        <?php
            foreach (get_the_category() as $category) {
                echo '<div class="py-1 px-2 font-medium text-sm leading-5 text-neutral-700 rounded-lg border border-neutral-200 w-fit">' . $category->name . '</div>';
            }
        ?>
    </div>

    <div class="my-6 title">
        <?php the_title() ?>
    </div>

    <div class="text-neutral-500">
        <?php echo get_the_date('l, F j, Y') ?>
    </div>

    <div class="my-[50px] text-lg text-neutral-700 content">
        <?php the_content() ?>
    </div>

    <!-- author -->
    <div class="flex items-center">
        <div class="flex-grow">
            <div class="flex gap-x-2">
                <img src="<?php echo get_avatar_url(get_the_author_email()) ?>" alt="" class="h-10 w-10 rounded-full">
                <div>
                <span class="font-semibold text-[15px] text-neutral-900 block leading-5"><?php echo get_the_author_meta('first_name') ?> <?php echo get_the_author_meta('last_name') ?></span>
                <span class=" text-sm text-neutral-600 block leading-5"><?php echo get_author_name() ?></span>
                </div>
            </div>
        </div>
        <div>
            
            <div class="flex gap-x-2 items-center">
                <div class="text-sm font-semibold text-neutral-600">Share</div>
                <button class="h-9 w-9 bg-neutral-50 rounded-lg border border-neutral-200 flex items-center justify-center" onclick='shareToFacebook("<?php the_permalink() ?>")'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M15.2343 0.250058H4.74328C4.1485 0.250008 3.55963 0.367518 3.01083 0.595768C2.46203 0.824018 1.96423 1.15847 1.54628 1.57972C1.12833 2.00096 0.798561 2.50062 0.576101 3.04972C0.353641 3.59881 0.242921 4.18641 0.250351 4.77843V15.2216C0.242921 15.8136 0.353641 16.4012 0.576101 16.9503C0.798561 17.4994 1.12833 17.9991 1.54628 18.4203C1.96423 18.8416 2.46203 19.176 3.01083 19.4043C3.55963 19.6325 4.1485 19.75 4.74328 19.75H9.5058V12.7841H7.68614C7.57294 12.7841 7.46437 12.7394 7.38433 12.6597C7.30428 12.58 7.25931 12.4719 7.25931 12.3593V10.123C7.25931 10.0074 7.30546 9.8965 7.38762 9.8147C7.46977 9.7329 7.58119 9.687 7.69737 9.687H9.5058V7.50663C9.4555 6.99188 9.5186 6.4724 9.6907 5.98442C9.8628 5.49644 10.1398 5.05171 10.5023 4.68124C10.8648 4.31078 11.3042 4.0235 11.7897 3.83945C12.2753 3.6554 12.7953 3.579 13.3135 3.61559H15.1669C15.2239 3.61557 15.2803 3.62692 15.3328 3.64896C15.3854 3.67101 15.4329 3.70331 15.4727 3.74396C15.5125 3.7846 15.5437 3.83277 15.5645 3.88562C15.5853 3.93847 15.5952 3.99492 15.5937 4.05165V5.94127C15.5937 6.05395 15.5487 6.16202 15.4687 6.24171C15.3886 6.32139 15.2801 6.36615 15.1669 6.36615H14.0436C12.8081 6.36615 12.5722 6.94757 12.5722 7.79734V9.6758H15.268C15.3291 9.6752 15.3896 9.6878 15.4454 9.7125C15.5012 9.7373 15.551 9.7737 15.5915 9.8193C15.632 9.8649 15.6621 9.9186 15.6799 9.9768C15.6978 10.0349 15.7028 10.0963 15.6948 10.1566L15.4252 12.3928C15.4141 12.4976 15.3642 12.5945 15.2854 12.6647C15.2065 12.735 15.1042 12.7735 14.9984 12.773H12.5834V19.7388H15.2567C15.8515 19.7389 16.4404 19.6214 16.9892 19.3931C17.538 19.1649 18.0358 18.8304 18.4537 18.4092C18.8717 17.9879 19.2014 17.4883 19.4239 16.9392C19.6464 16.3901 19.7571 15.8025 19.7496 15.2104V4.77843C19.7571 4.18452 19.6457 3.59508 19.4218 3.04451C19.198 2.49395 18.8662 1.99328 18.4458 1.57173C18.0255 1.15019 17.525 0.816198 16.9736 0.589278C16.4222 0.362358 15.8309 0.247038 15.2343 0.250058Z" fill="#737373"/>
                    </svg>
                </button>
                <button class="h-9 w-9 bg-neutral-50 rounded-lg border border-neutral-200 flex items-center justify-center" onclick='shareToTwitter("<?php the_permalink() ?>")'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M8.77977 6.91016L16.4598 17.0202H15.2698L7.50977 6.91016H8.77977Z" fill="#737373"/>
                        <path d="M17 2H7C5.67392 2 4.40215 2.52678 3.46447 3.46447C2.52678 4.40215 2 5.67392 2 7V17C2 18.3261 2.52678 19.5979 3.46447 20.5355C4.40215 21.4732 5.67392 22 7 22H17C18.3261 22 19.5979 21.4732 20.5355 20.5355C21.4732 19.5979 22 18.3261 22 17V7C22 5.67392 21.4732 4.40215 20.5355 3.46447C19.5979 2.52678 18.3261 2 17 2ZM14.68 18.3L11.3 13.9L7.42 18.3H5.28L10.28 12.59L5 5.7H9.43L12.49 9.7L16 5.7H18.14L13.48 11L19 18.3H14.68Z" fill="#737373"/>
                    </svg>
                </button>
                <button class="h-9 w-9 bg-neutral-50 rounded-lg border border-neutral-200 flex items-center justify-center" onclick='shareToLinkedin("<?php the_permalink() ?>")'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M17.303 2.25H6.69698C5.51757 2.25 4.38647 2.71852 3.5525 3.55249C2.71853 4.38646 2.25 5.51757 2.25 6.69698V17.303C2.25 18.4824 2.71853 19.6135 3.5525 20.4475C4.38647 21.2815 5.51757 21.75 6.69698 21.75H17.303C18.4824 21.75 19.6136 21.2815 20.4475 20.4475C21.2815 19.6135 21.75 18.4824 21.75 17.303V6.69698C21.75 5.51757 21.2815 4.38646 20.4475 3.55249C19.6136 2.71852 18.4824 2.25 17.303 2.25ZM8.84265 17.9923C8.84568 18.0467 8.83757 18.1011 8.81882 18.1523C8.80007 18.2035 8.77106 18.2502 8.73359 18.2898C8.69612 18.3293 8.65097 18.3608 8.6009 18.3823C8.55084 18.4038 8.49691 18.4149 8.44243 18.4148H6.66363C6.55647 18.4119 6.45468 18.3673 6.37992 18.2904C6.30517 18.2136 6.26336 18.1106 6.2634 18.0034V10.5992C6.26191 10.5457 6.27118 10.4925 6.29063 10.4426C6.31007 10.3928 6.3393 10.3473 6.37662 10.309C6.41393 10.2706 6.45857 10.2402 6.50787 10.2193C6.55716 10.1985 6.61012 10.1878 6.66363 10.1879H8.44243C8.49593 10.1878 8.54889 10.1985 8.59819 10.2193C8.64749 10.2402 8.69212 10.2706 8.72944 10.309C8.76675 10.3473 8.796 10.3928 8.81544 10.4426C8.83489 10.4925 8.84414 10.5457 8.84265 10.5992V17.9923ZM7.51968 8.63141C7.22991 8.62922 6.94729 8.54129 6.70743 8.37871C6.46757 8.21613 6.2812 7.98618 6.17183 7.71784C6.06246 7.4495 6.03499 7.15479 6.09286 6.87086C6.15073 6.58693 6.29137 6.32649 6.49704 6.12236C6.70271 5.91824 6.9642 5.77957 7.24856 5.72385C7.53292 5.66812 7.82742 5.69782 8.09492 5.80921C8.36242 5.9206 8.59096 6.10869 8.75173 6.34978C8.91249 6.59086 8.99829 6.87414 8.9983 7.16391C8.9983 7.35757 8.95998 7.54931 8.88554 7.72808C8.8111 7.90685 8.702 8.06913 8.56455 8.20554C8.4271 8.34196 8.26401 8.44982 8.08467 8.52291C7.90534 8.59601 7.71332 8.63288 7.51968 8.63141ZM18.3369 17.9812C18.337 18.0825 18.2975 18.1798 18.2269 18.2525C18.1564 18.3251 18.0602 18.3674 17.959 18.3703H16.0801C15.9788 18.3674 15.8827 18.3251 15.8121 18.2525C15.7415 18.1798 15.7021 18.0825 15.7021 17.9812V14.557C15.7021 14.0456 15.8578 12.3335 14.3458 12.3335C13.1673 12.3335 12.9339 13.5342 12.8894 14.0678V18.059C12.8894 18.1603 12.85 18.2576 12.7794 18.3303C12.7088 18.403 12.6127 18.4452 12.5114 18.4481H10.6882C10.6371 18.4481 10.5865 18.4381 10.5392 18.4185C10.492 18.3989 10.4491 18.3703 10.413 18.3342C10.3769 18.298 10.3482 18.2551 10.3287 18.2079C10.3091 18.1607 10.299 18.1101 10.299 18.059V10.5658C10.3019 10.4646 10.3442 10.3685 10.4169 10.2979C10.4895 10.2273 10.5869 10.1878 10.6882 10.1879H12.5114C12.6127 10.1878 12.71 10.2273 12.7827 10.2979C12.8554 10.3685 12.8976 10.4646 12.9005 10.5658V11.2107C13.1667 10.8212 13.5341 10.5119 13.9632 10.316C14.3922 10.12 14.8666 10.045 15.3352 10.0989C18.3703 10.0989 18.3592 12.9339 18.3592 14.5459L18.3369 17.9812Z" fill="#737373"/>
                    </svg>
                </button>

            </div>
        </div>
    </div>
</div>

<?php endwhile; else: endif; ?>

<!-- explore more -->
<?php
    $args = array(
        'post_type' => 'post', 
        'posts_per_page' => 3,
        'post__not_in' => [get_the_ID()],
        'paged' =>  1
    );

    $wp_query = new WP_Query( $args );
    if( $wp_query->have_posts() ): $posts_array = $wp_query->get_posts();
?>

<div class="container my-[70px]">
    <div class="title">Explore more articles</div>
    
    <div class="sm:grid lg:grid-cols-3 sm:grid-cols-2 gap-[30px] mt-[40px]">
    
    <?php foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
        <a href="<?php the_permalink() ?>">
            <div class="rounded-lg border border-neutral-200 my-[30px] sm:my-0">
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
    <?php endforeach; wp_reset_postdata();?>
    </div>

    <!-- load more -->
    <?php if($wp_query->max_num_pages > 1): ?>
    <div class="text-center w-full mt-[60px]">
        <a href="/" class="bg-neutral-50 border border-neutral-200 px-4 py-2 rounded-lg hover:bg-neutral-100">Read more </a>
    </div>
    <?php endif; ?>
</div>

    
</div>
<?php endif; ?>

<script>
    function shareToFacebook(url) {
        window.open('https://www.facebook.com/sharer/sharer.php?u=' + url, 'facebook-share-dialog', 'width=626,height=436');
    }

    function shareToTwitter(url) {

        window.open('https://x.com/intent/tweet?text=Enter your text here%0A%0A&url=' + url, 'twitter-share-dialog', 'width=626,height=436');
    }

    function shareToLinkedin(url) {

        window.open('https://www.linkedin.com/sharing/share-offsite/?url=' + url, 'linkedin-share-dialog', 'width=626,height=436');
    }
</script>