<?
/*
Template Name: Шаблон для цен
*/

get_header(); ?>
<link href="<? bloginfo("template_directory" ); ?>/less/prices.min.css" rel="stylesheet">
                                <div class="content-inner-wrapper">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <h2 class="boxed-title">
                                            Доступные цены для всех!
                                            <span class="flag-btm"></span>
                                        </h2>
                                        <a class="fancybox boxed-title-link" href="#calculatro_block">Подсчитать цену</a>
                                        <div class="price-calc display-none" id="calculatro_block">
                                            <? if($bg=get_field(background))
                                            {
                                                echo '<span class="js-parallax-url">';
                                                echo $bg[url];
                                                echo '</span>';
                                            }?>
                                        <!-- Start Input -->

                                        <?
                                        $args=array('category'=>3, 'numberposts'=> -1, 'order'=> 'ASC', 'orderby' => 'ID');
                                        if($posts=get_posts($args))
                                        {
                                            $i=0;
                                            foreach($posts as $post)
                                            {
                                                $s = get_field(servises);
                                                $prices[] = $s;

                                            }
                                            //echo '123';
                                            //var_dump($prices);
                                            //echo '<br>';
                                            //echo json_encode($prices);
                                            echo '<script>';
                                            echo 'window.prices = ' . json_encode($prices).';';



                                           // echo 'console.log(window.prices)';
                                            echo '</script>';

                                                foreach($posts as $post)
                                                {
                                                    ?>

                                            <div class="zone-item" id="<? echo $i;?>">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <input type="checkbox" value="" id="check<? echo $i;?>" /> <label for="js-aquazone"><? echo $post->post_title; ?></label>
                                                    <p><? echo $post->post_content; ?></p>
                                                </div>
                                                <div class="js-form-controls hidden-container">
                                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
                                                    <label>Возраст</label>
                                                    <select name="" id="age<? echo $i;?>" placeholder="Выберите возраст" class="form-control age-selector">
                                                <? $servises=get_field(servises); ?>
                                                        <option value="default" disabled selected >Выберите возраст</option>
                                                        <option value="kid">Ребенок (c 3 до 13 лет)</option>
                                                        <option value="teen">Подросток (от 14 до 17 лет)</option>
                                                        <option value="adult">Взрослый (от 18 лет)</option>
                                                    </select>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                    <label>Время посещения</label>
                                                    <select id="time<? echo $i;?>" class="form-control time-selector">
                                                        <option value="default" placeholder="Выберите возраст" disabled selected >Выберите время</option>

                                                        <? $t=0;
                                                        foreach($servises as $one )
                                            {
                                                ?>
                                                        <option  value="<? echo $t;?>"><?echo $one[time] ?> минут</option>
                                                <?
                                                $t++;
                                            } ?>
                                                    </select>
                                                    <span class="age-selector-value display-none"></span>
                                                    <span class="time-selector-value display-none"></span>
                                                    <span class="people-selector-value display-none">1</span>
                                                    <span class="price-for-zone display-none"></span>
                                                    <span class="multiplied-price-for-zone display-none"></span>
                                                </div>
                                                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                                    <label>Количество человек</label>
                                                    <input class="form-control number-selector" min="1" type="number" value="1"/>
                                                </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-1 col-md-1 col-lg-1">
                                                    <!--<div class="row">-->
                                                        <button type="button" class="btn btn-md btn-info click" id="js-add-form">+</button>
                                                        <!--<button type="button" class="btn btn-md btn-info" id="js-remove-form">-</button>
                                                    </div> -->
                                                </div>
                                            </div>
                                        <?
                                                $i++;

                                            }
                                        } ?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <table>
                                                        <tr>
                                                        <td width="70%">
                                                        <span class="pull-right">Итого:</span>
                                                        </td>
                                                        <td  width="30%" class="final-price">
                                                        <span class="js-final-price">0</span> бел. руб.
                                                        </td>
                                                        </tr>
                                                </table>

                                                <!--<table>
                                                            <td>Услуга</td>
                                                            <td>Время</td>
                                                            <td>Количество челвоек</td>
                                                            <td>Стоимость</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                Аквазона
                                                            </td>
                                                            <td>2 часа</td>
                                                            <td>1 (взрослый)</td>
                                                            <td>145 000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Бар
                                                            </td>
                                                            <td>1 часа</td>
                                                            <td>1 (взрослый)</td>
                                                            <td>745 000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>

                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td class="final-price">0</td>
                                                        </tr>
                                                    </tbody>
                                                </table>-->
                                            </div>

                                            <!-- end Input -->






                                        </div>
                                        <div>
                                        <?
                                        $args=array('category'=>3, 'numberposts'=> -1, 'order'=> 'ASC', 'orderby' => 'ID');
                                        $posts=get_posts($args);
                                        ?>

                                        <? if($posts)
                                        { ?>
                                        <!--  FIRST TABLE  -->
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <td><b>Наименование услуги </b></td>                                                        
                                                        <td colspan="3"><b>Цена с НДС</b></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                
                                                 <?
                                                    foreach($posts as $post)
                                                    {

                                                    ?>



                                                    <tr>
                                                        <td><b><? echo $post->post_title; ?> </b> <? echo $post->post_content; ?></td>
                                                        <td><b>Ребенок<br/>(с 3 до 13 лет)</b></td>
                                                        <td><b>Подросток<br/>(от 14 до 17 лет)</b></td>
                                                        <td><b>Взрослый<br/>(от 18 лет)</b></td>
                                                    </tr>

                                                        <? if($servises=get_field(servises))
                                                        {
                                                        foreach($servises as $one_serv) {
                                                            ?>

                                                            <tr>
                                                            
                                                                
                                                                <td><? echo $one_serv[time]; ?> <i>мин.</i></td>
                                                                <td><? echo $one_serv[kid]; ?></td>
                                                                <td><? echo $one_serv[teen]; ?></td>
                                                                <td><? echo $one_serv[adult]; ?></td>
                                                                </tr>
                                                            <?
                                                        }
                                                    } ?>



                                                <?
                                                    }

                                              ?>
                                                </tbody>

                                            </table>
                                        <?  } ?>

                                            <!-- END FIRST TABLE  -->


                                        <!-- SECOND TABLE -->
                                            <?
                                            $args=array('category'=>5, 'numberposts'=> -1, 'order'=> 'ASC', 'orderby' => 'ID');
                                            //$posts=get_posts('category='.$temp_cat->term_id, 'numberposts=-1');
                                            $posts=get_posts($args);
                                            ?>


                                        <? if($posts)
                                        { ?>

                                        <table>
                                            <thead>
                                            <tr>
                                                <td><b>Наименование услуги </b></td>
                                                <td><b>Ед. изм. </b></td>
                                                <td><b>Количество</b></td>
                                                <td><b>Цена с НДС</b></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?
                                            foreach($posts as $post)
                                            {
                                                ?>
                                                <tr>
                                                    <td><b><? echo $post->post_title; ?> </b> <? echo $post->post_content; ?></td>
                                                </tr>

                                                <? if($servises=get_field(servises))
                                                {
                                                    foreach($servises as $one_serv)
                                                    {
                                                        ?>

                                                        <tr>
                                                            <td><? echo $one_serv[name]; ?></td>
                                                            <td><? echo $one_serv[time]; ?></td>
                                                            <td><? echo $one_serv[count]; ?></td>
                                                            <td><? echo $one_serv[price]; ?></td>
                                                        </tr>
                                                    <?
                                                    }
                                                } ?>
                                            <?
                                            }

                                            ?>
                                            </tbody>


                                        </table>
                                        <?  } ?>

                                        <!-- END SECOND TABLE -->

                                            <!-- Last TABLE -->
                                            <?
                                            $args=array('category'=>6, 'numberposts'=> -1, 'order'=> 'ASC', 'orderby' => 'ID');
                                            $posts=get_posts($args);
                                             if($posts)
                                            { ?>

                                            <table>
                                                <thead>
                                                    <tr>
                                                        <td><b> Наименование услуги </b></td>
                                                        <td><b> Время </b></td>
                                                        <td><b> Ед. изм. </b></td>
                                                        <td><b>Количество</b></td>
                                                        <td><b>Цена с НДС</b></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?
                                                foreach($posts as $post)
                                                {

                                                    ?>

                                                    <tr>
                                                        <td><b><? echo $post->post_title; ?> </b> <? echo $post->post_content; ?></td>
                                                    </tr>

                                                <? if($servises=get_field(servises))
                                                {
                                                    foreach ($servises as $one_serv)
                                                    {
                                                        ?>
                                                        <tr>
                                                            <td><? echo $one_serv[name]; ?></td>
                                                            <td><? echo $one_serv[time]; ?></td>
                                                            <td>час</td>
                                                            <td><? echo $one_serv[count]; ?></td>
                                                            <td><? echo $one_serv[price]; ?></td>
                                                        </tr>
                                                    <?
                                                    }
                                                }
                                                } ?>
                                                </tbody>

                                            </table>
                                            <?
                                            } ?>

                                            <!-- END Last Table-->
                                        </div>
                                    </div>
                                </div>


                            </div>


<? get_footer( ); ?>
<script src="<? bloginfo("template_directory" ); ?>/js/prices-page.js"></script>