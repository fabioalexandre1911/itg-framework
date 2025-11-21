<main class="sfwp-main">

    <header class="sfwp-admin-header">
        <h1 class="sfwp-admin-header__title">Framework</h1>
        <?php settings_errors(); ?>
    </header>

    <nav class="sfwp-admin-tabs">
        <ul class="sfwp-admin-tabs__list">
            <li class="sfwp-admin-tabs__list-item active" admin-tab-target="social">Redes Sociais</li>
            <li class="sfwp-admin-tabs__list-item" admin-tab-target="address">Endereço</li>
            <li class="sfwp-admin-tabs__list-item" admin-tab-target="custom">Customizações</li>
            <li class="sfwp-admin-tabs__list-item" admin-tab-target="custom">Configurações</li>
        </ul>
    </nav>

    <section class="sfwp-admin-content">
        <div class="sfwp-admin-content__tabs">
            <form action="options.php" method="post" class="sfwp-admin-content__tabs-item active" admin-tab-container="social">
                <?php settings_fields('sfwp-settings-group') ?>
                <?php do_settings_sections('sfwp_options') ?>
                <?php submit_button(); ?>
            </form>
            <form action="options.php" method="post" class="sfwp-admin-content__tabs-item" admin-tab-container="address">
                <?php settings_fields('sfwp-address-group') ?>
                <?php do_settings_sections('sfwp_address') ?>
                <?php submit_button(); ?>
            </form>
        </div>
    </section>

</main>