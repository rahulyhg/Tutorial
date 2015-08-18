<?php

require_once('view/include/constructor.php');

   CreateMenu();
echo '<div id="content">
    <div id="content_wrap">
        <div id="slyder">
            <div id="slyde1" onclick="window.location.href="/gadaniya/rune/lyubov-i-otnosheniya"" style="cursor:pointer">
                <img src="'.ROOT_HOST.'view/images/slider/553d184b7ee68.jpg" alt="" />
            </div>
            <div id="slyde2" onclick="window.location.href="/gadaniya/taro/semya-i-deti/394-rasklad--ottsyi-i-deti"" style="cursor:pointer">
                <img src="'.ROOT_HOST.'view/images/slider/552c3a0ec7b11.jpg" alt="" />
            </div>
            <div id="slyde3" onclick="window.location.href="/numerology"" style="cursor:pointer">
                <img src="'.ROOT_HOST.'view/images/slider/55219a9c107b8.jpg" alt="" />
            </div>
            <div id="slyde4" onclick="window.location.href="/statyi/content/12-astrologiya/241-kalendar-strijek-blagopriyatnyie-dni"" style="cursor:pointer">
                <img src="'.ROOT_HOST.'view/images/slider/55216b2f39a19.jpg" alt="" />
            </div>
            <div id="slyde5" onclick="window.location.href="/gadaniya/book/kniga-peremen/26-kniga-peremen"" style="cursor:pointer">
                <img src="'.ROOT_HOST.'view/images/slider/552196215ba13.jpg" alt="" />
            </div>
        </div>
        <div id="slyder_element">
            <div class="slyder_dot" num="1"></div>
            <div class="slyder_dot" num="2"></div>
            <div class="slyder_dot" num="3"></div>
            <div class="slyder_dot" num="4"></div>
            <div class="slyder_dot" num="5"></div>
        </div>
        <div id="horoscope">
            <div class="header">Horoscop</div>
            <div class="left_block">';
                foreach($allSigns as $item){
                    CreateSignSmallItem($item, $Content);
                }
            echo '</div>
            <div class="right_block">
                <div id="horo_arrow">
                    <div class="arrow_left"></div>
                    <div class="arrow_right"></div>
                </div>';
                foreach($signWithHoroscope as $sign){
                    foreach($sign as $item) {
                        CreateSignRightpanel($item, $Content);
                    }
                }

                echo '
            </div>
            <div class="clear"></div>
        </div>';
           echo '
                        <div id="moon_number">
                            <div id="moon">
                                <div class="header">Calendarul lunii</div>
                                <div class="left_block"><img src="'.ROOT_HOST.'view/images/moon.png" alt=""></div>
                                <div class="right_block">
                                    <div class="moon_header">In curind <a indepth="true" href="#"></a><br></div>
                                                            <div class="moon_text">
                                                            <br>
                                                                </div>
                                                        </div>
                                <div class="clear"></div>
                                <div id="stars_line">
                                                                                                                                <div class="stars_item">
                                                <div class="stars_header">Serviciu</div>
                                                <div class="stars">
                                                                                                <div class="star_active"></div>
                                                                                                <div class="star_active"></div>
                                                                                                <div class="star"></div>
                                                                                                <div class="clear"></div>
                                                    </div>
                                                </div>
                                                <div class="stars_item" id="stars_center">
                                                <div class="stars_header">Sanatate</div>
                                                <div class="stars">
                                                                                                <div class="star_active"></div>
                                                                                                <div class="star_active"></div>
                                                                                                <div class="star"></div>
                                                                                                <div class="clear"></div>
                                                    </div>
                                                </div>
                                                                                                                                                                                                                                                                <div class="stars_item">
                                                <div class="stars_header">Dragoste</div>
                                                <div class="stars">
                                                                                                <div class="star_active_green"></div>
                                                                                                <div class="star_active_green"></div>
                                                                                                <div class="star_active_green"></div>
                                                                                                <div class="clear"></div>
                                                    </div>
                                                </div>
                                                                                                                        <div class="clear"></div>
                                </div>
                                <div class="text"> </div>
                                <div class="button">
                                    <div class="button_left"></div>
                                    <div class="button_content"><a indepth="true" href="#">Calendarul lunii</a></div>
                                    <div class="button_right"></div>
                                </div>
                            </div>';
                            CreatePanelLifeNumbersApplication();
                            echo '<div class="clear"></div>
                        </div>';
            CreatePanelReadMoreAboutYou();
        echo '<div id="article_news">
            <div class="left_block">
                <div class="header">Articole</div>
            </div>
            <div class="right_block">
                <div class="header">Stiri</div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>';
                //CreateBottomTextpanel();
        echo '</div>
    </div>
    <!-- end of content wrap -->
</div>';
include_once('view/include/footer.php');
