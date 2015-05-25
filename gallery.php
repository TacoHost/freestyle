<?
/*
Template Name: Шаблон "Галлерея"
*/


get_header( ); ?>

<link href="<? bloginfo("template_directory" ); ?>/less/gallery.min.css" rel="stylesheet">


<div class="content-inner-wrapper">
<?  if (have_posts() ): while (have_posts()) the_post();?>
<? if($gal=get_field(gallery_main))
{
    foreach ($gal as $one)
    {


    ?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h2 class="boxed-title">
        <? echo $one [title]; ?>
        <span class="flag-btm"></span>
    </h2>
    <div>
        <? echo $one[content]; ?>
    </div>
</div>
        <?
        if($one[img]) {
            ?>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="slider-pro js-gallery-slider">
                    <div class="sp-slides">

                        <? foreach($one[img] as $one_img)
                        { ?>

                        <div class="sp-slide">
                            <img class="sp-image" src="<? echo $one_img[sizes][large]; ?>"/>

                            <div class="sp-thumbnail">
                                <img class="sp-thumbnail-image"
                                     src="<? echo $one_img[sizes][medium]; ?>"/>
                            </div>
                        </div>
                            <?
                        }
                        ?>

                    </div>
                </div>
                <div class="row divider-row">
                    <div class="divider"></div>
                </div>
            </div>
        <?
        }
    }
} ?>




</div>
<? endif; ?>

</div>

<? get_footer(); ?>
<script src="<? bloginfo("template_directory" ); ?>/js/gallery-page.js"></script>
