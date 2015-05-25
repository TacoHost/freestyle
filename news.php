<?
/*
Template Name: Страницы с новостями
*/


get_header(); ?>


                                <link href="<? bloginfo("template_directory" ); ?>/less/news.min.css" rel="stylesheet">
                                <div class="content-inner-wrapper news-page">

                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h2 class="boxed-title">
                                            Новости и акции от Фристайл
                                            <span class="flag-btm"></span>
                                        </h2>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 articles-stack">
                                                <div class="row">

                                                <?php

                                                $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                                $args=array(
                                                    'paged'=> $page,
                                                    'cat'=>2,
                                                    'posts_per_page'=> 4
                                                );
                                                query_posts($args );
                                                ?>
                                                                                        <?

                                             if (have_posts()) : ?>
                                                 <?php while (have_posts()) : the_post();


                                        //   $args=array('category'=>2, 'numberposts'=> 8); //проверяем наличие постов в категории
                                  //  if($posts=get_posts($args))
                                // {
                                    // foreach ($posts as $post) // цикл печатанья постов
                                    // {

                                         ?>
                                         <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                             <div class="article-item">
                                                 <? if($img=get_field(news_image))
                                                 {?>
                                                 <a href="<? the_permalink(); ?>"
                                                    class="image-block">
                                                     <img
                                                         src="<? echo $img[0][img][sizes][medium]; ?>"
                                                         class="thumb img-responsive" alt=""/>
                                                 </a>
                                                     <?
                                                 }?>

                                                 <div class="article-preview">
                                                     <h5>
                                                         <a href="<? the_permalink(); ?>"><? the_title(); ?></a>
                                                     </h5>
                                                     <div>
                                                        <? if ($preview=get_field(preview)) echo $preview; ?>
                                                     </div>

                                                     <!--<span class="tag">#новость</span>
                                                         <span class="date">14.01.2015</span>-->
                                                 </div>
                                             </div>
                                         </div>
                                     <?
                                    // }
                                    endwhile;
                                                 endif;

                                // }
                                 ?>



                                                </div>
                                                <? wp_pagenavi(); ?>

                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 icons">
                                                <div class="subnavi-block">
                                                    <i>
                                                        <span class="">%</span>
                                                    </i>
                                                </div>
                                                 </div>
                                        </div>
                                    </div>






                                </div>
                            </div>

<? get_footer( ); ?>