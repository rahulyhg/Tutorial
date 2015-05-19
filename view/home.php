<?php

require_once('view/include/constructor.php');
echo '<div id="top">
    <div class="top_wrap">
        <div id="top_info" style="margin-top:25px;">
            <div id="logo">
                <a href="/"><img src="img/images/logo.png" alt=""></a>
            </div>
            <div id="info_center">
                <div id="search">
                    <form action="/search">
                        <input id="input" name="query" value="Я ищу..." type="text" />
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
                <a href="/user/registration">Регистрация</a>&nbsp; или
                <div id="enter">Войти</div>
                <div id="enter_form">
                    <div class="header_min">Войти</div>
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

    <div id="menu">
        <div class="top_wrap">
            <div id="menu_left">
                <div class="lilac_item">
                    <a href="/horoscope">Гороскопы</a>
                </div>
            </div>
            <div id="menu_right">
                <div class="lilac_item">
                    <a href="/news">Новости</a>
                </div>
                <div class="lilac_item">
                    <a href="/statyi">Статьи</a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div id="content">
    <div id="content_wrap">
        <div id="slyder">
            <div id="slyde1" onclick="window.location.href="/gadaniya/rune/lyubov-i-otnosheniya"" style="cursor:pointer">
                <img src="'.ROOT_HOST.'view/images/slider/553d184b7ee68.jpg" alt="" />
            </div>
            <div id="slyde2" onclick="window.location.href="/statyi/content/12-astrologiya/255-retrogradnyiy-saturn-v-skorpione--15-iyunya-2015"" style="cursor:pointer">
                <img src="'.ROOT_HOST.'view/images/slider/5534091ca5638.jpg" alt="" />
            </div>
            <div id="slyde3" onclick="window.location.href="/gadaniya/taro/semya-i-deti/394-rasklad--ottsyi-i-deti"" style="cursor:pointer">
                <img src="'.ROOT_HOST.'view/images/slider/552c3a0ec7b11.jpg" alt="" />
            </div>
            <div id="slyde4" onclick="window.location.href="/numerology"" style="cursor:pointer">
                <img src="'.ROOT_HOST.'view/images/slider/55219a9c107b8.jpg" alt="" />
            </div>
            <div id="slyde5" onclick="window.location.href="/statyi/content/12-astrologiya/241-kalendar-strijek-blagopriyatnyie-dni"" style="cursor:pointer">
                <img src="'.ROOT_HOST.'view/images/slider/55216b2f39a19.jpg" alt="" />
            </div>
            <div id="slyde6" onclick="window.location.href="/gadaniya/book/kniga-peremen/26-kniga-peremen"" style="cursor:pointer">
                <img src="'.ROOT_HOST.'view/images/slider/552196215ba13.jpg" alt="" />
            </div>
        </div>
        <div id="slyder_element">
            <div class="slyder_dot" num="1"></div>
            <div class="slyder_dot" num="2"></div>
            <div class="slyder_dot" num="3"></div>
            <div class="slyder_dot" num="4"></div>
            <div class="slyder_dot" num="5"></div>
            <div class="slyder_dot" num="6"></div>
        </div>
        <div id="horoscope">
            <div class="header">Horoscop</div>
            <div class="left_block">';
                foreach($allSigns as $item){
                    CreateSignSmallItem($item);
                }
            echo '</div>
            <div class="right_block">
                <div id="horo_arrow">
                    <div class="arrow_left"></div>
                    <div class="arrow_right"></div>
                </div>
                <div class="sign_item">
                    <div id="sign_img1"></div>
                    <div class="item_header"><span>Овен</span>
                        <br />21.03-20.04</div>
                    <div class="clear"></div>
                    <div class="sign_item_header">Овен — гороскоп на сегодня</div>
                    <div class="data">
                        May 16, 2015 </div>
                    <div class="text">
                        Любовь, семья Благоприятный день для представителей знака Овен, которые стремятся к переменам в отношениях с любимым человеком: для укрепления отношений, их выхода на более высокий уровень или, наоборот, расставания ... <a href="/horoscope/aries/today">гороскоп полностью →</a></div>
                    <div class="button" style="bottom:45px;">
                        <div class="button_left"></div>
                        <div class="button_content"><a id="sign-all-horoscoper" href="/horoscope/aries/today">Все горосокопы знака Овен</a></div>
                        <div class="button_right"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="sign_item">
                    <div id="sign_img2"></div>
                    <div class="item_header"><span>Телец</span>
                        <br />21.04-20.05</div>
                    <div class="clear"></div>
                    <div class="sign_item_header">Телец — гороскоп на сегодня</div>
                    <div class="data">
                        May 16, 2015 </div>
                    <div class="text">
                        Любовь, семья Сегодня представителей знака Телец ждет успех в любовных делах, счастливые происшествия в семейной жизни. Сегодня вы получите большое удовлетворение от общения с родными и близкими людьми. Этот день бл ... <a href="/horoscope/taurus/today">гороскоп полностью →</a></div>
                    <div class="button" style="bottom:45px;">
                        <div class="button_left"></div>
                        <div class="button_content"><a id="sign-all-horoscoper" href="/horoscope/taurus/today">Все горосокопы знака Телец</a></div>
                        <div class="button_right"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="sign_item">
                    <div id="sign_img3"></div>
                    <div class="item_header"><span>Близнецы</span>
                        <br />21.05-21.06</div>
                    <div class="clear"></div>
                    <div class="sign_item_header">Близнецы — гороскоп на сегодня</div>
                    <div class="data">
                        May 16, 2015 </div>
                    <div class="text">
                        Любовь, семья Сегодня вы особенно восприимчивы и эмоциональны; даже незначительные, мелкие неприятности в любовных и семейных отношениях приводят вас к обидам и разочарованиям. Этот день требует от вас спокойствия и ... <a href="/horoscope/gemini/today">гороскоп полностью →</a></div>
                    <div class="button" style="bottom:45px;">
                        <div class="button_left"></div>
                        <div class="button_content"><a id="sign-all-horoscoper" href="/horoscope/gemini/today">Все горосокопы знака Близнецы</a></div>
                        <div class="button_right"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="sign_item">
                    <div id="sign_img4"></div>
                    <div class="item_header"><span>Рак</span>
                        <br />22.06-22.07</div>
                    <div class="clear"></div>
                    <div class="sign_item_header">Рак — гороскоп на сегодня</div>
                    <div class="data">
                        May 16, 2015 </div>
                    <div class="text">
                        Любовь, семья Сегодня вам нелегко выразить свои чувства и эмоции, поэтому вы можете быть замкнутыми и угрюмыми. Неблагоприятный день для романтических приключений, знакомств и свиданий, однако если у вас есть близки ... <a href="/horoscope/cancer/today">гороскоп полностью →</a></div>
                    <div class="button" style="bottom:45px;">
                        <div class="button_left"></div>
                        <div class="button_content"><a id="sign-all-horoscoper" href="/horoscope/cancer/today">Все горосокопы знака Рак</a></div>
                        <div class="button_right"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="sign_item">
                    <div id="sign_img5"></div>
                    <div class="item_header"><span>Лев</span>
                        <br />23.07-23.08</div>
                    <div class="clear"></div>
                    <div class="sign_item_header">Лев — гороскоп на сегодня</div>
                    <div class="data">
                        May 16, 2015 </div>
                    <div class="text">
                        Любовь, семья Сегодня у представителей знака Лев возможно возникновение новых романтических привязанностей или улучшение отношений с близкими и любимыми людьми. Этот день Львы могут провести с теми, кого они любят и ... <a href="/horoscope/leo/today">гороскоп полностью →</a></div>
                    <div class="button" style="bottom:45px;">
                        <div class="button_left"></div>
                        <div class="button_content"><a id="sign-all-horoscoper" href="/horoscope/leo/today">Все горосокопы знака Лев</a></div>
                        <div class="button_right"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="sign_item">
                    <div id="sign_img6"></div>
                    <div class="item_header"><span>Дева</span>
                        <br />24.08-23.09</div>
                    <div class="clear"></div>
                    <div class="sign_item_header">Дева — гороскоп на сегодня</div>
                    <div class="data">
                        May 16, 2015 </div>
                    <div class="text">
                        Любовь, семья Сегодня вам трудно найти общий язык с близкими и любимыми людьми; по непонятным причинам возникают недоразумения, разногласия и ссоры. Постарайтесь в этот день проявить свои психологические способности ... <a href="/horoscope/virgo/today">гороскоп полностью →</a></div>
                    <div class="button" style="bottom:45px;">
                        <div class="button_left"></div>
                        <div class="button_content"><a id="sign-all-horoscoper" href="/horoscope/virgo/today">Все горосокопы знака Дева</a></div>
                        <div class="button_right"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="sign_item">
                    <div id="sign_img7"></div>
                    <div class="item_header"><span>Весы</span>
                        <br />24.09-23.10</div>
                    <div class="clear"></div>
                    <div class="sign_item_header">Весы — гороскоп на сегодня</div>
                    <div class="data">
                        May 16, 2015 </div>
                    <div class="text">
                        Любовь, семья Этот день &ndash; один из наиболее благоприятных периодов для представителей знака Весы. Сегодня Весы излучают положительную энергию, чем притягивают к себе внимание противоположного пола. Сегодня в ли ... <a href="/horoscope/libra/today">гороскоп полностью →</a></div>
                    <div class="button" style="bottom:45px;">
                        <div class="button_left"></div>
                        <div class="button_content"><a id="sign-all-horoscoper" href="/horoscope/libra/today">Все горосокопы знака Весы</a></div>
                        <div class="button_right"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="sign_item">
                    <div id="sign_img8"></div>
                    <div class="item_header"><span>Скорпион</span>
                        <br />24.10-22.11</div>
                    <div class="clear"></div>
                    <div class="sign_item_header">Скорпион — гороскоп на сегодня</div>
                    <div class="data">
                        May 16, 2015 </div>
                    <div class="text">
                        Любовь, семья Для активных действий в сфере личных отношений лучше подобрать другой день, - выяснение отношений с любимым человеком и попытки подчинить его могут привести к серьезным конфликтам и разногласиям. Поста ... <a href="/horoscope/scorpio/today">гороскоп полностью →</a></div>
                    <div class="button" style="bottom:45px;">
                        <div class="button_left"></div>
                        <div class="button_content"><a id="sign-all-horoscoper" href="/horoscope/scorpio/today">Все горосокопы знака Скорпион</a></div>
                        <div class="button_right"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="sign_item">
                    <div id="sign_img9"></div>
                    <div class="item_header"><span>Стрелец</span>
                        <br />23.11-21.12</div>
                    <div class="clear"></div>
                    <div class="sign_item_header">Стрелец — гороскоп на сегодня</div>
                    <div class="data">
                        May 16, 2015 </div>
                    <div class="text">
                        Любовь, семья Загруженность на работе, решение финансовых проблем сегодня может стать причиной споров и разногласий в семейных и любовных отношениях представителей знака Стрелец. Сегодня Стрельцам лучше избегать мим ... <a href="/horoscope/sagittarius/today">гороскоп полностью →</a></div>
                    <div class="button" style="bottom:45px;">
                        <div class="button_left"></div>
                        <div class="button_content"><a id="sign-all-horoscoper" href="/horoscope/sagittarius/today">Все горосокопы знака Стрелец</a></div>
                        <div class="button_right"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="sign_item">
                    <div id="sign_img10"></div>
                    <div class="item_header"><span>Козерог</span>
                        <br />22.12-20.01</div>
                    <div class="clear"></div>
                    <div class="sign_item_header">Козерог — гороскоп на сегодня</div>
                    <div class="data">
                        May 16, 2015 </div>
                    <div class="text">
                        Любовь, семья Сегодня представители знака Козерог особенно нуждаются во внимании и заботе родных и близких, из-за чего могут проявлять чрезмерное упрямство. Козероги в этот день легко разочаровываются в людях, поэто ... <a href="/horoscope/capricorn/today">гороскоп полностью →</a></div>
                    <div class="button" style="bottom:45px;">
                        <div class="button_left"></div>
                        <div class="button_content"><a id="sign-all-horoscoper" href="/horoscope/capricorn/today">Все горосокопы знака Козерог</a></div>
                        <div class="button_right"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="sign_item">
                    <div id="sign_img11"></div>
                    <div class="item_header"><span>Водолей</span>
                        <br />21.01-20.02</div>
                    <div class="clear"></div>
                    <div class="sign_item_header">Водолей — гороскоп на сегодня</div>
                    <div class="data">
                        May 16, 2015 </div>
                    <div class="text">
                        Любовь, семья Сегодня Водолеи могут раздражаться из-за мелочей и предъявлять своим родным и близким завышенные требования, что может привести к разногласиям в семье или отношениях с любимым человеком. Представителям ... <a href="/horoscope/aquarius/today">гороскоп полностью →</a></div>
                    <div class="button" style="bottom:45px;">
                        <div class="button_left"></div>
                        <div class="button_content"><a id="sign-all-horoscoper" href="/horoscope/aquarius/today">Все горосокопы знака Водолей</a></div>
                        <div class="button_right"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="sign_item">
                    <div id="sign_img12"></div>
                    <div class="item_header"><span>Рыбы</span>
                        <br />21.02-20.03</div>
                    <div class="clear"></div>
                    <div class="sign_item_header">Рыбы — гороскоп на сегодня</div>
                    <div class="data">
                        May 16, 2015 </div>
                    <div class="text">
                        Любовь, семья Сегодня вы требуете любви и внимания со стороны близких и любимых людей, и очень обижаетесь, когда на вас не обращают внимания. Вы сегодня особенно чувствительны и сентиментальны, однако вам не стоит с ... <a href="/horoscope/pisces/today">гороскоп полностью →</a></div>
                    <div class="button" style="bottom:45px;">
                        <div class="button_left"></div>
                        <div class="button_content"><a id="sign-all-horoscoper" href="/horoscope/pisces/today">Все горосокопы знака Рыбы</a></div>
                        <div class="button_right"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div id="cosmo">
            <div id="know_thyself">
                <img src="img/images/profile.jpg" alt="" />
                <div class="text">
                    <span>Узнай больше о себе!</span>
                    <p>Вы не только Знак Зодиака! Пройдите регистрацию и получите бесплатно ваш Космический профиль. Раскройте для себя, Таро личности, Число жизненного пути, ваш Кармический гороскоп и другую персональную информацию.</p>
                </div>
            </div>
            <div class="button">
                <div class="button_left"></div>
                <div class="button_content"><a href="/user/registration">Регистрация</a></div>
                <div class="button_right"></div>
            </div>
        </div>
        <div id="article_news">
            <div class="left_block">
                <div class="header">Статьи</div>
                <div class="left_block">
                    <div class="article_news_item">
                        <img src="img/articles/5553b220777d4.jpg" style="width:95px" alt="" />
                        <div class="data">
                            May 13, 2015 </div>
                        <div class="item_header">
                            <a href="/statyi/content/43-prazdnik/282-ivana-kupala-2015-god">Ивана Купала 2015 год</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="article_news_item">
                        <img src="img/articles/55544f4e63319.jpg" style="width:95px" alt="" />
                        <div class="data">
                            October 5, 2015 </div>
                        <div class="item_header">
                            <a href="/statyi/content/26-gadaniya/277-troitsa-2015">Троица 2015</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="article_news_item">
                        <img src="img/articles/553aaf42a033e.jpg" style="width:95px" alt="" />
                        <div class="data">
                            April 24, 2015 </div>
                        <div class="item_header">
                            <a href="/statyi/content/12-astrologiya/263-letnee-solntsestoyanie-2015">Летнее солнцестояние 2015</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="article_news_item">
                        <img src="img/articles/55340791db993.jpg" style="width:95px" alt="" />
                        <div class="data">
                            April 19, 2015 </div>
                        <div class="item_header">
                            <a href="/statyi/content/12-astrologiya/255-retrogradnyiy-saturn-v-skorpione--15-iyunya-2015">Ретроградный Сатурн в Скорпионе — 15 июня 2015</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="article_news_item">
                        <img src="img/articles/55216a5344097.jpg" style="width:95px" alt="" />
                        <div class="data">
                            May 4, 2015 </div>
                        <div class="item_header">
                            <a href="/statyi/content/12-astrologiya/241-kalendar-strijek-blagopriyatnyie-dni">Календарь стрижек благоприятные дни</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="right_block">
                    <div class="article_news_item">
                        <img src="img/articles/550411e47eb0b.jpg" style="width:95px" alt="" />
                        <div class="data">
                            March 14, 2015 </div>
                        <div class="item_header">
                            <a href="/statyi/content/12-astrologiya/221-luna-v-ryibah">Луна в Рыбах</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="article_news_item">
                        <img src="img/articles/55041070208ad.jpg" style="width:95px" alt="" />
                        <div class="data">
                            March 14, 2015 </div>
                        <div class="item_header">
                            <a href="/statyi/content/12-astrologiya/220-luna-v-vodolee">Луна в Водолее</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="article_news_item">
                        <img src="img/articles/55034c2c5cbb8.jpg" style="width:95px" alt="" />
                        <div class="data">
                            March 13, 2015 </div>
                        <div class="item_header">
                            <a href="/statyi/content/12-astrologiya/218-luna-v-kozeroge">Луна в Козероге</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="article_news_item">
                        <img src="img/articles/550345736e902.jpg" style="width:95px" alt="" />
                        <div class="data">
                            March 13, 2015 </div>
                        <div class="item_header">
                            <a href="/statyi/content/12-astrologiya/217-luna-v-streltse">Луна в Стрельце</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="article_news_item">
                        <img src="img/articles/5501cd1e1a178.jpg" style="width:95px" alt="" />
                        <div class="data">
                            December 3, 2015 </div>
                        <div class="item_header">
                            <a href="/statyi/content/12-astrologiya/215-luna-v-skorpione">Луна в Скорпионе</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="all"><a href="/statyi">Все статьи</a></div>
                <div class="clear"></div>
            </div>
            <div class="right_block">
                <div class="header">Новости</div>
                <div id="news">
                    <div class="article_news_item">
                        <img src="files/news/5557a3dccca72.png" style="width:95px" alt="" />
                        <div class="data">
                            May 16, 2015 </div>
                        <div class="item_header">
                            <a href="/news/content/41-novoe-na-sayte/286-dobavlenyi-lyubovnyie-raskladyi-na-kartah">Добавлены любовные расклады на картах</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="article_news_item">
                        <img src="files/news/555665c13ef81.png" style="width:95px" alt="" />
                        <div class="data">
                            May 15, 2015 </div>
                        <div class="item_header">
                            <a href="/news/content/41-novoe-na-sayte/285-dobavlenyi-novyie-raskladyi-na-kartah-lenorman">Добавлены новые расклады на картах Ленорман</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="article_news_item">
                        <img src="files/news/5554fd2f64b9f.png" style="width:95px" alt="" />
                        <div class="data">
                            May 14, 2015 </div>
                        <div class="item_header">
                            <a href="/news/content/41-novoe-na-sayte/284-gadaniya-taro-na-samopoznanie">Гадания Таро на самопознание</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="article_news_item">
                        <img src="files/news/5553b8467637e.jpg" style="width:95px" alt="" />
                        <div class="data">
                            May 13, 2015 </div>
                        <div class="item_header">
                            <a href="/news/content/41-novoe-na-sayte/283-novyie-runicheskie-raskladyi">Новые рунические расклады</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="article_news_item">
                        <img src="files/news/55526f3466f97.jpg" style="width:95px" alt="" />
                        <div class="data">
                            December 5, 2015 </div>
                        <div class="item_header">
                            <a href="/news/content/41-novoe-na-sayte/281-gadaniya-na-igralnyih-kartah-na-rabotu">Гадания на игральных картах на работу</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="all"><a href="/news">Все новости</a></div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <div class="clear"></div>
            <div class="bottom_text">
                <div class="text_open">
                    Проект Астро Таро посвящен самым интересным и популярным предсказательным системам, таким как астрология, нумерология, гадания на картах Таро и классических картах, руны, гадания по книге перемен И-цзын и многое другое. На Астро Таро вы можете найти онлайн гадания на картах Таро и обычных, классических картах на самые разнообразные темы, получить ответы на самые волнующие вопросы. Наш проект содержит множество разделов онлайн гаданий, посвященных самым важным жизненным сферам, таким как: любовь, отношения, здоровье, семья, дети, будущее, судьба, путешествия, поездки, работа, бизнес, карьера, недвижимость, потеря, пропажа, порча, сглаз и другие разделы, посвященные важным вопросам. А гороскопы и астрологические и нумерологические прогнозы, составленные командой опытных и профессиональных астрологов и нумерологов, помогут вам получить больше информации о себе, своих родных и близких или просто знакомых. Гороскоп, составленный по Солнечному знаку Зодиака, поможет определить характер человека, его способности, таланты, наклонности. В разделах, посвященных астрологии и нумерологии вы можете узнать астрологический и нумерологический прогноз на сегодня, завтра, месяц и год для любого знака Зодиака, а так же узнать о своем предназначении с помощью бесплатного персонального кармического гороскопа.
                    <div class="text_roll">
                        Если вы следите за ритмами Луны, на Астро Таро для вас всегда открыт самый подробный Лунный календарь. Наш Лунный календарь содержит много интересной и полезной информации о влиянии Луны, смены ее фаз и положений в знаках Зодиака. Мы постарались как можно интереснее и доступнее описать каждый Лунный день, чтобы предоставить возможность нашим посетителям заранее планировать начало новых дел и принятия важных решений. Лунный календарь стрижки, свадьбы, здоровья, зачатия, бизнеса поможет вам подобрать наиболее благоприятный день для вышеперечисленных мероприятий, а Лунный календарь садовода поможет подобрать самые благоприятные периоды для ухода за растениями. Так же вы можете получить много интересной и полезной информации о магии, узнать магические обряды и заговоры по привлечению удачи, денег, любви, здоровья и благополучия, по избавлению от негативного магического воздействия, сглаза и порчи.
                    </div>
                </div>
                <div class="open_text">
                    <span>развернуть</span> ↓
                </div>
            </div>
        </div>
    </div>
    <!-- end of content wrap -->
</div>';
include_once('view/include/footer.php');
