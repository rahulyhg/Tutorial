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
                            <form action="POST" >
                                <input value="" id="word-search" class="sonnik_input" name="squery" placeholder="Cautati cuvintul cheie din vis" type="text">
                                <button id="search-dream">Cauta</button>
                            </form>
                        </div>
                        <div class="sonnik_header">Cautati dupa alfabet</div>';
                        CreateAlphabeat();
                        print_r($dreamsStartWith);
                        echo '<div class="sonnik_here">А</div>';
                        CreatePanelDreams($dreamsStartWith);

                    echo '</div>		                	</div>
                <div id="column3">
                    <div id="popular">
                        <div class="popular_header">Cele mai populare</div>
                        <div class="popular_item">
                            <div class="popular_count">1</div>
                            <div class="popular_text">
                                <span>Hroscop</span><br>
                                <a indepth="true" href="'.ROOT_HOST.'horoscope">
                                    Horoscop </a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="popular_item">
                            <div class="popular_count">2</div>
                            <div class="popular_text">
                                <span></span><br>
                                <a indepth="true" href="'.ROOT_HOST.'application/compatibility">
                                    Compatibilitate zodii </a>
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
                        <div class="actual_header">Гороскопы</div>';
                        foreach($allSigns as $sign){
                            CreatePanelRightHoroscopeViewOnePage($sign, $Content);
                        }
                    echo '</div>

                </div>
                <div class="clear"></div>
';
include_once('view/include/footer.php');
