<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        Спортивно-оздоровительный комплекс "Фристайл"
    </title>

    <!-- Bootstrap -->
    <link href="<? bloginfo("template_directory" ); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
    <script src="http://api-maps.yandex.ru/1.1/index.xml" type="text/javascript"></script>

    <!-- CSS and Scripts -->
    <link href="<? bloginfo("template_directory" ); ?>/css/bootstrap_override.css" rel="stylesheet">

    <link href="<? bloginfo("template_directory" ); ?>/less/layout.min.css" rel="stylesheet">
    <link href="<? bloginfo("template_directory" ); ?>/plugins/sliderpro/slider-pro.min.css" rel="stylesheet">

    <link href="<? bloginfo("template_directory" ); ?>/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
    
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="<? bloginfo("template_directory" ); ?>/css/for-ie.css" />
	<![endif]-->

    <link rel="icon" type="image/png" href="<? bloginfo("template_directory" ); ?>/img/favicon.png" />
</head>
<body>
<div id="page-preloader"><span class="spinner"></span>
    <?
    $my_query = new WP_Query('cat=8&posts_per_page=1');
    //$args=array('category'=>8, 'numberposts'=>1); //проверяем наличие постов в категории
    //if($posts=get_posts($args))
    //{
    while ($my_query->have_posts()) : $my_query->the_post();
        //foreach ($posts as $post)
        //{

            ?>
            <div class="preloader-ad">
                <!-- TITLE -->
            <a href="<? the_permalink(); ?>"><h5><?  the_title(); ?></h5></a>

                <!-- END TITLE -->

            <? if($img=get_field(news_image))
            {
                ?>
                <!-- IMG -->
                <a href="<? the_permalink(); ?>">
                 <img src="<? echo $img[0][img][sizes][medium]; ?>">
                    </a>

                <!-- END IMG -->

                <?
            }
            if($preview=get_field(preview))
            { ?>

                <!-- TEXT -->
                <? echo $preview;
                ?>


                <!-- END TEXT -->
                <?
            } ?>
            </div>

                <?

        //}
    //}
    endwhile;
    wp_reset_postdata(); ?>
</div>
<button type="button" class="navbar-toggle js-show-offcanvas show-offcanvas">
    <span class="sr-only">Toggle navigation</span>
        <span class="pull-left">
            МЕНЮ
        </span>
        <span class="pull-right">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </span>
</button>
<div id="js-off-navigation" class="off-canvas-navi"><?php get_sidebar( 'offcanvasnav' ); ?>
</div>



<!--script type="text/javascript">
    $("#js-off-navigation").load("offcanvas-navigation.html");

	if ( $.browser.webkit ) {
    alert( "This is WebKit!" );
  }
  else {
	alert("fuck off");
  }
</script-->





<div class="parallax-background">
    <div class="parallax-window" data-parallax="scroll" data-speed="0.05" data-image-src="<? bloginfo("template_directory" ); ?>/img/sidebar-bg.png"></div>
</div>

<div class="container hcontainer complex-page">
    <div class="row hrow">
        <div class="max-width-container">
            <div id="js-navigation" class="col-xs-4 col-sm-4 col-md-3 col-lg-3 navigation-menu"><?php get_sidebar( 'navigation' ); ?></div>
            <!--script type="text/javascript">
                $("#js-navigation").load("navigation.html");
            </script-->

            <div class="col-xs-8 col-sm-8 col-md-9 col-lg-9 content-wrapper">
                <div class="row divider-row">
                    <div class="divider inverted"></div>
                </div>
                <div class="row level_1">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="header">
                            <div class="header-inner">
                                <div class="pull-right">
                                        <span>
                                            <i class="mdi-action-settings-phone"></i> +375 (17) 287 97 00
                                        </span>
                                    <div class="lang-select">
                                        <div class="pull-right">
                                            <input type="radio" id="js-lang-ru" checked="" value="lang_ru" name="lang" />
                                            <label for="js-lang-ru">РУС</label>
                                        </div>
                                        <div class="pull-right">
                                            <input type="radio" disabled="" id="js-lang-eng" value="lang_eng" name="lang" />
                                            <label for="js-lang-eng">ENG</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>