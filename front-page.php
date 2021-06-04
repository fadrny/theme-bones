<?php
get_header();
?>

<div class="carousel">
    <img src="<?php echo get_theme_mod('carousel_background',
        get_template_directory_uri() . "/library/images/bg.jpg")?>" class="main-photo">
    <div class="over-carousel <?php echo get_theme_mod('carousel_over')?>">
        <div class="over-carousel-wrapper">
            <img src="<?php echo get_template_directory_uri()?>/library/images/MariaMontessori_sm.png" class="MariaImage"/>
            <div class="texts">
                <h3 class="citat"><?php echo get_theme_mod('carousel_citation',
                        '„Pomoz mi, abych myslel sám a byl sám sebou“')?></h3>
                <p class="name"><?php echo get_theme_mod('carousel_citation-name',
                        '- Maria Montessori')?></p>
            </div>
        </div>
    </div>
</div>
<div class="arguments">
    <div class="inCategory-wrap arguments-wrap">
        <div class="category-name-wrap">
            <h1 id="arguments-name"><?php echo get_theme_mod('arguments_name',
                    'Základní pilíře Montessori')?></h1>
        </div>
        <div class="arguments-container">
            <div class="single-argument">
                <img src="<?php echo get_template_directory_uri()?>/library/images/znak.svg" alt="znak">
                <div class="argument-texts">
                    <a href="<?php echo get_theme_mod('pilir1-odkaz', '#')?>" class="argument-nadpisek"><?php echo get_theme_mod('pilir1-citat',
                            '“Za své vzdělání nese odpovědnost každý sám”')?></a>
                    <p class="argument-textik" ><?php echo get_theme_mod('pilir1-textik',
                            'Aenean id metus id velit ullamcorper pulvinar. Curabitur bibendum justo non orci')?></p>
                </div>
            </div>
            <div class="single-argument"  >
                <img src="<?php echo get_template_directory_uri()?>/library/images/znak.svg" alt="znak">
                <div class="argument-texts">
                    <a href="<?php echo get_theme_mod('pilir2-odkaz', '#')?>" class="argument-nadpisek"><?php echo get_theme_mod('pilir2-citat',
                            '“Za své vzdělání nese odpovědnost každý sám”')?></a>
                    <p class="argument-textik" ><?php echo get_theme_mod('pilir2-textik',
                            'Aenean id metus id velit ullamcorper pulvinar. Curabitur bibendum justo non orci')?></p>
                </div>
            </div>
            <div class="single-argument">
                <img src="<?php echo get_template_directory_uri()?>/library/images/znak.svg" alt="znak">
                <div class="argument-texts">
                    <a href="<?php echo get_theme_mod('pilir3-odkaz', '#')?>" class="argument-nadpisek"><?php echo get_theme_mod('pilir3-citat',
                            '“Za své vzdělání nese odpovědnost každý sám”')?></a>
                    <p class="argument-textik" ><?php echo get_theme_mod('pilir3-textik',
                            'Aenean id metus id velit ullamcorper pulvinar. Curabitur bibendum justo non orci')?></p>
                </div>
            </div>
            <div class="single-argument">
                <img src="<?php echo get_template_directory_uri()?>/library/images/znak.svg" alt="znak">
                <div class="argument-texts">
                    <a href="<?php echo get_theme_mod('pilir4-odkaz', '#')?>" class="argument-nadpisek"><?php echo get_theme_mod('pilir4-citat',
                            '“Za své vzdělání nese odpovědnost každý sám”')?></a>
                    <p class="argument-textik" ><?php echo get_theme_mod('pilir4-textik',
                            'Aenean id metus id velit ullamcorper pulvinar. Curabitur bibendum justo non orci')?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="links">
    <div class="inCategory-wrap links-wrap">
        <div class="category-name-wrap">
            <h1 id="links-name">Důležité odkazy</h1>
        </div>
        <div class="links-icons">
            <a class="one-link" href="<?php echo get_theme_mod('link-onclick1', '#')?>">
                <div class="img_wrap">
                    <img src="<?php echo get_template_directory_uri()?>/library/images/arguments/contacts.svg"/>
                </div>
                <div class="one-link-text">
                    <h3><?php echo get_theme_mod('link-displayText1',
                            'Kontakty')?></h3>
                </div>
            </a>
            <a class="one-link" href="<?php echo get_theme_mod('link-onclick2', '#')?>">
                <div class="img_wrap">
                    <img src="<?php echo get_template_directory_uri()?>/library/images/arguments/group.svg"/>
                </div>
                <div class="one-link-text">
                    <h3><?php echo get_theme_mod('link-displayText2',
                            'Kdo jsme')?></h3>
                </div>
            </a>
            <a class="one-link" href="<?php echo get_theme_mod('link-onclick3', '#')?>">
                <div class="img_wrap">
                    <img src="<?php echo get_template_directory_uri()?>/library/images/arguments/bricks.svg"/>
                </div>
                <div class="one-link-text">
                    <h3><?php echo get_theme_mod('link-displayText3',
                            'Naše škola')?></h3>
                </div>
            </a>
            <a class="one-link" href="<?php echo get_theme_mod('link-onclick4', '#')?>">
                <div class="img_wrap">
                    <img src="<?php echo get_template_directory_uri()?>/library/images/arguments/vision.svg"/>
                </div>
                <div class="one-link-text">
                    <h3><?php echo get_theme_mod('link-displayText4',
                            'Víze školy')?></h3>
                </div>
            </a>
            <a class="one-link" href="<?php echo get_theme_mod('link-onclick5', '#')?>">
                <div class="img_wrap">
                    <img src="<?php echo get_template_directory_uri()?>/library/images/arguments/on_school.svg"/>
                </div>
                <div class="one-link-text">
                    <h3><?php echo get_theme_mod('link-displayText5',
                            'Výuka na škole')?></h3>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="aktuality">
    <div class="inCategory-wrap aktuality-wrap">
        <div class="category-name-wrap">
            <h1 id="links-name"><?php echo get_theme_mod('aktuality_name', 'Aktuality')?></h1>
        </div>
        <div class="aktuality-bounding-box">

            <?php
            $args = array( 'numberposts' => '3' );
            $recent_posts = wp_get_recent_posts( $args );

            foreach( $recent_posts as $recent ){
                echo '<div class="one-aktualita">
                <div class="main-texts">
                    <p class="aktualita-date">'. date_format(date_create($recent["post_date_gmt"]),"j. n. Y") .'</p>
                    <a href="' . get_permalink($recent["ID"]) .'" class="aktualita-name">
                        '.esc_attr($recent["post_title"]).'
                    </a>
                </div>
                <div class="cist-vice-wrapper">
                    <p class="aktualita-text">
                        ' . $recent["post_excerpt"] . '
                    </p>
                    <a href="' . get_permalink($recent["ID"]) .'" class="cist-vice">Číst více</a>
                </div>
            </div>';
            }
            ?>
<!--            <div class="one-aktualita">-->
<!--                <div class="main-texts">-->
<!--                    <p class="aktualita-date">28.4.2021</p>-->
<!--                    <a href="#" class="aktualita-name">-->
<!--                        Druhý docela krátký nadpisek-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="cist-vice-wrapper">-->
<!--                    <p class="aktualita-text">-->
<!--                        Etiam egestas wisi a erat. Integer tempor. Vestibulum erat nulla, ullamcorper nec,-->
<!--                        rutrum non, nonummy ac, erat. Ut tempus purus at lorem. Donec ipsum massa, ullamcorper in,-->
<!--                        auctor et, scelerisque sed, est. Praesent vitae arcu tempor neque lacinia pretium.-->
<!--                        Nullam dapibus fermentum ipsum. In convallis. Quisque tincidunt scelerisque libero.-->
<!--                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit-->
<!--                        rutrum non, nonummy ac, erat. Ut tempus purus at lorem. Donec ipsum massa, ullamcorper in,-->
<!--                        auctor et, scelerisque sed, est. Praesent vitae arcu tempor neque lacinia pretium.-->
<!--                        Nullam dapibus fermentum ipsum. In convallis. Quisque tincidunt scelerisque libero.-->
<!--                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit.-->
<!--                    </p>-->
<!--                    <a href="#" class="cist-vice">Číst více</a>-->
<!--                </div>-->
<!--            </div>-->
        </div>
        <a href="/archiv" class="show-all-btn-wrap">
            <h4 class="show-all-btn">zobrazit vše</h4>
        </a>
    </div>
</div>
<div class="fotogalerie">
    <div class="inCategory-wrap fotogalerie-wrap">
        <div class="category-name-wrap">
            <h1 id="links-name">Fotogalerie</h1>
        </div>

        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide" >
                        <img src="<?php echo get_theme_mod('gallery_image1',
                            get_template_directory_uri() . "/library/images/gallery/photo1.jpg")?>"/>
                    </li>
                    <li class="splide__slide" >
                        <img src="<?php echo get_theme_mod('gallery_image2',
                            get_template_directory_uri() . "/library/images/gallery/photo2.jpg")?>"/>
                    </li>
                    <li class="splide__slide" >
                        <img src="<?php echo get_theme_mod('gallery_image3',
                            get_template_directory_uri() . "/library/images/gallery/photo3.jpg")?>"/>
                    </li>
                    <li class="splide__slide" >
                        <img src="<?php echo get_theme_mod('gallery_image4',
                            get_template_directory_uri() . "/library/images/gallery/photo4.jpg")?>"/>
                    </li>
                    <li class="splide__slide" >
                        <img src="<?php echo get_theme_mod('gallery_image5',
                            get_template_directory_uri() . "/library/images/gallery/photo5.jpg")?>"/>
                    </li>
                    <li class="splide__slide" >
                        <img src="<?php echo get_theme_mod('gallery_image6',
                            get_template_directory_uri() . "/library/images/gallery/photo6.jpg")?>"/>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
<div class="calendar">
    <div class="inCategory-wrap calendar-wrap">
        <div class="category-name-wrap">
            <h1 id="links-name"><?php echo get_theme_mod('calendar_name',
                    'Plánované akce')?></h1>
        </div>
        <div class="events">
            <div class="first-event-wrapper">
                <div class="single-event">
                    <div class="date-square">
                        <p class="letters-of-month">JUN</p>
                        <h2 class="number-of-day">7</h2>
                    </div>
                    <div class="event-popisek">
                        <p class="exact-date">June 7 @ 9:00 am</p>
                        <h4 class="name">Prohlídka městské knihovny</h4>
                    </div>
                </div>
                <div class="single-event">
                    <div class="date-square">
                        <p class="letters-of-month">JUN</p>
                        <h2 class="number-of-day">16</h2>
                    </div>
                    <div class="event-popisek">
                        <p class="exact-date">June  16 @ 13:00 pm - June  16 @ 18:00 pm</p>
                        <h4 class="name">Fakticky hodně dlouhý název, spousta slov</h4>
                    </div>
                </div>
            </div>
            <div class="second-event-wrapper">
                <div class="single-event">
                    <div class="date-square">
                        <p class="letters-of-month">JUN</p>
                        <h2 class="number-of-day">7</h2>
                    </div>
                    <div class="event-popisek">
                        <p class="exact-date">June 7 @ 9:00 am</p>
                        <h4 class="name">Fakticky hodně dlouhý název, spousta slov</h4>
                    </div>
                </div>
                <div class="single-event">
                    <div class="date-square">
                        <p class="letters-of-month">JUN</p>
                        <h2 class="number-of-day">7</h2>
                    </div>
                    <div class="event-popisek">
                        <p class="exact-date">June 7 @ 9:00 am</p>
                        <h4 class="name">Prohlídka městské knihovny</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="separator">

</div>
<div class="partners">
    <div class="inCategory-wrap partners-wrap">
        <div class="category-name-wrap">
            <h1 id="links-name"><?php echo get_theme_mod('partners_name',
                    'Naši partneři')?></h1>
        </div>
        <div class="partners-logos-container">
            <a href="<?php echo get_theme_mod('partners-link1','#')?>" class="partner-wrap">
                <img src="<?php echo get_theme_mod('partners-logo1',
                    get_template_directory_uri() . "/library/images/logos/jednoLogo.png")?>" class="partner-logo">
            </a>
            <a href="<?php echo get_theme_mod('partners-link2','#')?>" class="partner-wrap">
                <img src="<?php echo get_theme_mod('partners-logo2',
                    get_template_directory_uri() . "/library/images/logos/druhyLogo.png")?>" class="partner-logo">
            </a>
            <a href="<?php echo get_theme_mod('partners-link3','#')?>" class="partner-wrap">
                <img src="<?php echo get_theme_mod('partners-logo3',
                    get_template_directory_uri() . "/library/images/logos/tretiLogo.png")?>" class="partner-logo">
            </a>
        </div>
    </div>
</div>

<?php
get_footer();
?>
