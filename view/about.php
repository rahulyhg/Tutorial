<?php

require_once('view/include/constructor.php');
CreateMenu();
echo ' </div>
    <div id="feedback">
        <div id="feedback_button"></div>
        <form action="http://astrotarot.ru/statyi/content/17-no-tag/46-o-proekte">
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
            </div>
            <div class="tri_header">О проекте</div>
            <div id="columns">
                <div id="column1">
                    <div class="vote_ask">
                        <div class="vote_header">Какие прогнозы вы считаете самыми правдивыми?</div>
                        <div class="vote_content">
                            <form action="http://astrotarot.ru/statyi/content/17-no-tag/46-o-proekte">
                                <label>
                                    <input name="4" type="checkbox">
                                    <div>Прогнозы ченнелеров (контактеров с инопланетными цивилизациями)</div>
                                </label>
                                <label>
                                    <input name="3" type="checkbox">
                                    <div>Прогнозы нумерологов</div>
                                </label>
                                <label>
                                    <input name="2" type="checkbox">
                                    <div>Прогнозы астрологов</div>
                                </label>
                                <label>
                                    <input name="1" type="checkbox">
                                    <div>Прогнозы экстрасенсов</div>
                                </label>
                                <input id="poll" value="Голосовать" type="submit">
                            </form>
                        </div>
                    </div>
                    <div id="orange_menu">
                        <div class="menu_left_item">
                            <div id="horoscope-menu-block" class="menu_header">
                                Гороскопы<img alt="" src="menu_arrow.png">
                            </div>
                            <div class="menu_content">
                                <div class="menu_content_item">
                                    <a indepth="true" href="today.html"><span>21.03-20.04 - </span>Овен</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="today_001.html"><span>21.04-20.05 - </span>Телец</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="today_002.html"><span>21.05-21.06 - </span>Близнецы</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="today_003.html"><span>22.06-22.07 - </span>Рак</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="today_004.html"><span>23.07-23.08 - </span>Лев</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="today_005.html"><span>24.08-23.09 - </span>Дева</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="today_006.html"><span>24.09-23.10 - </span>Весы</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="today_007.html"><span>24.10-22.11 - </span>Скорпион</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="today_008.html"><span>23.11-21.12 - </span>Стрелец</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="today_009.html"><span>22.12-20.01 - </span>Козерог</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="today_010.html"><span>21.01-20.02 - </span>Водолей</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="today_011.html"><span>21.02-20.03 - </span>Рыбы</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu_left_item">
                            <div id="book-menu-block" class="menu_header">
                                Сонники<img alt="" src="menu_arrow.png">
                            </div>
                            <div class="menu_content">
                                <div class="menu_content_item">
                                    <a indepth="true" href="sonnik-millera.html">Сонник Миллера</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="assiriyskiy-sonnik.html">Ассирийский сонник</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="sonnik-vangi.html">Сонник Ванги</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="sonnik-freyda.html">Сонник Фрейда</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="sonnik-nostradamusa.html">Сонник Нострадамуса</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="sonnik-hasse.html">Сонник Хассе</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="sonnik-loffa.html">Сонник Лоффа</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu_left_item">
                            <div id="taro-menu-block" class="menu_header">
                                Таро<img alt="" src="menu_arrow.png">
                            </div>
                            <div class="menu_content">
                                <div class="menu_content_item">
                                    <a indepth="true" href="lyubov-i-otnosheniya.html">Любовь и отношения</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="obschie-gadaniya.html">Общие гадания</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="rabota-biznes-karera.html">Работа, бизнес, карьера</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="zdorove.html">Здоровье</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="samopoznanie.html">Самопознание</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="buduschee-i-sudba.html">Будущее и судьба</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="puteshestvie-i-poezdki.html">Путешествие и поездки</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="nedvijimost.html">Недвижимость</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="poterya-propaja.html">Потеря, пропажа</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="porcha-sglaz.html">Порча, сглаз</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="semya-i-deti.html">Семья и дети</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="svyatochnyie-gadaniya.html">Святочные гадания</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu_left_item">
                            <div id="classic-menu-block" class="menu_header">
                                Классические карты<img alt="" src="menu_arrow.png">
                            </div>
                            <div class="menu_content">
                                <div class="menu_content_item">
                                    <a indepth="true" href="lyubov-i-otnosheniya_001.html">Любовь и отношения</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="rabota-biznes-karera_001.html">Работа, бизнес, карьера</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="zdorove_001.html">Здоровье</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="buduschee-i-sudba_001.html">Будущее и судьба</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="porcha-sglaz_001.html">Порча, сглаз</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="obschie-gadaniya_001.html">Общие гадания</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu_left_item">
                            <div id="lenorman-menu-block" class="menu_header">
                                Гадания Ленорман<img alt="" src="menu_arrow.png">
                            </div>
                            <div class="menu_content">
                                <div class="menu_content_item">
                                    <a indepth="true" href="lyubov-i-otnosheniya_002.html">Любовь и отношения</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="rabota-biznes-karera_002.html">Работа, бизнес, карьера</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="zdorove_002.html">Здоровье</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="obschie-gadaniya_002.html">Общие гадания</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="buduschee-i-sudba_002.html">Будущее и судьба</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu_left_item">
                            <div id="rune-menu-block" class="menu_header">
                                Руны<img alt="" src="menu_arrow.png">
                            </div>
                            <div class="menu_content">
                                <div class="menu_content_item">
                                    <a indepth="true" href="traditsionnyie-raskladyi.html">Традиционные расклады</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="lyubov-i-otnosheniya_003.html">Любовь и отношения</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="obschie-raskladyi.html">Общие расклады</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu_left_item">
                        </div>
                        <div class="menu_left_item">
                        </div>
                        <div class="menu_left_item">
                            <div id="book-menu-block" class="menu_header">
                                Книга перемен<img alt="" src="menu_arrow.png">
                            </div>
                            <div class="menu_content">
                                <div class="menu_content_item">
                                    <a indepth="true" href="26-kniga-peremen.html">Книга перемен</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="32-lyubovnaya-kniga-peremen.html">Любовная книга перемен</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu_left_item">
                            <div id="other-menu-block" class="menu_header">
                                Другие гадания<img alt="" src="menu_arrow.png">
                            </div>
                            <div class="menu_content">
                                <div class="menu_content_item">
                                    <a indepth="true" href="29-gadanie-po-tablitse.html">Гадание по таблице</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu_left_item">
                            <div id="numerology-menu-block" class="menu_header">
                                Нумерология<img alt="" src="menu_arrow.png">
                            </div>
                            <div class="menu_content">
                                <div class="menu_content_item">
                                    <a indepth="true" href="personal.html">Мои числа</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="forecast.html">Прогнозы</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="compability.html">Совместимость</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu_left_item">
                            <div id="moon-menu-block" class="menu_header">
                                Лунный календарь<img alt="" src="menu_arrow.png">
                            </div>
                            <div class="menu_content">
                                <div class="menu_content_item">
                                    <a indepth="true" href="today_012.html">Луна сегодня</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu_left_item">
                            <div id="service-menu-block" class="menu_header">
                                Заказать услугу<img alt="" src="menu_arrow.png">
                            </div>
                            <div class="menu_content">
                                <div class="menu_content_item">
                                    <a indepth="true" href="horoscope_001.html">Индивидуальный гороскоп</a>
                                </div>
                                <div class="menu_content_item">
                                    <a indepth="true" href="divination.html">Индивидуальное гадание</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="column2">
                    <div id="article_full">
                        <div class="article_full_item">
                            <div class="data">April 13, 2014</div>
                            <div class="item_header">О проекте</div>
                            <div class="text"><p>
                                    Проект Астро Таро посвящен самым интересным и популярным предсказательным системам, таким как астрология, нумерология, гадания на картах Таро и классических картах, руны, гадания по книге перемен И-цзын и многое другое. На Астро Таро вы можете найти онлайн гадания на картах Таро и обычных, классических картах на самые разнообразные темы, получить ответы на самые волнующие вопросы. Наш проект содержит множество разделов онлайн гаданий, посвященных самым важным жизненным сферам, таким как: любовь, отношения, здоровье, семья, дети, будущее, судьба, путешествия, поездки, работа, бизнес, карьера, недвижимость, потеря, пропажа, порча, сглаз и другие разделы, посвященные важным вопросам. А гороскопы и астрологические и нумерологические прогнозы, составленные командой опытных и профессиональных астрологов и нумерологов, помогут вам получить больше информации о себе, своих родных и близких или просто знакомых. Гороскоп, составленный по Солнечному знаку Зодиака, поможет определить характер человека, его способности, таланты, наклонности. В разделах, посвященных астрологии и нумерологии вы можете узнать астрологический и нумерологический прогноз на сегодня, завтра, месяц и год для любого знака Зодиака, а так же узнать о своем предназначении с помощью бесплатного персонального кармического гороскопа.</p>
                                <p>
                                    Если вы следите за ритмами Луны, на Астро Таро для вас всегда открыт самый подробный Лунный календарь. Наш Лунный календарь содержит много интересной и полезной информации о влиянии Луны, смены ее фаз и положений в знаках Зодиака. Мы постарались как можно интереснее и доступнее описать каждый Лунный день, чтобы предоставить возможность нашим посетителям заранее планировать начало новых дел и принятия важных решений. Лунный календарь стрижки, свадьбы, здоровья, зачатия, бизнеса поможет вам подобрать наиболее благоприятный день для вышеперечисленных мероприятий, а Лунный календарь садовода поможет подобрать самые благоприятные периоды для ухода за растениями. Так же вы можете получить много интересной и полезной информации о магии, узнать магические обряды и заговоры по привлечению удачи, денег, любви, здоровья и благополучия, по избавлению от негативного магического воздействия, сглаза и порчи.</p>
                                <p>
                                    <strong>Дополнительная информация:</strong></p>
                                <p>
                                    - <a indepth="true" href="23-usloviya-ispolzovaniya.html">Условия использования сервисов Astro Tarot</a><br>
                                    - <a indepth="true" href="24-politika-konfidentsialnosti.html">Политика конфиденциальности Astro Tarot</a><br>
                                    - <a href="http://astrotarot.ru/statyi/content/17-no-tag/75-usloviya-kopirovaniya-materialov-s-sayta-astro-tarot">Условия копирования материалов с сайта Astro Tarot</a><br>
                                    - <a href="http://astrotarot.ru/statyi/content/17-no-tag/48-pravila-dobavleniya-kommentariev">Правила добавления комментариев</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="column3">
                    <div id="taging"><div class="actual_header">Популярные теги</div><div class="tag_item"><a href="http://astrotarot.ru/statyi/tag/56-bliznetsyi">Близнецы</a></div><div class="tag_item"><a href="http://astrotarot.ru/statyi/tag/61-skorpion">Скорпион</a></div><div class="tag_item"><a href="http://astrotarot.ru/statyi/tag/58-lev">Лев</a></div><div class="tag_item"><a href="http://astrotarot.ru/statyi/tag/27-prognozyi-i-predskazaniya">Прогнозы и предсказания</a></div><div class="clear"></div></div>		                					                					                				                				                				                				                				                		<div id="popular">
                        <div class="popular_header">Популярное на сайте</div>
                        <div class="popular_item">
                            <div class="popular_count">1</div>
                            <div class="popular_text">
                                <span>Книга перемен</span><br>
                                <a indepth="true" href="26-kniga-peremen.html">
                                    Книга перемен				</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="popular_item">
                            <div class="popular_count">2</div>
                            <div class="popular_text">
                                <span>Книга перемен</span><br>
                                <a indepth="true" href="32-lyubovnaya-kniga-peremen.html">
                                    Любовная книга перемен				</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="popular_item">
                            <div class="popular_count">3</div>
                            <div class="popular_text">
                                <span>Таро</span><br>
                                <a indepth="true" href="30-rasklad--karta-dnya.html">
                                    Расклад — Карта Дня				</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="popular_item">
                            <div class="popular_count">4</div>
                            <div class="popular_text">
                                <span>Руны</span><br>
                                <a indepth="true" href="31-rasklad--runa-dnya.html">
                                    Расклад — Руна дня				</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="popular_item">
                            <div class="popular_count">5</div>
                            <div class="popular_text">
                                <span>Таро</span><br>
                                <a indepth="true" href="378-rasklad--lyubit-ne-lyubit.html">
                                    Расклад — Любит, не любит				</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="popular_item">
                            <div class="popular_count">6</div>
                            <div class="popular_text">
                                <span>Таро</span><br>
                                <a indepth="true" href="55-rasklad--prognoz-professionalnoy-jizni.html">
                                    Расклад — Прогноз профессиональной жизни				</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>		                		            <div class="banner_right_200x350">
                        <a indepth="true" href="gadanie-na-lyubov.html" target="blank">
                            <img src="54d7cf12641bf.jpg" alt="">
                        </a>
                    </div>
                    <div id="right_hrskp">
                        <div class="actual_header">Гороскопы</div>
                        <div class="hrskp_item">
                            <img src="sign_small1.png" alt="">
                            <div class="item_header"><a indepth="true" href="today.html"><span>Овен</span><br>21.03-20.04</a></div>
                        </div>
                        <div class="hrskp_item">
                            <img src="sign_small2.png" alt="">
                            <div class="item_header"><a indepth="true" href="today_001.html"><span>Телец</span><br>21.04-20.05</a></div>
                        </div>
                        <div class="clear"></div>
                        <div class="hrskp_item">
                            <img src="sign_small3.png" alt="">
                            <div class="item_header"><a indepth="true" href="today_002.html"><span>Близнецы</span><br>21.05-21.06</a></div>
                        </div>
                        <div class="hrskp_item">
                            <img src="sign_small4.png" alt="">
                            <div class="item_header"><a indepth="true" href="today_003.html"><span>Рак</span><br>22.06-22.07</a></div>
                        </div>
                        <div class="clear"></div>
                        <div class="hrskp_item">
                            <img src="sign_small5.png" alt="">
                            <div class="item_header"><a indepth="true" href="today_004.html"><span>Лев</span><br>23.07-23.08</a></div>
                        </div>
                        <div class="hrskp_item">
                            <img src="sign_small6.png" alt="">
                            <div class="item_header"><a indepth="true" href="today_005.html"><span>Дева</span><br>24.08-23.09</a></div>
                        </div>
                        <div class="clear"></div>
                        <div class="hrskp_item">
                            <img src="sign_small7.png" alt="">
                            <div class="item_header"><a indepth="true" href="today_006.html"><span>Весы</span><br>24.09-23.10</a></div>
                        </div>
                        <div class="hrskp_item">
                            <img src="sign_small8.png" alt="">
                            <div class="item_header"><a indepth="true" href="today_007.html"><span>Скорпион</span><br>24.10-22.11</a></div>
                        </div>
                        <div class="clear"></div>
                        <div class="hrskp_item">
                            <img src="sign_small9.png" alt="">
                            <div class="item_header"><a indepth="true" href="today_008.html"><span>Стрелец</span><br>23.11-21.12</a></div>
                        </div>
                        <div class="hrskp_item">
                            <img src="sign_small10.png" alt="">
                            <div class="item_header"><a indepth="true" href="today_009.html"><span>Козерог</span><br>22.12-20.01</a></div>
                        </div>
                        <div class="clear"></div>
                        <div class="hrskp_item">
                            <img src="sign_small11.png" alt="">
                            <div class="item_header"><a indepth="true" href="today_010.html"><span>Водолей</span><br>21.01-20.02</a></div>
                        </div>
                        <div class="hrskp_item">
                            <img src="sign_small12.png" alt="">
                            <div class="item_header"><a indepth="true" href="today_011.html"><span>Рыбы</span><br>21.02-20.03</a></div>
                        </div>
                        <div class="clear"></div>
                        <div class="more"><a indepth="true" href="horoscope.html">все гороскопы →</a></div>
                    </div>		                				                		            <div id="banner_right_200x350" style="margin-bottom: 25px;">
                        <a indepth="true" href="goroskop-na-god.html" target="blank">
                            <img src="54d7d476098f4.jpg" alt="">
                        </a>
                    </div>
                    <div id="banner_right_200x350" style="margin-bottom: 25px;">
                        <a indepth="true" href="data-svadbyi.html" target="blank">
                            <img src="54d7cfbcd79b0.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="clear"></div>

                </div>	                		                	<div class="clear"></div>
            </div><!-- end of columns -->
        </div><!-- end of whitespace -->
    </div><!-- end of content wrap -->
</div>';
include_once('view/include/footer.php');



