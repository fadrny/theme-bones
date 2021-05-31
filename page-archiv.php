<?php
/*
 Template Name: Archiv
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<div id="content">

    <div id="inner-content" class="wrap cf">

        <main id="main" class="m-all aktuality" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

            <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

            <div class="aktuality-wrap"

                 <div class="aktuality-bounding-box">
                    <?php

                    $btpgid=get_queried_object_id();
                    $btmetanm=get_post_meta( $btpgid, 'WP_Catid','true' );
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    $args = array( 'posts_per_page' => 5, 'category_name' => $btmetanm,
                    'paged' => $paged,'post_type' => 'post' );
                    $postslist = new WP_Query( $args );

                    if ( $postslist->have_posts() ) :
                    while ( $postslist->have_posts() ) : $postslist->the_post();


                    echo '<div class="one-aktualita">
                                <div class="main-texts">
                                    <p class="aktualita-date">'. date_format(date_create(get_the_date()),"j. n. Y") .'</p>
                                    <a href="' . get_permalink(get_the_ID()) .'" class="aktualita-name">
                                        '.get_the_title().'
                                    </a>
                                </div>
                                <div class="cist-vice-wrapper">
                                    <p class="aktualita-text">' . get_the_excerpt() . '</p>
                                    <a href="' . get_permalink(get_the_ID()) .'" class="cist-vice">Číst více</a>
                                </div>
                            </div>';

                    endwhile;

                    echo '<div class="ovladani_stranek"><div class="novejsi_stranky tlacitko">';
                    previous_posts_link( 'Načíst novější' );
                    echo '</div><div class="starsi_stranky tlacitko">';
                    next_posts_link( 'Načíst starší', $postslist->max_num_pages );
                    echo '</div></div>';
                    wp_reset_postdata();
                    endif;

                    ?>
                     </div>

            </div>

        </main>

    </div>

</div>

<?php get_footer(); ?>
