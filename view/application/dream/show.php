<?php

require_once('view/include/constructor.php');
CreateMenu();
CreateFeedbackForm();
print_r($dream);
echo '
</div>    <div id="content_white">
    <div id="content_wrap">
        <div id="white_space">
            <div id="deep_page">
                <a href="http://astrotarot.ru/">Главная</a><span class="span_arrow">→</span><a id="breadcrumbs-dream" href="http://astrotarot.ru/sonnik">Сонник</a><span class="span_arrow">→</span>Абажур	                </div>
            <div class="tri_header">'.ucfirst($dream['dream_name']).'</div>
            <div id="columns">
                <div id="column1">';
                    CreateVotePanel();
                            CreateLeftMenuViewOnePage($allSigns, $Content);
                        echo '<div class="menu_left_item">
                            <div id="book-menu-block" class="menu_header">
                                Сонники<img alt="" src="menu_arrow.png">
                            </div>
                            <div class="menu_content">
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/sonnik/type/sonnik-millera">Сонник Миллера</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/sonnik/type/assiriyskiy-sonnik">Ассирийский сонник</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/sonnik/type/sonnik-vangi">Сонник Ванги</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/sonnik/type/sonnik-freyda">Сонник Фрейда</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/sonnik/type/sonnik-nostradamusa">Сонник Нострадамуса</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/sonnik/type/sonnik-hasse">Сонник Хассе</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/sonnik/type/sonnik-loffa">Сонник Лоффа</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu_left_item">
                            <div id="taro-menu-block" class="menu_header">
                                Таро<img alt="" src="menu_arrow.png">
                            </div>
                            <div class="menu_content">
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/taro/lyubov-i-otnosheniya">Любовь и отношения</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/taro/obschie-gadaniya">Общие гадания</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/taro/rabota-biznes-karera">Работа, бизнес, карьера</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/taro/zdorove">Здоровье</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/taro/samopoznanie">Самопознание</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/taro/buduschee-i-sudba">Будущее и судьба</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/taro/puteshestvie-i-poezdki">Путешествие и поездки</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/taro/nedvijimost">Недвижимость</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/taro/poterya-propaja">Потеря, пропажа</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/taro/porcha-sglaz">Порча, сглаз</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/taro/semya-i-deti">Семья и дети</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/taro/svyatochnyie-gadaniya">Святочные гадания</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu_left_item">
                            <div id="classic-menu-block" class="menu_header">
                                Классические карты<img alt="" src="menu_arrow.png">
                            </div>
                            <div class="menu_content">
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/classic/lyubov-i-otnosheniya">Любовь и отношения</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/classic/rabota-biznes-karera">Работа, бизнес, карьера</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/classic/zdorove">Здоровье</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/classic/buduschee-i-sudba">Будущее и судьба</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/classic/porcha-sglaz">Порча, сглаз</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/classic/obschie-gadaniya">Общие гадания</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu_left_item">
                            <div id="lenorman-menu-block" class="menu_header">
                                Гадания Ленорман<img alt="" src="menu_arrow.png">
                            </div>
                            <div class="menu_content">
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/lenorman/lyubov-i-otnosheniya">Любовь и отношения</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/lenorman/rabota-biznes-karera">Работа, бизнес, карьера</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/lenorman/zdorove">Здоровье</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/lenorman/obschie-gadaniya">Общие гадания</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/lenorman/buduschee-i-sudba">Будущее и судьба</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu_left_item">
                            <div id="rune-menu-block" class="menu_header">
                                Руны<img alt="" src="menu_arrow.png">
                            </div>
                            <div class="menu_content">
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/rune/traditsionnyie-raskladyi">Традиционные расклады</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/rune/lyubov-i-otnosheniya">Любовь и отношения</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/rune/obschie-raskladyi">Общие расклады</a>
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
                                    <a href="http://astrotarot.ru/gadaniya/book/kniga-peremen/26-kniga-peremen">Книга перемен</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/book/kniga-peremen/32-lyubovnaya-kniga-peremen">Любовная книга перемен</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu_left_item">
                            <div id="other-menu-block" class="menu_header">
                                Другие гадания<img alt="" src="menu_arrow.png">
                            </div>
                            <div class="menu_content">
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/gadaniya/other/drugie-gadaniya/29-gadanie-po-tablitse">Гадание по таблице</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu_left_item">
                            <div id="numerology-menu-block" class="menu_header">
                                Нумерология<img alt="" src="menu_arrow.png">
                            </div>
                            <div class="menu_content">
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/numerology/personal">Мои числа</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/numerology/forecast">Прогнозы</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/numerology/compability">Совместимость</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu_left_item">
                            <div id="moon-menu-block" class="menu_header">
                                Лунный календарь<img alt="" src="menu_arrow.png">
                            </div>
                            <div class="menu_content">
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/moon/today">Луна сегодня</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu_left_item">
                            <div id="service-menu-block" class="menu_header">
                                Заказать услугу<img alt="" src="menu_arrow.png">
                            </div>
                            <div class="menu_content">
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/service/horoscope">Индивидуальный гороскоп</a>
                                </div>
                                <div class="menu_content_item">
                                    <a href="http://astrotarot.ru/service/divination">Индивидуальное гадание</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="column2">
                    <div id="article">
                        <div class="sonnik_opisanie">
                            <div class="item_header">Абажур</div>
                            <div class="text">
                                Сонник, к чему снится абажур, видеть абажур во сне            <div class="more">
                                    <a href="http://astrotarot.ru/moon/today">Сны по лунному календарю, сбудется ли сон? →</a>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="sonnik_new_block">
                            <div class="sonnik_new_header">Сонник Фрейда</div>
                            <div class="text"><p>
                                    Если вам приснилось, как вы надевали абажур на лампочку, это свидетельствует о том, что в интимной жизни вы отличаетесь скованностью, зажатостью и поэтому часто страдаете от ложного стыда. Вы почему-то стесняетесь проявлять свою чувственность, сексуальную горячность по отношению к партнеру, а он, в свою очередь, расценивает это как проявление холодности с вашей стороны. Именно по этой причине будут возможны размолвки из-за неудовлетворенных желаний вашего партнера.</p>
                                <p>
                                    Если во сне вы протирали абажур, значит, в интимной жизни вы стремитесь к четкому распределению обязанностей. По вашему мнению, вы вовсе не обязаны лишь отдавать, ничего не получая взамен. А вы не задумывались о том, что партнер может просто не знать, как доставить вам удовольствие, и именно по этой причине возникают все проблемы в интимной жизни? Иногда человек стесняется активно стимулировать другого, потому что боится, что его обвинят в распущенности или несдержанности. Поэтому без откровенного разговора в вашем случае не обойтись.</p>
                                <p>
                                    Сломанный абажур сигнализирует о том, что в вашей интимной жизни не все обстоит так благополучно, как это кажется на первый взгляд. И возможно, причина этого заключается в том, что вы утратили сексуальный интерес друг к другу, у вас настал период пресыщения, когда вы не можете доставить друг другу удовольствие, как в прежние времена. Вам можно посоветовать попробовать новые позы, новые методы стимуляции.</p>
                                <p>
                                    Пыльный абажур свидетельствует о том, что в ваших отношениях наступил временный разлад, вызванный охлаждением к сексу кого-либо из партнеров. А значит, что-то надо предпринимать, чтобы вернуть утраченную гармонию.</p>
                            </div>
                        </div>
                        <div class="sonnik_new_block">
                            <div class="sonnik_new_header">Сонник Хассе</div>
                            <div class="text"><p>
                                    Уныние; вообще абажур - ожидай милости.</p>
                            </div>
                        </div>
                        <div class="sonnik_header">Что приснилось?</div>
                        <div class="sonnik_search">
                            <form action="http://astrotarot.ru/sonnik/word/abajur">
                                <input id="word-search" class="sonnik_input" name="squery" placeholder="Наберите ключевое слово из вашего сна" value="" type="text">
                                <input id="word-search-button" class="sonnik_send" value="Поиск" type="submit">
                            </form>
                        </div>
                        <div id="also">
                            <div class="item_header">Прогнозы и гадания на сегодня</div>
                            <div class="also_item">
                                <span>Таро</span><br>
                                <a href="http://astrotarot.ru/gadaniya/taro/obschie-gadaniya/30-rasklad--karta-dnya">Расклад — Карта Дня</a>
                            </div>
                            <div class="also_item">
                                <span>Классические карты</span><br>
                                <a href="http://astrotarot.ru/gadaniya/classic/buduschee-i-sudba/120-rasklad-na-den">Расклад — На день</a>
                            </div>
                            <div class="also_item">
                                <span>Гороскопы</span><br>
                                <a href="http://astrotarot.ru/horoscope">Гороскопы для знаков зодиака</a>
                            </div>
                            <div class="also_item">
                                <span>Нумерология</span><br>
                                <a href="http://astrotarot.ru/numerology/forecast/day">Прогноз — Персональный день</a>
                            </div>
                            <div class="also_item">
                                <span>Лунный календарь</span><br>
                                <a href="http://astrotarot.ru/moon/today">Луна сегодня</a>
                            </div>
                            <div class="also_item">
                                <span>Руны</span><br>
                                <a href="http://astrotarot.ru/gadaniya/rune/traditsionnyie-raskladyi/31-rasklad--runa-dnya">Расклад — Руна дня</a>
                            </div>
                            <div class="also_item">
                                <span>Книга перемен</span><br>
                                <a href="http://astrotarot.ru/gadaniya/book/kniga-peremen/26-kniga-peremen">Книга перемен</a>
                            </div>


                            <div class="soc_line">
                                <div data-user="727286693" class="pluso" data-background="transparent" data-options="small,round,line,horizontal,nocounter,theme=04" data-services="vkontakte,facebook,twitter,email"><div class="pluso-010011000110-04"><span class="pluso-wrap" style="background: transparent none repeat scroll 0% 0%;"><a href="http://astrotarot.ru/sonnik/word/abajur" title="ВКонтакте" class="pluso-vkontakte"></a><a href="http://astrotarot.ru/sonnik/word/abajur" title="Facebook" class="pluso-facebook"></a><a href="http://astrotarot.ru/sonnik/word/abajur" title="Twitter" class="pluso-twitter"></a><a href="http://astrotarot.ru/sonnik/word/abajur" title="Отправить на email" class="pluso-email"></a><a href="http://pluso.ru/" class="pluso-more"></a></span></div></div>
                            </div></div>    <div class="big_like" onclick="dreamVote()">
                            <div id="vote-count-1334" class="big_like_count">
                                1        </div>
                        </div>
                        <div id="comments">
                            <div class="item_header">Отзывы</div>
                            <div class="the_same_comment">
                                <div class="the_same_header">Для добавления комментария:</div>
                                <div class="the_same_header">Необходимо <a class="ident-enter" href="#">авторизоваться</a> или <a href="http://astrotarot.ru/user/registration">зарегистрироваться</a></div>
                            </div>
                            <div id="comments-items">
                            </div>
                        </div>
                        <div id="abuse-comment-form" style="z-index: 1000;">
                            <div class="reference">
                                <form action="http://astrotarot.ru/sonnik/word/abajur">
                                    <table>
                                        <tbody><tr>
                                            <td>
                                                <textarea id="abuse-field" rows="3" cols="29"></textarea>
                                                <input id="comment" type="hidden">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table>
                                                    <tbody><tr>
                                                        <td>
                                                            <div class="button" style="position: static;">
                                                                <div class="button_left"></div>
                                                                <div class="button_content">
                                                                    <a href="javascript:void(0)" onclick="sendAbuse()">Оставить жалобу</a></div>
                                                                <div class="button_right"></div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="button" style="position: static;">
                                                                <div class="button_left"></div>
                                                                <div class="button_content">
                                                                    <a href="javascript:void(0)" onclick="closeAbuse()">Отмена</a></div>
                                                                <div class="button_right"></div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody></table>
                                            </td>
                                        </tr>
                                        </tbody></table>
                                </form>
                            </div>
                        </div></div>		                	</div>
                <div id="column3">
                    <div id="popular">
                        <div class="popular_header">Популярное на сайте</div>
                        <div class="popular_item">
                            <div class="popular_count">1</div>
                            <div class="popular_text">
                                <span>Книга перемен</span><br>
                                <a href="http://astrotarot.ru/gadaniya/book/kniga-peremen/26-kniga-peremen">
                                    Книга перемен				</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="popular_item">
                            <div class="popular_count">2</div>
                            <div class="popular_text">
                                <span>Книга перемен</span><br>
                                <a href="http://astrotarot.ru/gadaniya/book/kniga-peremen/32-lyubovnaya-kniga-peremen">
                                    Любовная книга перемен				</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="popular_item">
                            <div class="popular_count">3</div>
                            <div class="popular_text">
                                <span>Таро</span><br>
                                <a href="http://astrotarot.ru/gadaniya/taro/obschie-gadaniya/30-rasklad--karta-dnya">
                                    Расклад — Карта Дня				</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="popular_item">
                            <div class="popular_count">4</div>
                            <div class="popular_text">
                                <span>Таро</span><br>
                                <a href="http://astrotarot.ru/gadaniya/taro/lyubov-i-otnosheniya/378-rasklad--lyubit-ne-lyubit">
                                    Расклад — Любит, не любит				</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="popular_item">
                            <div class="popular_count">5</div>
                            <div class="popular_text">
                                <span>Руны</span><br>
                                <a href="http://astrotarot.ru/gadaniya/rune/traditsionnyie-raskladyi/31-rasklad--runa-dnya">
                                    Расклад — Руна дня				</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="popular_item">
                            <div class="popular_count">6</div>
                            <div class="popular_text">
                                <span>Таро</span><br>
                                <a href="http://astrotarot.ru/gadaniya/taro/rabota-biznes-karera/55-rasklad--prognoz-professionalnoy-jizni">
                                    Расклад — Прогноз профессиональной жизни				</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>		                		            <div class="banner_right_200x350">
                        <a href="http://astrotarot.ru/service/divination/gadanie-na-lyubov" target="blank">
                            <img class="eeyjminjzkqcayapdbbt" src="54d7cf12641bf.jpg" alt="">
                        </a>
                    </div>
                    <div id="right_hrskp">
                        <div class="actual_header">Гороскопы</div>
                        <div class="hrskp_item">
                            <img src="sign_small1.png" alt="">
                            <div class="item_header"><a href="http://astrotarot.ru/horoscope/aries/today"><span>Овен</span><br>21.03-20.04</a></div>
                        </div>
                        <div class="hrskp_item">
                            <img src="sign_small2.png" alt="">
                            <div class="item_header"><a href="http://astrotarot.ru/horoscope/taurus/today"><span>Телец</span><br>21.04-20.05</a></div>
                        </div>
                        <div class="clear"></div>
                        <div class="hrskp_item">
                            <img src="sign_small3.png" alt="">
                            <div class="item_header"><a href="http://astrotarot.ru/horoscope/gemini/today"><span>Близнецы</span><br>21.05-21.06</a></div>
                        </div>
                        <div class="hrskp_item">
                            <img src="sign_small4.png" alt="">
                            <div class="item_header"><a href="http://astrotarot.ru/horoscope/cancer/today"><span>Рак</span><br>22.06-22.07</a></div>
                        </div>
                        <div class="clear"></div>
                        <div class="hrskp_item">
                            <img src="sign_small5.png" alt="">
                            <div class="item_header"><a href="http://astrotarot.ru/horoscope/leo/today"><span>Лев</span><br>23.07-23.08</a></div>
                        </div>
                        <div class="hrskp_item">
                            <img src="sign_small6.png" alt="">
                            <div class="item_header"><a href="http://astrotarot.ru/horoscope/virgo/today"><span>Дева</span><br>24.08-23.09</a></div>
                        </div>
                        <div class="clear"></div>
                        <div class="hrskp_item">
                            <img src="sign_small7.png" alt="">
                            <div class="item_header"><a href="http://astrotarot.ru/horoscope/libra/today"><span>Весы</span><br>24.09-23.10</a></div>
                        </div>
                        <div class="hrskp_item">
                            <img src="sign_small8.png" alt="">
                            <div class="item_header"><a href="http://astrotarot.ru/horoscope/scorpio/today"><span>Скорпион</span><br>24.10-22.11</a></div>
                        </div>
                        <div class="clear"></div>
                        <div class="hrskp_item">
                            <img src="sign_small9.png" alt="">
                            <div class="item_header"><a href="http://astrotarot.ru/horoscope/sagittarius/today"><span>Стрелец</span><br>23.11-21.12</a></div>
                        </div>
                        <div class="hrskp_item">
                            <img src="sign_small10.png" alt="">
                            <div class="item_header"><a href="http://astrotarot.ru/horoscope/capricorn/today"><span>Козерог</span><br>22.12-20.01</a></div>
                        </div>
                        <div class="clear"></div>
                        <div class="hrskp_item">
                            <img src="sign_small11.png" alt="">
                            <div class="item_header"><a href="http://astrotarot.ru/horoscope/aquarius/today"><span>Водолей</span><br>21.01-20.02</a></div>
                        </div>
                        <div class="hrskp_item">
                            <img src="sign_small12.png" alt="">
                            <div class="item_header"><a href="http://astrotarot.ru/horoscope/pisces/today"><span>Рыбы</span><br>21.02-20.03</a></div>
                        </div>
                        <div class="clear"></div>
                        <div class="more"><a href="http://astrotarot.ru/horoscope">все гороскопы →</a></div>
                    </div>		                				                		    		                		            <div id="banner_right_200x350" style="margin-bottom: 25px;">
                        <a href="http://astrotarot.ru/service/horoscope/data-svadbyi" target="blank">
                            <img class="eeyjminjzkqcayapdbbt" src="54d7cfbcd79b0.jpg" alt="">
                        </a>
                    </div>
                </div>
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
</div><!-- end of content -->
';
