<?php
echo '<div id="vk_api_transport"></div>
	<div id="top">
    <div class="top_wrap">
        <div id="top_info" style="margin-top: 25px;">
            <div id="logo">
                <a indepth="true" href="index.html"><img src="logo.png" alt=""></a>
            </div>
            <div id="info_center">
                <div id="search">
                    <form action="http://astrotarot.ru/search">
                        <input id="input" name="query" value="" type="text">
                        <input id="send" value="" type="submit">
                    </form>
                </div>
                <div id="subscribe">
                    <span>например, <span id="podstava">расклад на любовь</span></span>
                    <span id="sub1">подписаться</span>
                    <a indepth="true" target="_top" href="default.html"><img src="facebook.png" alt=""></a>
                    <a indepth="true" target="_top" href="club71399535.html"><img src="vk.png" alt=""></a>
                    <a indepth="true" target="_top" href="astro_tarot_ru.html"><img src="twitter.png" alt=""></a>
                </div>
            </div>
            <div id="registration">
                <a indepth="true" href="registration.html">Регистрация</a>&nbsp;  или  <div id="enter">Войти</div>
                <div id="enter_form">
                    <div class="header_min">Войти</div>
                    <div class="enter_form_content">
                        <form action="http://astrotarot.ru/user/registration" id="auth-form">
                            <input class="enter_form_text" value="адрес e-mail" name="email" type="text">
                            <div id="email-error" class="wrong_text"></div>
                            <input class="enter_form_text" value="пароль" name="pass" type="password">
                            <div id="pass-error" class="wrong_text"></div>
                            <div class="forget"><a href="javascript:void(0)">Забыли пароль?</a></div>
                            <div class="check_left">
                                <label><input class="check" type="checkbox"><span>Запомнить меня</span></label>
                            </div>
                            <input class="enter_send" id="auth-submit" src="enter_form_button.png" type="image">
                        </form>
                        <form action="http://astrotarot.ru/user/registration" id="recover-form" style="display: none;">
                            <input class="enter_form_text" value="адрес e-mail" name="remail" type="text">
                            <div class="forget"><a href="javascript:void(0)">Авторизоваться</a></div>
                            <input class="enter_send" id="recover-submit" src="enter_form_button_recover.png" type="image">
                            <div id="password-sended" class="check_left" style="display: none;">
                                <span style="color: green;">Новый пароль выслан на указанную почту</span>
                            </div>
                        </form>
                        <div class="clear"></div>
                        <div id="socnet">
                            <div>Войти через социальную сеть</div>
                            <!-- <div id="vk_auth"></div> -->
                            <a id="fb_auth" href="javascript:void(0)"><img src="socnet1_min.png" alt=""></a>
                            <a id="vk_auth" href="javascript:void(0)"><img src="socnet2_min.png" alt=""></a>
                            <a indepth="true" href="authorize_001.html"><img src="socnet3_min.png" alt=""></a>
                        </div>
                    </div>
                    <div id="reg_new_user"><a indepth="true" href="registration.html">Регистрация</a> нового пользователя</div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>

    <div id="menu">
        <div class="top_wrap">
            <div id="menu_left">
                <div class="lilac_item">
                    <a indepth="true" href="horoscope.html">Гороскопы</a>
                </div>
                <div class="lilac_item">
                    <a indepth="true" href="taro.html">Гадания</a>
                </div>
                <div class="lilac_item">
                    <a indepth="true" href="sonnik.html">Сонник</a>
                </div>
                <div class="lilac_item">
                    <a indepth="true" href="numerology.html">Нумерология</a>
                </div>
                <div class="lilac_item">
                    <a indepth="true" href="magic.html">Магия</a>
                </div>
                <div class="lilac_item">
                    <a indepth="true" href="moon.html">Лунный календарь</a>
                </div>
                <div class="lilac_item">
                    <a indepth="true" href="horoscope_001.html">Услуги</a>
                </div>
            </div>
            <div id="menu_right">
                <div class="lilac_item">
                    <a indepth="true" href="news.html">Новости</a>
                </div>
                <div class="lilac_item">
                    <a indepth="true" href="statyi.html">Статьи</a>
                </div>
                <!--
                <div class="lilac_item">
                	<a href="/forum">Форум</a>
                </div>
                 -->
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="feedback">
        <div id="feedback_button"></div>
        <form action="http://astrotarot.ru/user/registration">
            <span>Ваше имя<img src="must.png" alt=""></span><br>
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
            <div id="deep_page">
                <a indepth="true" href="index.html">Главная</a><span class="span_arrow">→</span>Регистрация	                </div>
            <div class="tri_header">Регистрация</div>
            <div id="columns">

                <div class="left_block">
                    <div id="vklad_reg">
                        <div id="vklad_reg_pult">
                            <div class="vklad_reg_pult_item">Простая</div>
                            <div class="vklad_reg_pult_item">Полная</div>
                            <div class="vklad_reg_pult_item" id="vklad_reg_pult_last">Через соц.сеть</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div id="vklad_reg_content">
                        <div class="vklad_reg_item">

                            <form id="simple" action="http://astrotarot.ru/user/registration" method="post" enctype="application/x-www-form-urlencoded">
                                <span>Адрес эл. почты<img src="must.png" alt=""></span><br>

                                <input name="email" id="email" value="" class="reg_form" type="text">		<span>Придумайте пароль<img src="must.png" alt=""></span><br>

                                <input name="pass" id="pass" value="" class="reg_form" type="password">		<span>Подтвердите пароль<img src="must.png" alt=""></span><br>

                                <input name="pass_confirm" id="pass_confirm" value="" class="reg_form" type="password">		<div class="captcha">
                                    <span>Докажите, что вы не робот<img src="must.png" alt=""></span><br>
                                    <div class="captcha_content">
                                        <div class="cap_con_dash"><div id="simple-image-div"><img alt="" src="391b8ff78ff7435a2235dbf839ccfca9.png" height="50" width="200"><input name="captcha[id]" value="391b8ff78ff7435a2235dbf839ccfca9" id="captcha-id" type="hidden"></div><img id="simple-refresh" class="captcha_send" src="captcha_send.png" alt=""></div><div class="clear"></div><span>Введите слово с картинки:</span><br><input value="" id="captcha-input" class="reg_form2" name="captcha[input]" type="text"><br>			</div>
                                </div>
                                <div class="check_left">
                                    <label>
                                        <input name="agree" value="" type="hidden"><input name="agree" id="agree" value="1" class="check" type="checkbox"><span>Я принимаю <a indepth="true" href="23-usloviya-ispolzovaniya.html" target="_top">Условия использования</a> и соглашаюсь с <a indepth="true" href="24-politika-konfidentsialnosti.html" target="_top">политикой конфиденциальности</a> Astro Tarot</span></label>
                                </div>
                                <input class="enter_send" id="simple-submit" src="reg_send.png" type="image">

                                <input name="formtype" value="simple" id="formtype" type="hidden">		<div class="clear"></div>
                            </form>

                        </div>
                        <div class="vklad_reg_item">

                            <form id="full" action="http://astrotarot.ru/user/registration" method="post" enctype="application/x-www-form-urlencoded">
                                <span>Адрес эл. почты<img src="must.png" alt=""></span><br>

                                <input name="email" id="email" value="" class="reg_form" type="text">	<span>Придумайте пароль<img src="must.png" alt=""></span><br>

                                <input name="pass" id="pass" value="" class="reg_form" type="password">	<span>Подтвердите пароль<img src="must.png" alt=""></span><br>

                                <input name="pass_confirm" id="pass_confirm" value="" class="reg_form" type="password">	<div class="reg_full">
                                    <span>Зачем мне вводить личные данные?</span><br>
                                    <div class="text">Составить нумерологический прогноз невозможно без Ф.И.О. и полной даты рождения. Если вы не планируете использовать данный раздел сайта, вернитесь к <a indepth="true" href="registration.html">простой форме регистрации</a></div>
                                    <span>Как вас зовут<img src="must.png" alt=""></span><br>
                                    <div class="form_left_fix" id="form_left_fix">

                                        <input name="fname" id="fname" value="Имя" class="reg_form_mini" type="text">		</div>
                                    <div class="form_left_fix">

                                        <input name="lname" id="lname" value="Фамилия" class="reg_form_mini2" type="text">		</div>

                                    <input name="mname" id="mname" value="Отчество" class="reg_form3" type="text">		<div class="vipadalki" id="tuda_suda">
                                        <span>Дата рождения<img src="must.png" alt=""></span><br>

                                        <select name="byear" id="byear">
                                            <option value="" label="год">год</option>
                                            <option value="2015" label="2015">2015</option>
                                            <option value="2014" label="2014">2014</option>
                                            <option value="2013" label="2013">2013</option>
                                            <option value="2012" label="2012">2012</option>
                                            <option value="2011" label="2011">2011</option>
                                            <option value="2010" label="2010">2010</option>
                                            <option value="2009" label="2009">2009</option>
                                            <option value="2008" label="2008">2008</option>
                                            <option value="2007" label="2007">2007</option>
                                            <option value="2006" label="2006">2006</option>
                                            <option value="2005" label="2005">2005</option>
                                            <option value="2004" label="2004">2004</option>
                                            <option value="2003" label="2003">2003</option>
                                            <option value="2002" label="2002">2002</option>
                                            <option value="2001" label="2001">2001</option>
                                            <option value="2000" label="2000">2000</option>
                                            <option value="1999" label="1999">1999</option>
                                            <option value="1998" label="1998">1998</option>
                                            <option value="1997" label="1997">1997</option>
                                            <option value="1996" label="1996">1996</option>
                                            <option value="1995" label="1995">1995</option>
                                            <option value="1994" label="1994">1994</option>
                                            <option value="1993" label="1993">1993</option>
                                            <option value="1992" label="1992">1992</option>
                                            <option value="1991" label="1991">1991</option>
                                            <option value="1990" label="1990">1990</option>
                                            <option value="1989" label="1989">1989</option>
                                            <option value="1988" label="1988">1988</option>
                                            <option value="1987" label="1987">1987</option>
                                            <option value="1986" label="1986">1986</option>
                                            <option value="1985" label="1985">1985</option>
                                            <option value="1984" label="1984">1984</option>
                                            <option value="1983" label="1983">1983</option>
                                            <option value="1982" label="1982">1982</option>
                                            <option value="1981" label="1981">1981</option>
                                            <option value="1980" label="1980">1980</option>
                                            <option value="1979" label="1979">1979</option>
                                            <option value="1978" label="1978">1978</option>
                                            <option value="1977" label="1977">1977</option>
                                            <option value="1976" label="1976">1976</option>
                                            <option value="1975" label="1975">1975</option>
                                            <option value="1974" label="1974">1974</option>
                                            <option value="1973" label="1973">1973</option>
                                            <option value="1972" label="1972">1972</option>
                                            <option value="1971" label="1971">1971</option>
                                            <option value="1970" label="1970">1970</option>
                                            <option value="1969" label="1969">1969</option>
                                            <option value="1968" label="1968">1968</option>
                                            <option value="1967" label="1967">1967</option>
                                            <option value="1966" label="1966">1966</option>
                                            <option value="1965" label="1965">1965</option>
                                            <option value="1964" label="1964">1964</option>
                                            <option value="1963" label="1963">1963</option>
                                            <option value="1962" label="1962">1962</option>
                                            <option value="1961" label="1961">1961</option>
                                            <option value="1960" label="1960">1960</option>
                                            <option value="1959" label="1959">1959</option>
                                            <option value="1958" label="1958">1958</option>
                                            <option value="1957" label="1957">1957</option>
                                            <option value="1956" label="1956">1956</option>
                                            <option value="1955" label="1955">1955</option>
                                            <option value="1954" label="1954">1954</option>
                                            <option value="1953" label="1953">1953</option>
                                            <option value="1952" label="1952">1952</option>
                                            <option value="1951" label="1951">1951</option>
                                            <option value="1950" label="1950">1950</option>
                                            <option value="1949" label="1949">1949</option>
                                            <option value="1948" label="1948">1948</option>
                                            <option value="1947" label="1947">1947</option>
                                            <option value="1946" label="1946">1946</option>
                                            <option value="1945" label="1945">1945</option>
                                            <option value="1944" label="1944">1944</option>
                                            <option value="1943" label="1943">1943</option>
                                            <option value="1942" label="1942">1942</option>
                                            <option value="1941" label="1941">1941</option>
                                            <option value="1940" label="1940">1940</option>
                                            <option value="1939" label="1939">1939</option>
                                            <option value="1938" label="1938">1938</option>
                                            <option value="1937" label="1937">1937</option>
                                            <option value="1936" label="1936">1936</option>
                                            <option value="1935" label="1935">1935</option>
                                            <option value="1934" label="1934">1934</option>
                                            <option value="1933" label="1933">1933</option>
                                            <option value="1932" label="1932">1932</option>
                                            <option value="1931" label="1931">1931</option>
                                        </select>
                                        <select name="bmonth" id="bmonth">
                                            <option value="" label="месяц">месяц</option>
                                            <option value="01" label="Январь">Январь</option>
                                            <option value="02" label="Февраль">Февраль</option>
                                            <option value="03" label="Март">Март</option>
                                            <option value="04" label="Апрель">Апрель</option>
                                            <option value="05" label="Май">Май</option>
                                            <option value="06" label="Июнь">Июнь</option>
                                            <option value="07" label="Июль">Июль</option>
                                            <option value="08" label="Август">Август</option>
                                            <option value="09" label="Сентябрь">Сентябрь</option>
                                            <option value="10" label="Октябрь">Октябрь</option>
                                            <option value="11" label="Ноябрь">Ноябрь</option>
                                            <option value="12" label="Декабрь">Декабрь</option>
                                        </select>
                                        <select name="bday" id="bday">
                                            <option value="" label="день">день</option>
                                        </select>			<div class="clear"></div><br>
                                        <div class="nujtak">
                                            <span>Пол<img src="must.png" alt=""></span><br>

                                            <select name="gender" id="gender">
                                                <option value="" label="...">...</option>
                                                <option value="m" label="Мужской">Мужской</option>
                                                <option value="f" label="Женский">Женский</option>
                                            </select>			</div>
                                    </div>
                                </div>
                                <div class="captcha">
                                    <span>Докажите, что вы не робот<img src="must.png" alt=""></span><br>
                                    <div class="captcha_content">
                                        <div class="cap_con_dash"><div id="full-image-div"><img alt="" src="aaade231e96f8f14f9e95b195b282862.png" height="50" width="200"><input name="full_captcha[id]" value="aaade231e96f8f14f9e95b195b282862" id="full_captcha-id" type="hidden"></div><img id="full-refresh" class="captcha_send" src="captcha_send.png" alt=""></div><div class="clear"></div><span>Введите слово с картинки:</span><br><input value="" id="full_captcha-input" class="reg_form2" name="full_captcha[input]" type="text"><br>		</div>
                                </div>
                                <div class="check_left">
                                    <label>
                                        <input name="agree_full" value="" type="hidden"><input name="agree_full" id="agree_full" value="1" class="check" type="checkbox"><span>Я принимаю <a indepth="true" href="23-usloviya-ispolzovaniya.html" target="_top">Условия использования</a> и соглашаюсь с <a indepth="true" href="24-politika-konfidentsialnosti.html" target="_top">политикой конфиденциальности</a> Astro Tarot</span></label>
                                </div>
                                <input class="enter_send" id="full-submit" src="reg_send.png" type="image">

                                <input name="formtype" value="full" id="formtype" type="hidden">	<div class="clear"></div>
                            </form>		</div>
                        <div class="vklad_reg_item">
                            <span>Используя аккаунт вашей социальной сети</span><br>
                            <div>
                                <div class="socnet"><a id="fb_auth_register" href="javascript:void(0)"><img src="socnet1.png" alt=""></a></div>
                                <div class="socnet"><a id="vk_auth_register" href="javascript:void(0)"><img src="socnet2.png" alt=""></a></div>
                                <div class="socnet" id="socnet_last"><a indepth="true" href="authorize_001.html"><img src="socnet3.png" alt=""></a></div>
                                <div class="clear"></div>
                            </div>
                            <div class="text">Мы обещаем ничего не публиковать без вашего ведома!</div>
                        </div>
                    </div>
                </div>
                <div class="right_block">
                    <div class="prem_header">Что мне даст полная регистрация?</div>
                    <div class="prem_item">
                        <img src="prem_img1.png" alt="">
                        <div class="item_header">Гороскопы</div>
                        <div class="text">
                            Заходя на сайт, вы имеете возможность читать свой гороскоп сразу, не тратя время на поиск. Активируется функция отправки на e-mail вашего гороскопа (ежедневный, на неделю, на месяц, на год). Возможность заказа персонального гороскопа.
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="prem_item">
                        <img src="prem_img2.png" alt="">
                        <div class="item_header">Гадания</div>
                        <div class="text">
                            Появляется возможность добавлять понравившиеся гадания в избранные. Заходя на сайт, вы получаете Таро-прогноз на сегодня (карта дня). Возможность заказа персонального толкования расклаа.
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="prem_item" id="prem_last">
                        <img src="prem_img3.png" alt="">
                        <div class="item_header">Нумерология</div>
                        <div class="text">
                            Вы получаете персональный нумерологический расчет. Активируется функция отправки на e-mail вашего нумерологического прогноза (ежедневный, на месяц, на год). Возможность заказа персонального нумерологического прогноза.
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="clear"></div>
                <div class="bottom_text">
                    <div class="text_open">
                        Проект Астро Таро посвящен самым интересным и популярным предсказательным системам, таким как астрология, нумерология, гадания на картах Таро и классических картах, руны, гадания по книге перемен И-цзын и многое другое.
                        На Астро Таро вы можете найти онлайн гадания на картах Таро и обычных, классических картах на самые разнообразные темы, получить ответы на самые волнующие вопросы. Наш проект содержит множество разделов онлайн гаданий, посвященных самым важным жизненным сферам, таким как: любовь, отношения, здоровье, семья, дети, будущее, судьба, путешествия, поездки, работа, бизнес, карьера, недвижимость, потеря, пропажа, порча, сглаз и другие разделы, посвященные важным вопросам. А гороскопы и астрологические и нумерологические прогнозы, составленные командой опытных и профессиональных астрологов и нумерологов, помогут вам получить больше информации о себе, своих родных и близких или просто знакомых. Гороскоп, составленный по Солнечному знаку Зодиака, поможет определить характер человека, его способности, таланты, наклонности. В разделах, посвященных астрологии и нумерологии вы можете узнать астрологический и нумерологический прогноз на сегодня, завтра, месяц и год для любого знака Зодиака, а так же узнать о своем предназначении с помощью бесплатного персонального кармического гороскопа.
                        <div class="text_roll">
                            Если вы следите за ритмами Луны, на Астро Таро для вас всегда открыт самый подробный Лунный календарь. Наш Лунный календарь содержит много интересной и полезной информации о влиянии Луны, смены ее фаз и положений в знаках Зодиака. Мы постарались как можно интереснее и доступнее описать каждый Лунный день, чтобы предоставить возможность нашим посетителям заранее планировать начало новых дел и принятия важных решений. Лунный календарь стрижки, свадьбы, здоровья, зачатия, бизнеса поможет вам подобрать наиболее благоприятный день для вышеперечисленных мероприятий, а Лунный календарь садовода поможет подобрать самые благоприятные периоды для ухода за растениями.
                            Так же вы можете получить много интересной и полезной информации о магии, узнать магические обряды и заговоры по привлечению удачи, денег, любви, здоровья и благополучия, по избавлению от негативного магического воздействия, сглаза и порчи.
                        </div>
                    </div>
                    <div class="open_text">
                        <span>развернуть</span> ↓
                    </div>
                </div>	                		                	<div class="clear"></div>
            </div><!-- end of columns -->
        </div><!-- end of whitespace -->
    </div><!-- end of content wrap -->
</div>';
include_once('view/include/footer.php');


