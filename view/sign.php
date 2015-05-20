<?php
require_once('view/include/constructor.php');

CreateMenu();
echo '
<div id="content">
    <div id="content_wrap">';
        CreateTopTabsViewOnePage($allSigns, $Content);
        echo '<div id="white_space">
            <div class="tri_header">'.$Content[$signData['sign_name']].' — horoscop</div>
            <div id="columns">
                <div id="column1">
                    <div class="vote_ask">
                        <div class="vote_header">Care preziceri le considerati cele mai veridice?</div>
                        <div class="vote_content">
                            <form>
                                <label>
                                    <input name="3" type="checkbox">
                                    <div>Prognozele numerologilor</div>
                                </label>
                                <label>
                                    <input name="2" type="checkbox">
                                    <div>Prognozele astrologilor</div>
                                </label>
                                <label>
                                    <input name="1" type="checkbox">
                                    <div>Prognozele clarvazatorilor</div>
                                </label>
                                <input id="poll" type="submit" value="Voteaza">
                            </form>
                        </div>
                    </div>';
                        CreateLeftMenuViewOnePage($allSigns, $Content);
                    echo '</div>
                </div>
                <div id="column2">
                    <div id="all_horo">
                        <div class="sign_top">
                            <img src="'.ROOT_HOST.'view/images/big/'.$signData['sign_name'].'.png" alt="" />
                            <div class="item_header"><span>'.$Content[$signData['sign_name']].'</span>
                                <br />'.$signData['sign_date'].'</div>

                            <div class="clear"></div>
                        </div>
                        <div id="packs">
                            <div id="horo_pack">
                                <div class="item_header">Horoscopul pentru astazi</div>
                                <div class="data">
                                    '.GetMonth(date('m', strtotime($signData['horoscope_date']))).' '.date('d', strtotime($signData['horoscope_date'])).', '.date('Y', time()).' </div>
                                <div class="text">
                                    <p>
                                        <strong>General</strong>
                                        <br /> '.$signData['description'].'
                                        </p>
                                </div>
                            </div>';
                            if(count($signDataTomorrow) != 0) {
                                        echo '<div id = "horo_pack" >
                                        <div class="item_header" > Horoscopul pentru ziua de miine </div >
                                        <div class="data" >
                                            '.GetMonth(date('m', strtotime($signDataTomorrow['horoscope_date']))).' '.date('d', strtotime($signDataTomorrow['horoscope_date'])).', '.date('Y', time()).' </div >
                                        <div class="text" >
                                            <p >
                                                <strong > General</strong >
                                                <br /> '.$signDataTomorrow['description'].'
                                            </p >
                                        </div >
                                    </div >';
                                }

                        echo '</div>


                        <div class="soc_line">
                            <div data-user="727286693" class="pluso" data-background="transparent" data-options="big,round,line,horizontal,nocounter,theme=04" data-services="vkontakte,facebook,twitter,email"></div>
                        </div>
                    </div>
                    <div id="comments">
                        <div class="item_header">Mai multe</div>
                        <div class="the_same_comment">
                            <div class="the_same_header"><a class="ident-enter" href="#">Logare</a> sau <a href="'.ROOT_HOST.'registration">inregistrare</a></div>
                        </div>
                        <div id="comments-items">
                        </div>
                    </div>
                    <div id="abuse-comment-form" style="z-index:1000;">
                        <div class="reference">
                            <form>
                                <table>
                                    <tr>
                                        <td>
                                            <textarea id="abuse-field" rows="3" cols="29"></textarea>
                                            <input type="hidden" id="comment" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="button" style="position:static">
                                                            <div class="button_left"></div>
                                                            <div class="button_content">
                                                                <a href="javascript:void(0)" onclick="sendAbuse()">Оставить жалобу</a></div>
                                                            <div class="button_right"></div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="button" style="position:static">
                                                            <div class="button_left"></div>
                                                            <div class="button_content">
                                                                <a href="javascript:void(0)" onclick="closeAbuse()">Отмена</a></div>
                                                            <div class="button_right"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="column3">
                <!--<div id="vklad">
                    <div class="actual_header">Гороскопы</div>
                    <div id="vklad_content">
                        <div class="vklad_item_active">
                            <img src="img/images/horo_corner.png" alt="" /> Гороскоп на сегодня и завтра </div>
                        <div class="vklad_item">
                            <img src="img/images/horo_corner.png" alt="" />
                            <a href="/horoscope/libra/business-compability">Гороскоп совместимости</a>
                        </div>
                        <div class="vklad_item">
                            <img src="img/images/horo_corner.png" alt="" />
                            <a href="/horoscope/libra/love-compability">Любовная совместимость</a>
                        </div>
                        <div class="vklad_item">
                            <img src="img/images/horo_corner.png" alt="" />
                            <a href="/horoscope/libra/simple">Характеристика знака</a>
                        </div>
                        <div class="vklad_item">
                            <img src="img/images/horo_corner.png" alt="" />
                            <a href="/horoscope/libra/profession">Гороскоп профессии</a>
                        </div>
                        <div class="vklad_item">
                            <img src="img/images/horo_corner.png" alt="" />
                            <a href="/horoscope/libra/karma">Кармический гороскоп</a>
                        </div>
                        <div class="vklad_item">
                            <img src="img/images/horo_corner.png" alt="" />
                            <a href="/horoscope/libra/health">Гороскоп здоровья</a>
                        </div>
                        <div class="vklad_item">
                            <img src="img/images/horo_corner.png" alt="" />
                            <a href="/horoscope/libra/child">Гороскоп ребенка</a>
                        </div>
                        <div class="vklad_item">
                            <img src="img/images/horo_corner.png" alt="" />
                            <a href="/horoscope/libra/business">Бизнес гороскоп</a>
                        </div>
                        <div class="vklad_item">
                            <img src="img/images/horo_corner.png" alt="" />
                            <a href="/horoscope/libra/month">Гороскоп на месяц</a>
                        </div>
                        <div class="vklad_item">
                            <img src="img/images/horo_corner.png" alt="" />
                            <a href="/horoscope/libra/year">Гороскоп на 2015 год</a>
                        </div>
                        <div class="vklad_item">
                            <img src="img/images/horo_corner.png" alt="" />
                            <a href="/horoscope/libra/next-year">Гороскоп на 2016 год</a>
                        </div>
                    </div>
                </div>
                <div id="popular">
                    <div class="popular_header">Популярное на сайте</div>
                    <div class="popular_item">
                        <div class="popular_count">1</div>
                        <div class="popular_text">
                            <span>Книга перемен</span>
                            <br />
                            <a href="/gadaniya/book/kniga-peremen/26-kniga-peremen">
                                Книга перемен               </a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="popular_item">
                        <div class="popular_count">2</div>
                        <div class="popular_text">
                            <span>Книга перемен</span>
                            <br />
                            <a href="/gadaniya/book/kniga-peremen/32-lyubovnaya-kniga-peremen">
                                Любовная книга перемен              </a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="popular_item">
                        <div class="popular_count">3</div>
                        <div class="popular_text">
                            <span>Таро</span>
                            <br />
                            <a href="/gadaniya/taro/obschie-gadaniya/30-rasklad--karta-dnya">
                                Расклад — Карта Дня             </a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="popular_item">
                        <div class="popular_count">4</div>
                        <div class="popular_text">
                            <span>Таро</span>
                            <br />
                            <a href="/gadaniya/taro/lyubov-i-otnosheniya/378-rasklad--lyubit-ne-lyubit">
                                Расклад — Любит, не любит               </a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="popular_item">
                        <div class="popular_count">5</div>
                        <div class="popular_text">
                            <span>Руны</span>
                            <br />
                            <a href="/gadaniya/rune/traditsionnyie-raskladyi/31-rasklad--runa-dnya">
                                Расклад — Руна дня              </a>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="popular_item">
                        <div class="popular_count">6</div>
                        <div class="popular_text">
                            <span>Таро</span>
                            <br />
                            <a href="/gadaniya/taro/rabota-biznes-karera/55-rasklad--prognoz-professionalnoy-jizni">
                                Расклад — Прогноз профессиональной жизни                </a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <!-- <div class="banner_right_200x350">
                    <a href="/service/divination/gadanie-na-lyubov" target="blank">
                        <img src="img/ad/54d7cf12641bf.jpg" alt="">
                    </a>
                </div> -->
                <div id="right_hrskp">
                    <div class="actual_header">Horoscop</div>';
                        foreach($allSigns as $sign){
                            CreatePanelRightHoroscopeViewOnePage($sign, $Content);
                        }
                    echo '<div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>

            <div class="clear"></div>
        </div>
        <!-- end of columns -->
    </div>
    <!-- end of whitespace -->
</div>
<!-- end of content wrap -->
</div>';
include_once('view/include/footer.php');