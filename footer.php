<div class="footer">
    <div class="inCategory-wrap footer-wrap">
        <div class="cool-links">
            <div class="cool-links-nadpisek bobik-nadpisek">
                <h4>Důležité odkazy</h4>
            </div>
            <div class="cool-links-wrapper">
                <?php
                wp_nav_menu(
                    array(
                        'menu'=>'footer-links',
                        'container'=>'',
                        'theme_location'=>'footer-links',
                        'items_wrap' => '<div class="one-cool-link">%3$s</div>'
                    )
                )
                ?>
            </div>
        </div>
        <div class="kontakty">
            <div class="kontakty-nadpisek bobik-nadpisek">
                <h4>Kontakty</h4>
            </div>
            <div class="kontakty-wrapper">
                <div class="one-kontakt">
                    <img class="icon-image" src="<?php echo get_template_directory_uri()?>/library/images/icons/phone-call.png">
                    <p class="one-kontakt-text"><?php echo get_theme_mod('footer_contacts_phone',
                            '+420 123 456 789')?></p>
                </div>
                <div class="one-kontakt">
                    <img class="icon-image" src="<?php echo get_template_directory_uri()?>/library/images/icons/at.png">
                    <a href=mailto://"<?php echo get_theme_mod('footer_contacts_mail',
                        'info@zsmontepce.cz')?>" class="one-kontakt-text"><?php echo get_theme_mod('footer_contacts_mail',
                            'info@zsmontepce.cz')?></a>
                </div>
                <div class="one-kontakt">
                    <img class="icon-image" src="<?php echo get_template_directory_uri()?>/library/images/icons/place.png">
                    <p class="one-kontakt-text"><?php echo get_theme_mod('footer_contacts_address',
                            'Družstevní 305 <br> 530 09 Pardubice')?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
wp_footer();
?>
</body>
</html>

