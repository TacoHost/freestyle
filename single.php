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
<<<<<<< HEAD
		<script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div class="pluso" data-background="transparent" data-options="medium,round,line,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir,email,print"></div>
=======
>>>>>>> e5652dbb324e4b744a0616921441450b7265e28c
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