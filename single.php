<?


get_header();
?>


<div class="content-inner-wrapper">
<?
if (have_posts() ): while (have_posts()) the_post();?>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2 class="boxed-title">

            <?
            the_title(); ?>
            <span class="flag-btm"></span>
        </h2>
        <div class="row">
            <? if($img=get_field(news_image, $post->post_id))
            {
                ?>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <? foreach ($img as $img1)
                { ?>
                <img src="<? echo $img1[img][sizes][medium]; ?>" class="img-responsive mg_bott_20" alt="" />
                    <?
                    }
                    ?>
            </div>
            <?
            } ?>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div>
                   <? the_content(); ?>
                </div>
            </div>
        </div>
    </div>
    <? endif; ?>
</div>
</div>
<? get_footer(); ?>