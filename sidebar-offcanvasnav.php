<div class="navigation-inner">
    <a href="javascript:void(0);" class="logo">
        <img src="<? bloginfo("template_directory" ); ?>/img/logo-freestyle-blue.svg" alt="" />
    </a>
    <? wp_nav_menu(array(
        'container' => 'false',
        'menu' => 'Главное меню', // название меню


        'menu_class' => 'list-unstyled', // класс для меню
    )); ?>
    <div class="clearfix"></div>
</div>