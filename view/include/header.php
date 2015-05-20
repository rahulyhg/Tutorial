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
                <a href="'.ROOT_HOST.'home"><img src="'.ROOT_HOST.'view/images/logo.png" alt=""></a>
            </div>
            <div id="info_center">
                <div id="search">
                    <form action="/search">
                        <input id="input" name="query" value="Cauta..." type="text" />
                        <input id="send" type="submit" value="" />
                    </form>
                </div>
                <div id="subscribe">
                    <span>exemplu, <span id="podstava">leu</span></span>
                    <span id="sub1">aboneaza-te</span>
                    <a target="_blank" href="https://www.facebook.com/groups/628871420540971/"><img src="'.ROOT_HOST.'view/images/facebook.png" alt=""></a>
                    <a target="_blank" href="https://twitter.com/Astro_Tarot_ru"><img src="'.ROOT_HOST.'view/images/twitter.png" alt=""></a>
                </div>
            </div>
            <div id="registration">
                <a href="'.ROOT_HOST.'registration">Inregistrare</a>&nbsp; sau
                <div id="enter">Intra</div>
                <div id="enter_form">
                    <div class="header_min">Intra</div>
                    <div class="enter_form_content">
                        <form id="auth-form" action = "javascript:void(0);" method="POST">
                            <input class="enter_form_text" value="adresa e-mail" name="email" type="text" />
                            <div id="email-error" class="wrong_text"></div>
                            <input class="enter_form_text" value="parola" name="password" type="password" />
                            <div id="pass-error" class="wrong_text"></div>
                            <div class="forget"><a href="javascript:void(0)">Ati uitat parola?</a></div>
                            <div class="check_left">
                                <label>
                                    <input class="check" type="checkbox" /><span>Tine-ma minte</span></label>
                            </div>
                            <button id="login">Intra</button>
                        </form>
                        <form id="recover-form" style="display:none;">
                            <input class="enter_form_text" value="adresa e-mail" name="remail" type="text" />
                            <div class="forget"><a href="javascript:void(0)">Logare</a></div>
                            <button id="reset-password">Trimite</button>
                            <div id="password-sended" class="check_left" style="display:none;">
                                <span style="color:green;">Parola noua a fost transmisa la adresa indicata</span>
                            </div>
                        </form>
                        <div class="clear"></div>
                    </div>
                    <div id="reg_new_user"><a href="'.ROOT_HOST.'registration">Inregistrarea</a> unui nou utilizator</div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

';


