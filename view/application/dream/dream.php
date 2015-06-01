<?php

require_once('view/include/constructor.php');
CreateMenu();
CreateFeedbackForm();
echo    '
<div id="content_white">
    <div id="content_wrap">
        <div id="white_space">

            <div class="tri_header">Cartea viselor</div>
            <div id="columns">
                <div id="column1">';
                    CreateVotePanel();

                    echo '<div id="orange_menu">
                        <div class="menu_left_item">
                            <div id="horoscope-menu-block" class="menu_header">
                                Гороскопы<img alt="" src="menu_arrow.png">
                            </div>';

                        echo '</div>

                    </div>
                </div>
                <div id="column2">
                    <div id="article">
                        <div class="sonnik_header">Ce ati visat?</div>
                        <div class="sonnik_search">
                            <form action="http://astrotarot.ru/sonnik">
                                <input value="" id="word-search" class="sonnik_input" name="squery" placeholder="Cautati cuvintul cheie din vis" type="text">
                                <input id="word-search-button" class="sonnik_send" value="Поиск" type="submit">
                            </form>
                        </div>
                        <div class="sonnik_header">Cautati dupa alfabet</div>';
                        CreateAlphabeat();
                        echo '<div class="sonnik_here">А</div>
                        <div class="sonnik_list">
                            <div class="list_item">
                                <a href="http://astrotarot.ru/sonnik/word/abajur">Абажур</a>
                                <a href="http://astrotarot.ru/sonnik/word/abort">Аборт</a>
                                <a href="http://astrotarot.ru/sonnik/word/abrikos">Абрикос</a>
                                <a href="http://astrotarot.ru/sonnik/word/avantyura">Авантюра</a>
                                <a href="http://astrotarot.ru/sonnik/word/avariya">Авария</a>
                                <a href="http://astrotarot.ru/sonnik/word/avtobus">Автобус</a>
                                <a href="http://astrotarot.ru/sonnik/word/avtomobil">Автомобиль</a>
                                <a href="http://astrotarot.ru/sonnik/word/avtor">Автор</a>
                                <a href="http://astrotarot.ru/sonnik/word/agent">Агент</a>
                                <a href="http://astrotarot.ru/sonnik/word/agnets">Агнец</a>
                                <a href="http://astrotarot.ru/sonnik/word/ad">Ад</a>
                                <a href="http://astrotarot.ru/sonnik/word/adam-i-eva">Адам и Ева</a>
                                <a href="http://astrotarot.ru/sonnik/word/advokat">Адвокат</a>
                                <a href="http://astrotarot.ru/sonnik/word/administrirovat">Администрировать</a>
                                <a href="http://astrotarot.ru/sonnik/word/admiral">Адмирал</a>
                                <a href="http://astrotarot.ru/sonnik/word/adres">Адрес</a>
                                <a href="http://astrotarot.ru/sonnik/word/azartnaya-igra">Азартная игра</a>
                                <a href="http://astrotarot.ru/sonnik/word/azbuka">Азбука</a>
                                <a href="http://astrotarot.ru/sonnik/word/aist">Аист</a>
                                <a href="http://astrotarot.ru/sonnik/word/aysberg">Айсберг</a>
                                <a href="http://astrotarot.ru/sonnik/word/akademiya">Академия</a>
                                <a href="http://astrotarot.ru/sonnik/word/akatsiya">Акация</a>
                                <a href="http://astrotarot.ru/sonnik/word/akkordeon">Аккордеон</a>
                                <a href="http://astrotarot.ru/sonnik/word/akkordyi">Аккорды</a>
                                <a href="http://astrotarot.ru/sonnik/word/akkumulyator">Аккумулятор</a>
                                <a href="http://astrotarot.ru/sonnik/word/akrobat">Акробат</a>
                                <a href="http://astrotarot.ru/sonnik/word/akteryi">Актеры</a>
                            </div>
                            <div class="list_item">
                                <a href="http://astrotarot.ru/sonnik/word/akula">Акула</a>
                                <a href="http://astrotarot.ru/sonnik/word/akusherka">Акушерка</a>
                                <a href="http://astrotarot.ru/sonnik/word/alebarda-starinnoe-orujie">Алебарда (старинное оружие)</a>
                                <a href="http://astrotarot.ru/sonnik/word/alleya">Аллея</a>
                                <a href="http://astrotarot.ru/sonnik/word/almaz">Алмаз</a>
                                <a href="http://astrotarot.ru/sonnik/word/altar">Алтарь</a>
                                <a href="http://astrotarot.ru/sonnik/word/albom">Альбом</a>
                                <a href="http://astrotarot.ru/sonnik/word/alyuminiy">Алюминий</a>
                                <a href="http://astrotarot.ru/sonnik/word/ambar">Амбар</a>
                                <a href="http://astrotarot.ru/sonnik/word/amvon">Амвон</a>
                                <a href="http://astrotarot.ru/sonnik/word/amerika">Америка</a>
                                <a href="http://astrotarot.ru/sonnik/word/amputatsiya">Ампутация</a>
                                <a href="http://astrotarot.ru/sonnik/word/amulet">Амулет</a>
                                <a href="http://astrotarot.ru/sonnik/word/amunitsiya">Амуниция</a>
                                <a href="http://astrotarot.ru/sonnik/word/amur">Амур</a>
                                <a href="http://astrotarot.ru/sonnik/word/amfiteatr">Амфитеатр</a>
                                <a href="http://astrotarot.ru/sonnik/word/ananas">Ананас</a>
                                <a href="http://astrotarot.ru/sonnik/word/angelyi">Ангелы</a>
                                <a href="http://astrotarot.ru/sonnik/word/angina">Ангина</a>
                                <a href="http://astrotarot.ru/sonnik/word/anekdot">Анекдот</a>
                                <a href="http://astrotarot.ru/sonnik/word/anima-animus">Анима, анимус</a>
                                <a href="http://astrotarot.ru/sonnik/word/anons">Анонс</a>
                                <a href="http://astrotarot.ru/sonnik/word/antilopa">Антилопа</a>
                                <a href="http://astrotarot.ru/sonnik/word/apelsinyi">Апельсины</a>
                                <a href="http://astrotarot.ru/sonnik/word/apokalipsis">Апокалипсис</a>
                                <a href="http://astrotarot.ru/sonnik/word/appetit">Аппетит</a>
                                <a href="http://astrotarot.ru/sonnik/word/apteka">Аптека</a>
                            </div>
                            <div class="list_item">
                                <a href="http://astrotarot.ru/sonnik/word/aptekar">Аптекарь</a>
                                <a href="http://astrotarot.ru/sonnik/word/arak">Арак</a>
                                <a href="http://astrotarot.ru/sonnik/word/arba">Арба</a>
                                <a href="http://astrotarot.ru/sonnik/word/arbuz">Арбуз</a>
                                <a href="http://astrotarot.ru/sonnik/word/arest">Арест</a>
                                <a href="http://astrotarot.ru/sonnik/word/arka">Арка</a>
                                <a href="http://astrotarot.ru/sonnik/word/arkan">Аркан</a>
                                <a href="http://astrotarot.ru/sonnik/word/armiya">Армия</a>
                                <a href="http://astrotarot.ru/sonnik/word/artillerist">Артиллерист</a>
                                <a href="http://astrotarot.ru/sonnik/word/artilleriya">Артиллерия</a>
                                <a href="http://astrotarot.ru/sonnik/word/artist">Артист</a>
                                <a href="http://astrotarot.ru/sonnik/word/arfa">Арфа</a>
                                <a href="http://astrotarot.ru/sonnik/word/arhetip">Архетип</a>
                                <a href="http://astrotarot.ru/sonnik/word/arhiepiskop">Архиепископ</a>
                                <a href="http://astrotarot.ru/sonnik/word/asketizm">Аскетизм</a>
                                <a href="http://astrotarot.ru/sonnik/word/astma">Астма</a>
                                <a href="http://astrotarot.ru/sonnik/word/astra">Астра</a>
                                <a href="http://astrotarot.ru/sonnik/word/astronomiya">Астрономия</a>
                                <a href="http://astrotarot.ru/sonnik/word/atakovat">Атаковать</a>
                                <a href="http://astrotarot.ru/sonnik/word/atlas">Атлас</a>
                                <a href="http://astrotarot.ru/sonnik/word/atlas-materiya">Атлас (материя)</a>
                                <a href="http://astrotarot.ru/sonnik/word/atlet">Атлет</a>
                                <a href="http://astrotarot.ru/sonnik/word/attestat">Аттестат</a>
                                <a href="http://astrotarot.ru/sonnik/word/auktsion">Аукцион</a>
                                <a href="http://astrotarot.ru/sonnik/word/afisha">Афиша</a>
                                <a href="http://astrotarot.ru/sonnik/word/afrika">Африка</a>
                                <a href="http://astrotarot.ru/sonnik/word/aeroplan">Аэроплан</a>
                            </div>
                        </div>

                    </div>		                	</div>
                <div id="column3">
                    <div id="popular">
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

                </div>
                <div class="clear"></div>
';
include_once('view/include/footer.php');
