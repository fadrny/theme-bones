<?php

function carousel_customizer_function($wp_customize)
{
    $wp_customize->add_panel('monte-customize', array(
        'title' => 'Montessori úpravy',
        'priority' => 10,
        'capability' => 'edit_theme_options'
    ));

    //<editor-fold desc="Carousel">
    $wp_customize->add_section('carousel', array(
        'title' => 'Vrchní obrázek s citací',
        'description' => __('Nastavení vrchního panelu'),
        'panel' => 'monte-customize'
    ));
    $wp_customize->add_setting('carousel_citation', array(
        'default' => __('„Pomoz mi, abych myslel sám a byl sám sebou“')
    ));
    $wp_customize->add_control('carousel_citation', array(
        'label' => 'Velká citace',
        'section' => 'carousel',
        'priority' => 10,
        'type' => 'textarea'
    ));
    $wp_customize->add_setting('carousel_citation-name', array(
        'default' => __('„-Maria Montessori“')
    ));
    $wp_customize->add_control('carousel_citation-name', array(
        'label' => 'Jméno citovaného',
        'section' => 'carousel',
        'priority' => 11,
        'type' => 'text'
    ));
    $wp_customize->add_setting('carousel_background', array(
        'default' => get_template_directory_uri() . "/library/images/bg.jpg"
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'carousel_background', array(
            'label' => 'Obrázek na pozadí',
            'section' => 'carousel',
            'priority' => 12
        ))
    );
    //</editor-fold>

    //<editor-fold desc="Arguments">

    $wp_customize->add_section('arguments', array(
        'title' => 'Základní pilíře Montessori',
        'description' => __('Nastavení sekce Základní pilíře Montessori'),
        'panel' => 'monte-customize'
    ));


    $wp_customize->add_setting('arguments_name', array(
        'default' => __('Základní pilíře Montessori')
    ));
    $wp_customize->add_control('arguments_name', array(
        'section' => 'arguments',
        'label' => 'Základní pilíře Montessori nadpis',
        'priority' => 10,
    ));

    //argument 1

    $wp_customize->add_setting('pilir1-citat', array(
        'default' => __('“Za své vzdělání nese odpovědnost každý sám”')
    ));
    $wp_customize->add_control('pilir1-citat', array(
        'section' => 'arguments',
        'label' => 'Argument 1',
        'priority' => 15,
    ));
    $wp_customize->add_setting('pilir1-textik', array(
        'default' => __('Aenean id metus id velit ullamcorper pulvinar. Curabitur bibendum justo non orci')
    ));
    $wp_customize->add_control('pilir1-textik', array(
        'section' => 'arguments',
        'priority' => 20,
        'type' => 'textarea'
    ));
    $wp_customize->add_setting('pilir1-odkaz', array(
        'default' => __('#')
    ));
    $wp_customize->add_control('pilir1-odkaz', array(
        'section' => 'arguments',
        'priority' => 22
    ));

    //argument 2

    $wp_customize->add_setting('pilir2-citat', array(
        'default' => __('“Za své vzdělání nese odpovědnost každý sám”')
    ));
    $wp_customize->add_control('pilir2-citat', array(
        'section' => 'arguments',
        'label' => 'Argument 2',
        'priority' => 25,
    ));
    $wp_customize->add_setting('pilir2-textik', array(
        'default' => __('Aenean id metus id velit ullamcorper pulvinar. Curabitur bibendum justo non orci')
    ));
    $wp_customize->add_control('pilir2-textik', array(
        'section' => 'arguments',
        'priority' => 30,
        'type' => 'textarea'
    ));
    $wp_customize->add_setting('pilir2-odkaz', array(
        'default' => __('#')
    ));
    $wp_customize->add_control('pilir2-odkaz', array(
        'section' => 'arguments',
        'priority' => 32
    ));

    //argument 3

    $wp_customize->add_setting('pilir3-citat', array(
        'default' => __('“Za své vzdělání nese odpovědnost každý sám”')
    ));
    $wp_customize->add_control('pilir3-citat', array(
        'section' => 'arguments',
        'label' => 'Argument 3',
        'priority' => 35,
    ));
    $wp_customize->add_setting('pilir3-textik', array(
        'default' => __('Aenean id metus id velit ullamcorper pulvinar. Curabitur bibendum justo non orci')
    ));
    $wp_customize->add_control('pilir3-textik', array(
        'section' => 'arguments',
        'priority' => 40,
        'type' => 'textarea'
    ));
    $wp_customize->add_setting('pilir3-odkaz', array(
        'default' => __('#')
    ));
    $wp_customize->add_control('pilir3-odkaz', array(
        'section' => 'arguments',
        'priority' => 42
    ));

    //argument 4

    $wp_customize->add_setting('pilir4-citat', array(
        'default' => __('“Za své vzdělání nese odpovědnost každý sám”')
    ));
    $wp_customize->add_control('pilir4-citat', array(
        'section' => 'arguments',
        'label' => 'Argument 4',
        'priority' => 45,
    ));
    $wp_customize->add_setting('pilir4-textik', array(
        'default' => __('Aenean id metus id velit ullamcorper pulvinar. Curabitur bibendum justo non orci')
    ));
    $wp_customize->add_control('pilir4-textik', array(
        'section' => 'arguments',
        'priority' => 50,
        'type' => 'textarea'
    ));
    $wp_customize->add_setting('pilir4-odkaz', array(
        'default' => __('#')
    ));
    $wp_customize->add_control('pilir4-odkaz', array(
        'section' => 'arguments',
        'priority' => 52
    ));

    //</editor-fold>

    //<editor-fold desc="Links">

    $wp_customize->add_section('links', array(
        'title' => 'Důležité odkazy',
        'description' => __('Nastavení sekce Důležité odkazy'),
        'panel' => 'monte-customize'
    ));


    $wp_customize->add_setting('links_name', array(
        'default' => __('Důležité odkazy')
    ));
    $wp_customize->add_control('links_name', array(
        'section' => 'links',
        'label' => 'Nadpis sekece důležité odkazy',
        'priority' => 10,
    ));

    //odkaz 1

    $wp_customize->add_setting('link-displayText1', array(
        'default' => __('kontakty')
    ));
    $wp_customize->add_control('link-displayText1', array(
        'section' => 'links',
        'label' => 'Kontakty',
        'priority' => 15,
    ));

    $wp_customize->add_setting('link-onclick1', array(
        'default' => __('#')
    ));
    $wp_customize->add_control('link-onclick1', array(
        'section' => 'links',
        'priority' => 20,
    ));

    //odkaz 2

    $wp_customize->add_setting('link-displayText2', array(
        'default' => __('Kdo jsme')
    ));
    $wp_customize->add_control('link-displayText2', array(
        'section' => 'links',
        'label' => 'Kdo jsme',
        'priority' => 25,
    ));

    $wp_customize->add_setting('link-onclick2', array(
        'default' => __('#')
    ));
    $wp_customize->add_control('link-onclick2', array(
        'section' => 'links',
        'priority' => 30,
    ));

    //odkaz 3

    $wp_customize->add_setting('link-displayText3', array(
        'default' => __('Naše škola')
    ));
    $wp_customize->add_control('link-displayText3', array(
        'section' => 'links',
        'label' => 'Naše škola',
        'priority' => 35,
    ));

    $wp_customize->add_setting('link-onclick3', array(
        'default' => __('#')
    ));
    $wp_customize->add_control('link-onclick3', array(
        'section' => 'links',
        'priority' => 40,
    ));

    //odkaz 4

    $wp_customize->add_setting('link-displayText4', array(
        'default' => __('Vize školy')
    ));
    $wp_customize->add_control('link-displayText4', array(
        'section' => 'links',
        'label' => 'Vize školy',
        'priority' => 45,
    ));

    $wp_customize->add_setting('link-onclick4', array(
        'default' => __('#')
    ));
    $wp_customize->add_control('link-onclick4', array(
        'section' => 'links',
        'priority' => 50,
    ));

    //odkaz 5

    $wp_customize->add_setting('link-displayText5', array(
        'default' => __('Výuka na škole')
    ));
    $wp_customize->add_control('link-displayText5', array(
        'section' => 'links',
        'label' => 'Výuka na škole',
        'priority' => 55,
    ));

    $wp_customize->add_setting('link-onclick5', array(
        'default' => __('#')
    ));
    $wp_customize->add_control('link-onclick5', array(
        'section' => 'links',
        'priority' => 60,
    ));

    //</editor-fold>

    //<editor-fold desc="Aktuality">
    $wp_customize->add_section('aktuality', array(
        'title' => 'Aktuality',
        'description' => __('Nastavení sekce Aktuality'),
        'panel' => 'monte-customize'
    ));


    $wp_customize->add_setting('aktuality_name', array(
        'default' => __('Aktuality')
    ));
    $wp_customize->add_control('aktuality_name', array(
        'section' => 'aktuality',
        'label' => 'Sekce Aktuality nadpis',
        'priority' => 10,
    ));
    //</editor-fold>

    //<editor-fold desc="Gallery">
    $wp_customize->add_section('gallery', array(
        'title' => 'Galerie',
        'description' => __('Nastavení Galerie'),
        'panel' => 'monte-customize'
    ));

    //Image 1

    $wp_customize->add_setting('gallery_image1', array(
        'default' => get_template_directory_uri() . "/library/images/gallery/photo1.jpg"
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gallery_image1', array(
            'label' => 'Obrázek #1',
            'section' => 'gallery',
            'priority' => 10
        ))
    );

    //Image 2

    $wp_customize->add_setting('gallery_image2', array(
        'default' => get_template_directory_uri() . "/library/images/gallery/photo2.jpg"
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gallery_image2', array(
            'label' => 'Obrázek #2',
            'section' => 'gallery',
            'priority' => 15
        ))
    );

    //Image 3

    $wp_customize->add_setting('gallery_image3', array(
        'default' => get_template_directory_uri() . "/library/images/gallery/photo3.jpg"
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gallery_image3', array(
            'label' => 'Obrázek #3',
            'section' => 'gallery',
            'priority' => 20
        ))
    );

    //Image 4

    $wp_customize->add_setting('gallery_image4', array(
        'default' => get_template_directory_uri() . "/library/images/gallery/photo4.jpg"
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gallery_image4', array(
            'label' => 'Obrázek #4',
            'section' => 'gallery',
            'priority' => 25
        ))
    );

    //Image 5

    $wp_customize->add_setting('gallery_image5', array(
        'default' => get_template_directory_uri() . "/library/images/gallery/photo5.jpg"
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gallery_image5', array(
            'label' => 'Obrázek #5',
            'section' => 'gallery',
            'priority' => 30
        ))
    );

    //Image 6

    $wp_customize->add_setting('gallery_image6', array(
        'default' => get_template_directory_uri() . "/library/images/gallery/photo6.jpg"
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'gallery_image6', array(
            'label' => 'Obrázek #6',
            'section' => 'gallery',
            'priority' => 35
        ))
    );
    //</editor-fold>

    //<editor-fold desc="Calendar">

    $wp_customize->add_section('calendar', array(
        'title' => 'Kalendář',
        'description' => __('Nastavení sekce Kalendář'),
        'panel' => 'monte-customize'
    ));
    $wp_customize->add_setting('calendar_name', array(
        'default' => __('Plánované akce')
    ));
    $wp_customize->add_control('calendar_name', array(
        'label' => 'Kalendář nadpis',
        'section' => 'calendar',
        'priority' => 10,
    ));

    //</editor-fold>

    //<editor-fold desc="Partners">
    $wp_customize->add_section('partners', array(
        'title' => 'Partneři',
        'description' => __('Nastavení Partneři'),
        'panel' => 'monte-customize'
    ));

    $wp_customize->add_setting('partners_name', array(
        'default' => __('Naši partneři')
    ));
    $wp_customize->add_control('partners_name', array(
        'section' => 'partners',
        'priority' => 5,
    ));

    //Image 1

    $wp_customize->add_setting('partners-logo1', array(
        'default' => get_template_directory_uri() . "/library/images/logos/jednoLogo.png"
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'partners-logo1', array(
            'label' => 'Logo #1',
            'section' => 'partners',
            'priority' => 10
        ))
    );

    $wp_customize->add_setting('partners-link1', array(
        'default' => __('#')
    ));
    $wp_customize->add_control('partners-link1', array(
        'section' => 'partners',
        'priority' => 15,
    ));

    //Image 2

    $wp_customize->add_setting('partners-logo2', array(
        'default' => get_template_directory_uri() . "/library/images/logos/druhyLogo.png"
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'partners-logo2', array(
            'label' => 'Logo #2',
            'section' => 'partners',
            'priority' => 20
        ))
    );

    $wp_customize->add_setting('partners-link2', array(
        'default' => __('#')
    ));
    $wp_customize->add_control('partners-link2', array(
        'section' => 'partners',
        'priority' => 25,
    ));

    //Image 3

    $wp_customize->add_setting('partners-logo3', array(
        'default' => get_template_directory_uri() . "/library/images/logos/tretiLogo.png"
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'partners-logo3', array(
            'label' => 'Logo #3',
            'section' => 'partners',
            'priority' => 30
        ))
    );

    $wp_customize->add_setting('partners-link3', array(
        'default' => __('#')
    ));
    $wp_customize->add_control('partners-link3', array(
        'section' => 'partners',
        'priority' => 35,
    ));
    //</editor-fold>

    //<editor-fold desc="Links">

    //</editor-fold>
}

add_action('customize_register', 'carousel_customizer_function');