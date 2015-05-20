<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns:og="http://ogp.me/ns#">
<?php
echo '<head>
    <title></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="'.ROOT_HOST.'view/css/selectbox.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="'.ROOT_HOST.'view/css/style.css" media="screen" rel="stylesheet" type="text/css" />

</head>

<body>
<div id="top">
    <div class="top_wrap">
        <div id="top_info" style="margin-top:25px;">
            <div id="logo">
                <a href="'.ROOT_HOST.'home"><img src="img/images/logo.png" alt=""></a>
            </div>
            <div id="info_center">
                <div id="search">
                    <form action="/search">
                        <input id="input" name="query" value="Cauta..." type="text" />
                        <input id="send" type="submit" value="" />
                    </form>
                </div>
                <div id="subscribe">
                    <span>например, <span id="podstava">расклад на любовь</span></span>
                    <span id="sub1">подписаться</span>
                    <a target="_blank" href="https://www.facebook.com/groups/628871420540971/"><img src="img/images/facebook.png" alt=""></a>
                    <a target="_blank" href="https://vk.com/club71399535"><img src="img/images/vk.png" alt=""></a>
                    <a target="_blank" href="https://twitter.com/Astro_Tarot_ru"><img src="img/images/twitter.png" alt=""></a>
                </div>
            </div>
            <div id="registration">
                <a href="/user/registration">Inregistrare</a>&nbsp; sau
                <div id="enter">Intra</div>
                <div id="enter_form">
                    <div class="header_min">Intra</div>
                    <div class="enter_form_content">
                        <form id="auth-form">
                            <input class="enter_form_text" value="адрес e-mail" name="email" type="text" />
                            <div id="email-error" class="wrong_text"></div>
                            <input class="enter_form_text" value="пароль" name="pass" type="password" />
                            <div id="pass-error" class="wrong_text"></div>
                            <div class="forget"><a href="javascript:void(0)">Забыли пароль?</a></div>
                            <div class="check_left">
                                <label>
                                    <input class="check" type="checkbox" /><span>Запомнить меня</span></label>
                            </div>
                            <input class="enter_send" type="image" id="auth-submit" src="img/images/enter_form_button.png" />
                        </form>
                        <form id="recover-form" style="display:none;">
                            <input class="enter_form_text" value="адрес e-mail" name="remail" type="text" />
                            <div class="forget"><a href="javascript:void(0)">Авторизоваться</a></div>
                            <input class="enter_send" type="image" id="recover-submit" src="img/images/enter_form_button_recover.png" />
                            <div id="password-sended" class="check_left" style="display:none;">
                                <span style="color:green;">Новый пароль выслан на указанную почту</span>
                            </div>
                        </form>
                        <div class="clear"></div>
                        <div id="socnet">
                            <div>Войти через социальную сеть</div>
                            <!-- <div id="vk_auth"></div> -->
                            <a id="fb_auth" href="javascript:void(0)"><img src="img/images/socnet1_min.png" alt=""></a>
                            <a id="vk_auth" href="javascript:void(0)"><img src="img/images/socnet2_min.png" alt=""></a>
                            <a href="https://api.twitter.com/oauth/authorize?oauth_token=PIXT5XGzWsO9rqsrayn8uog97qFBeJGI"><img src="img/images/socnet3_min.png" alt=""></a>
                        </div>
                    </div>
                    <div id="reg_new_user"><a href="/user/registration">Регистрация</a> нового пользователя</div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

';


