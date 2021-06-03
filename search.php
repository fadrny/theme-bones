<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all     " role="main">
						<h1 class="archive-title"><span>Výsledky vyhledávání:</span> <?php echo esc_attr(get_search_query()); ?></h1>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

								<header class="entry-header article-header">

									<h3 class="search-title entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                  						<p class="byline entry-meta vcard">
                                            <?php echo(
                                                /* the time the post was published */
                                                '<span>Publikováno:
                                                <time class="updated entry-time" datetime="' . get_the_time('j. n. Y') . '" itemprop="datePublished">' . get_the_time('j. n. Y') . '</time></span>'); ?>
                  						</p>

								</header>

								<section class="entry-content">
										<?php the_excerpt( '<span class="read-more">' . 'číst více &raquo;' . '</span>' ); ?>

								</section>

								<footer class="article-footer">

                                    <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Hashtagy:') . '</span> ', ', ', '</p>' ); ?>

								</footer>

							</article>

						<?php endwhile; ?>

								<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Jejda, žádné výsledky', 'bonestheme' ); ?></h1>
                                            <p><?php _e( 'Zkus použít jiný výraz...', 'bonestheme' ); ?></p>
										</header>
									</article>

							<?php endif; ?>

						</main>

					</div>

			</div>

<?php get_footer(); ?>
