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
            CreatePanelReadMoreAboutYou();
        echo '<div id="article_news">
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
            <div class="clear"></div>';
                //CreateBottomTextpanel();
        echo '</div>
    </div>
    <!-- end of content wrap -->
</div>';
include_once('view/include/footer.php');
