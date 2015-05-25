<?
/*
Template Name: Шаблон для страницы 3д-тура
*/


get_header(); ?>


<link href="<? bloginfo("template_directory" ); ?>/less/prices.min.css" rel="stylesheet">

<link href="<? bloginfo("template_directory" ); ?>/plugins/mapplic/css/map.css" rel="stylesheet">
<link href="<? bloginfo("template_directory" ); ?>/plugins/mapplic/mapplic/mapplic.css" rel="stylesheet">

            <div class="content-inner-wrapper">
                <?  if (have_posts() ): while (have_posts()) the_post();?>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="boxed-title">
                        <? the_title(); ?>
                        <span class="flag-btm"></span>
                    </h2>
                    <div>
                        <div class="well">
                           <? the_content(); ?>
                            </div>
                        <iframe width='100%' height='460' src='http://round.me/api/panorama/13927/embed/' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <?endif; ?>
            </div>
			<div id="mapplic"></div>
        </div>
		
		<script src="<? bloginfo("template_directory" ); ?>/plugins/mapplic/js/jquery-1.11.2.min.js" type="text/javascript"></script>
		<script src="<? bloginfo("template_directory" ); ?>/plugins/mapplic/js/hammer.min.js" type="text/javascript"></script>
		<script src="<? bloginfo("template_directory" ); ?>/plugins/mapplic/js/jquery.easing.js" type="text/javascript"></script>
		<script src="<? bloginfo("template_directory" ); ?>/plugins/mapplic/js/jquery.mousewheel.js" type="text/javascript"></script>
		<script src="<? bloginfo("template_directory" ); ?>/plugins/mapplic/mapplic/mapplic.js" type="text/javascript"></script>
		
		<script type="text/javascript">
			$("#mapplic").mapplic({
				source: "<? bloginfo("template_directory" ); ?>/usa.json",
				height: 420
			});
		</script>

<? get_footer( ); ?>

<script src="<? bloginfo("template_directory" ); ?>/js/tour.js"></script>