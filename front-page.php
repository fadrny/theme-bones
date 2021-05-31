<?php
get_header();
?>

<div class="carousel">
    <img src="<?php echo get_theme_mod('carousel_background',
        get_template_directory_uri() . "/library/images/bg.jpg")?>" class="main-photo">
    <div class="over-carousel">
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
            <h1 id="arguments-name"><?php echo get_theme_mod('arguments-name',
                    'Základní pilíře Montessori')?></h1>
        </div>
        <div class="arguments-container">
            <div class="single-argument">
                <img src="<?php echo get_template_directory_uri()?>/library/images/znak.svg" alt="znak">
                <div class="argument-texts">
                    <h3 class="argument-nadpisek"><?php echo get_theme_mod('pilir1-citat',
                            '“Za své vzdělání nese odpovědnost každý sám”')?></h3>
                    <p class="argument-textik" ><?php echo get_theme_mod('pilir1-textik',
                            'Aenean id metus id velit ullamcorper pulvinar. Curabitur bibendum justo non orci')?></p>
                </div>
            </div>
            <div class="single-argument">
                <img src="<?php echo get_template_directory_uri()?>/library/images/znak.svg" alt="znak">
                <div class="argument-texts">
                    <h3 class="argument-nadpisek"><?php echo get_theme_mod('pilir2-citat',
                            '“Za své vzdělání nese odpovědnost každý sám”')?></h3>
                    <p class="argument-textik" ><?php echo get_theme_mod('pilir2-textik',
                            'Aenean id metus id velit ullamcorper pulvinar. Curabitur bibendum justo non orci')?></p>
                </div>
            </div>
            <div class="single-argument">
                <img src="<?php echo get_template_directory_uri()?>/library/images/znak.svg" alt="znak">
                <div class="argument-texts">
                    <h3 class="argument-nadpisek"><?php echo get_theme_mod('pilir3-citat',
                            '“Za své vzdělání nese odpovědnost každý sám”')?></h3>
                    <p class="argument-textik" ><?php echo get_theme_mod('pilir3-textik',
                            'Aenean id metus id velit ullamcorper pulvinar. Curabitur bibendum justo non orci')?></p>
                </div>
            </div>
            <div class="single-argument">
                <img src="<?php echo get_template_directory_uri()?>/library/images/znak.svg" alt="znak">
                <div class="argument-texts">
                    <h3 class="argument-nadpisek"><?php echo get_theme_mod('pilir4-citat',
                            '“Za své vzdělání nese odpovědnost každý sám”')?></h3>
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
            <a class="one-link" href="#">
                <div class="img_wrap">
                    <img src="<?php echo get_template_directory_uri()?>/library/images/arguments/contacts.svg"/>
                </div>
                <div class="one-link-text">
                    <h3>kontakty</h3>
                </div>
            </a>
            <a class="one-link" href="#">
                <div class="img_wrap">
                    <img src="<?php echo get_template_directory_uri()?>/library/images/arguments/group.svg"/>
                </div>
                <div class="one-link-text">
                    <h3>kdo jsme</h3>
                </div>
            </a>
            <a class="one-link" href="#">
                <div class="img_wrap">
                    <img src="<?php echo get_template_directory_uri()?>/library/images/arguments/bricks.svg"/>
                </div>
                <div class="one-link-text">
                    <h3>naše škola</h3>
                </div>
            </a>
            <a class="one-link" href="#">
                <div class="img_wrap">
                    <img src="<?php echo get_template_directory_uri()?>/library/images/arguments/vision.svg"/>
                </div>
                <div class="one-link-text">
                    <h3>vize školy</h3>
                </div>
            </a>
            <a class="one-link" href="#">
                <div class="img_wrap">
                    <img src="<?php echo get_template_directory_uri()?>/library/images/arguments/on_school.svg"/>
                </div>
                <div class="one-link-text">
                    <h3>výuka na škole</h3>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="aktuality">
    <div class="inCategory-wrap aktuality-wrap">
        <div class="category-name-wrap">
            <h1 id="links-name">Aktuality</h1>
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
                        <img src="assets/photos/fotogalerie/pexels-gabby-k-5063465 (Small).jpg"/>
                    </li>
                    <li class="splide__slide" >
                        <img src="assets/photos/fotogalerie/pexels-ivan-samkov-6816531 (Small).jpg"/>
                    </li>
                    <li class="splide__slide" >
                        <img src="assets/photos/fotogalerie/pexels-katerina-holmes-5905520 (Small).jpg"/>
                    </li>
                    <li class="splide__slide" >
                        <img src="assets/photos/fotogalerie/pexels-max-fischer-5212669 (Small).jpg"/>
                    </li>
                    <li class="splide__slide" >
                        <img src="assets/photos/fotogalerie/pexels-meliani-driss-2982449 (Small).jpg"/>
                    </li>
                    <li class="splide__slide" >
                        <img src="assets/photos/fotogalerie/pexels-tima-miroshnichenko-5427671 (Small).jpg"/>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
<div class="calendar">
    <div class="inCategory-wrap calendar-wrap">
        <div class="category-name-wrap">
            <h1 id="links-name">Plánované akce</h1>
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
            <h1 id="links-name">Naši partneři</h1>
        </div>
        <div class="partners-logos-container">
            <a href="#" class="partner-wrap">
                <img src="assets/logos/tretiLogo.png" class="partner-logo">
            </a>
            <a href="#" class="partner-wrap">
                <img src="assets/logos/druhyLogo.png" class="partner-logo">
            </a>
            <a href="#" class="partner-wrap">
                <img src="assets/logos/jednoLogo.png" class="partner-logo">
            </a>
        </div>
    </div>
</div>

<?php
get_footer();
?>
