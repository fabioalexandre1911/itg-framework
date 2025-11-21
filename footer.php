<footer class="sfwp-footer sfwp-container">
    <div class="sfwp-container__center">
        <div class="sfwp-footer__contents">
            <nav class="sfwp-footer__navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                ));
                ?>
            </nav>
            <nav class="sfwp-footer__social">
                <ul class="sfwp-footer__social-menu">
                    <?php
                    $twitter = USER_TWITTER;
                    if (!empty($twitter)) :  ?>
                        <li class="sfwp-footer__social-menu-item">
                            <a href="<?= $twitter ?>" class="sfwp-footer__social-menu-item-link"><span class="fa fa-twitter"></span></a>
                        </li>
                    <?php endif; ?>
                    <?php
                    $facebook = USER_FACEBOOK;
                    if (!empty($facebook)) :  ?>
                        <li class="sfwp-footer__social-menu-item">
                            <a href="<?= $facebook ?>" class="sfwp-footer__social-menu-item-link"><span class="fa fa-facebook"></span></a>
                        </li>
                    <?php endif; ?>
                    <?php
                    $instagram = USER_INSTAGRAM;
                    if (!empty($instagram)) :  ?>
                        <li class="sfwp-footer__social-menu-item">
                            <a href="" class="sfwp-footer__social-menu-item-link"><span class="fa fa-instagram"></span></a>
                        </li>
                    <?php endif; ?>
                    <?php
                    $github = USER_GITHUB;
                    if (!empty($github)) :  ?>
                        <li class="sfwp-footer__social-menu-item">
                            <a href="" class="sfwp-footer__social-menu-item-link"><span class="fa fa-github"></span></a>
                        </li>
                    <?php endif; ?>
                    <?php
                    $youtube = USER_YOUTUBE;
                    if (!empty($youtube)) :  ?>
                        <li class="sfwp-footer__social-menu-item">
                            <a href="" class="sfwp-footer__social-menu-item-link"><span class="fa fa-youtube"></span></a>
                        </li>
                    <?php endif; ?>
                    <?php
                    $email = USER_EMAIL;
                    if (!empty($email)) :  ?>
                        <li class="sfwp-footer__social-menu-item">
                            <a href="" class="sfwp-footer__social-menu-item-link"><span class="fa fa-envelope"></span></a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
            <p class="sfwp-footer__copyright"><?= __('Todos os direitos reservados &copy;', THEME_TEXTDOMAIN); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>