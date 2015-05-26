<?
/*
Template Name: Шаблон "Контакты"
*/


get_header( ); ?>
<link href="<? bloginfo("template_directory" ); ?>/less/contacts.min.css" rel="stylesheet">
                        <div class="content-inner-wrapper">
                            <?  if (have_posts() ): while (have_posts()) the_post();?>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <h2 class="boxed-title">
                                    Свяжитесь с нами прямо сейчас
                                    <span class="flag-btm"></span>
                                </h2>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <h2>
                                    <i class="mdi-action-settings-phone"></i> Контакты
                                </h2>
                                <div>
                                    <? the_content(); ?>
                                </div>
                                <? if($contacts=get_field(contacts))
                                {
                                    ?>
                                    <table>
                                        <tbody>
                                        <? foreach($contacts as $one) {

                                            ?>
                                            <tr>
                                                <td><? echo $one[name];  ?></td>
                                                <td><? echo $one[phone]; ?></td>
                                            </tr>
                                        <?
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                <?
                                }
                                ?>
                                <? if($work=get_field(work))
                                {

                                ?>
                                <h2>
                                    <i class="mdi-editor-insert-invitation"></i> Время работы
                                </h2>
                                <table>
                                    <tbody>
                                    <? foreach($work as $one)
                                    {

                                     ?>
                                        <tr>
                                            <td><? echo $one[complex];  ?></td>
                                            <td><? echo $one[work_time]; ?></td>
                                        </tr>
                                    <?
                                    } ?>

                                    </tbody>
                                </table>
                                <?
                                } ?>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <h2>
                                    <i class="mdi-communication-email"></i> Обратная связь
                                </h2>
                                <p>
                                    Напишите нам письмо в любое время и мы ответим Вам в течение суток в рабочие дни.
                                </p>
<form action="#" id="form" method="post" name="form">
<input  class="form-control" name="vname" placeholder="Ваше имя" type="text" value="" required="">
<input  class="form-control" name="vphone" placeholder="Ваш номер" type="tel" value="" required="">
<input  class="form-control" name="vemail" placeholder="Ваш Email" type="text" value="" required="">
<textarea  class="form-control" name="msg" placeholder="Оставьте Ваше сообщение здесь..." required=""></textarea>
<input id="send" name="submit" type="submit" value="Отправить сообщение" class="btn btn-primary btn-block">
</form>
                                
                                <?php
                                if(isset($_POST["submit"])){
                                // Checking For Blank Fields..
                                if($_POST["vname"]==""||$_POST["vphone"]==""||$_POST["msg"]==""){
                                echo "Заполните, пожалуйста, все поля.";
                                }else{
                                
                                $email=$_POST['vemail'];
                                
                                
                                $email =filter_var($email, FILTER_SANITIZE_EMAIL);
                                
                                $email= filter_var($email, FILTER_VALIDATE_EMAIL);
                                if (!$email){
                                echo "Введите корректный Email";
                                }
                                else{
                                
                                $headers = 'От: '.$email."\r\n"; 
								$message = $_POST['msg']."\r\n \r\n".'Имя: '.$_POST['vname']."\r\n".'Телефон: '.$_POST['vphone']."\r\n";

                                $message = wordwrap($message, 70);
                                
                                //mail("marketing@free-style.by", $headers, $message);
                                    wp_mail("marketing@free-style.by", $headers, $message);
                                echo "Спасибо! Ваше письмо было отправлено, ожидайте ответ!";
                                }
                                }
                                }
                                ?>
                            </div>
                        </div>
<? if($bg=get_field(background))
{
    echo '<span class="js-parallax-url">';
    echo $bg[url];
    echo '</span>';
}?>

<? endif; ?>




                    </div>

<? get_footer(); ?>
    <script src="<? bloginfo("template_directory" ); ?>/js/contacts-page.js"></script>
