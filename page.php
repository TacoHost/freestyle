<?
get_header( ); ?>
<link href="<? bloginfo("template_directory" ); ?>/less/contacts.min.css" rel="stylesheet">
<div class="content-inner-wrapper">
    <?  if (have_posts() ): while (have_posts()) the_post();?>
    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2 class="boxed-title">
            <? the_title( ); ?>
            <span class="flag-btm"></span>
        </h2>
        <div>
            <? the_content(); ?>
        </div>
        </div>
    <? endif; ?> 
</div>
</div>
<? get_footer(); ?>
    <script src="<? bloginfo("template_directory" ); ?>/js/contacts-page.js"></script>
