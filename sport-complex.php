<?
/*
Template Name: Шаблон для страницы Спортивный комплекс
*/
get_header();?>

                                <link href="<? bloginfo("template_directory" ); ?>/less/complex-layout.min.css" rel="stylesheet">
                                <div class="content-inner-wrapper">
                                    <?  if (have_posts() ): while (have_posts()) the_post();?>
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="row">
                                            
                                            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                                                <!--<h1 class="after-image after-image-sport">
                                                    <? the_title(); ?>
                                                </h1>-->
                                                <div>
                                                    <? the_content(); ?>
                                                </div>
                                                <div class="row">
                                                    
                                                        <? if($main=get_field(main))
                                                {
                                                    $j=0;
                                                    foreach($main as $one_main)
                                                    {
                                                        ?>
                                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                            <?
                                                        if($one_main[mini_title])
                                                        { ?>
                                                            <h3 class="after-image after-image-sport">
                                                                <? echo $one_main[mini_title]; ?>
                                                            </h3>
                                                        <?
                                                        }
                                                        if($one_main[text_field])
                                                        {
                                                            echo $one_main[text_field];
                                                        }
                                                        if($one_main[tabs])
                                                        { ?><div role="tabpanel"> <?
                                                            $i=0;

                                                            ?><ul class="nav nav-tabs" role="tablist"> <?
                                                            foreach($one_main[tabs] as $tabs)
                                                            { ?>
                                                                <li role="presentation" <? if($i==0) echo 'class="active"';?> >
                                                                    <a href="#tab<? echo $j; echo $i; ?>" aria-controls="tab<? echo $j; echo $i; ?>" role="tab" data-toggle="tab">
                                                                        <? echo $tabs[tab_title];  ?>
                                                                    </a>
                                                                </li>

                                                                <?
                                                                $i++;
                                                            }
                                                            ?></ul>
                                                            <div class="tab-content"><?
                                                                $i=0;
                                                                foreach($one_main[tabs] as $tabs)
                                                                { ?>
                                                                    <div role="tabpanel" class="tab-pane <? if($i==0) echo 'active';?>" id="tab<? echo $j; echo $i; ?>"><?
                                                                    echo $tabs[tab_text];
                                                                    ?> </div><?
                                                                    $i++;

                                                                }
                                                                ?></div> <?






                                                            ?> </div><?
                                                        }
                                                        $j++;
                                                    ?></div><?
                                                    }
                                                }
                                                ?>
                                                    
<<<<<<< HEAD
                                                </div>
                                                <? if($bg=get_field(background))
                                                {
                                                    echo '<span class="js-parallax-url">';
                                                    echo $bg[url];
                                                    echo '</span>';
                                                }?>

=======
                                                </div>                                                
>>>>>>> e5652dbb324e4b744a0616921441450b7265e28c
                                            </div>
                                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 icons">
                                                <div class="subnavi-block">
                                                    <i>
                                                        <span class="zi-sport1"></span>
                                                    </i>
                                                    <i>
                                                        <span class="zi-sport2"></span>
                                                    </i>
                                                    <i>
                                                        <span class="zi-sport3"></span>
                                                    </i>
                                                    <i>
                                                        <span class="zi-sport4"></span>
                                                    </i>
                                                    <i>
                                                        <span class="zi-sport5"></span>
                                                    </i>
                                                </div>
                                                
                                            </div>

                                        </div>
                                    </div>
                                    <? endif; ?>
                                </div>
                            </div>
                        
       <?get_footer(); ?>
<script src="<? bloginfo("template_directory" ); ?>/js/sport-complex.js"></script>