<?php

require_once('view/include/constructor.php');
echo '

    <div id="menu">
        <div class="top_wrap">';
            CreateMenu();
        echo '</div>
    </div>
    <div id="feedback">
        <div id="feedback_button"></div>
        <form action="http://astrotarot.ru/user/registration">
            <span>Ваше имя<img src="'.ROOT_HOST.'view/images/must.png" alt=""></span><br>
            <input value="" id="feedback-name" class="feedback_form_text" size="30" type="text"><br>
            <span>Адрес эл. почты<img src="must.png" alt=""></span><br>
            <input id="feedback-email" class="feedback_form_text" value="используйте действующий адрес" size="30" type="text"><br>
            <span>Письмо<img src="must.png" alt=""></span><br>
            <textarea id="feedback-content" class="feedback_form_text2"></textarea>
            <div id="feedback-sended" style="display: none;"><span style="color: white;">Письмо отправлено</span></div>
            <input id="feedback-send" class="feedback_send" src="feedback_send.png" type="image">
            <div id="nope">Я передумал</div>
        </form>
    </div>
</div>    <div id="content_white">
    <div id="content_wrap">
        <div id="white_space">
            <div class="tri_header">Inregistrare</div>
            <div id="columns">

                <div class="left_block">
                    <div id="vklad_reg">
                        <div id="vklad_reg_pult">
                            <div class="vklad_reg_pult_item">Introduceti datele</div>

                            <div class="clear"></div>
                        </div>
                    </div>
                    <div id="vklad_reg_content">
                        <div class="vklad_reg_item">
                            <form id="simple" action = "javascript:void(0);" method="POST" >
                                <span>Adresa e-mail<img src="'.ROOT_HOST.'view/images/must.png" alt=""></span><br>
                                <input name="email" id="email" value="" class="reg_form" type="text"><span>Parola<img src="'.ROOT_HOST.'view/images/must.png" alt=""></span><br>
                                <input name="password" id="pass" value="" class="reg_form" type="password">	<span>Confirmati parola<img src="'.ROOT_HOST.'view/images/must.png" alt=""></span><br>
                                <input name="password-confirm" id="pass_confirm" value="" class="reg_form" type="password">
                                <div class="check_left">
                                    <label>
                                        <input name="agree" value="" type="hidden"><input name="agree" id="agree" value="1" class="check" type="checkbox"><span> Sunt de acord cu termenii si conditiile Zodia Cool</span></label>
                                </div>
                                <button id="register">Inregistrare</button>
                                <div class="clear"></div>
                            </form>

                        </div>
                        <div class="vklad_reg_item">

                           </div>
                        <div class="vklad_reg_item">

                        </div>
                    </div>
                </div>
                <div class="right_block">
                    <div class="prem_header">De ce sa ma inregistrez?</div>
                    <div class="prem_item">
                        <img src="'.ROOT_HOST.'view/images/prem_img1.png" alt="">
                        <div class="item_header">Horoscop</div>
                        <div class="text">
                            Prin accesarea site-ului, aveți posibilitatea de a citi horoscopul imediat, fără a petrece timp căutând. Activat funcția trimite e-mail horoscopul (zilnic, săptămânal, lunar, timp de un an). Posibilitatea de a comanda un horoscop personal.
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="prem_item" id="prem_last">
                        <img src="'.ROOT_HOST.'view/images/prem_img3.png" alt="">
                        <div class="item_header">Numerologie</div>
                        <div class="text">
                            Ai un calcul numerologica personalizat. Funcția activată trimite e-mail pentru a forecast numerologica (zilnic, lunar, timp de un an). Oferte Prognoza personal numerologica.
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="clear"></div>
                <div class="space-down"></div>
                <div class="clear"></div>
            </div><!-- end of columns -->
        </div><!-- end of whitespace -->
    </div><!-- end of content wrap -->
</div>';
include_once('view/include/footer.php');


