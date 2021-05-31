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


    $wp_customize->add_setting('arguments-name', array(
        'default' => __('Základní pilíře Montessori')
    ));
    $wp_customize->add_control('arguments-name', array(
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

    //</editor-fold>

    //<editor-fold desc="Links">

    //</editor-fold>
}

add_action('customize_register', 'carousel_customizer_function');