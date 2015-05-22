<?php

require_once('view/include/constructor.php');
CreateMenu();
CreateFeedbackForm();
echo '     <div id="content_white">
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
                    </div>';
                    CreateLeftMenuViewOnePage($allSigns, $Content);
                        echo '


                    </div>
                </div>
                <div id="column2">
                    <div id="article_full">
                        <div class="article_full_item">
                            <div class="data"></div>
                            <div class="item_header">Despre proiect</div>
                            <div class="text"><p>
                                    Проект Астро Таро посвящен самым интересным и популярным предсказательным системам, таким как астрология, нумерология, гадания на картах Таро и классических картах, руны, гадания по книге перемен И-цзын и многое другое. На Астро Таро вы можете найти онлайн гадания на картах Таро и обычных, классических картах на самые разнообразные темы, получить ответы на самые волнующие вопросы. Наш проект содержит множество разделов онлайн гаданий, посвященных самым важным жизненным сферам, таким как: любовь, отношения, здоровье, семья, дети, будущее, судьба, путешествия, поездки, работа, бизнес, карьера, недвижимость, потеря, пропажа, порча, сглаз и другие разделы, посвященные важным вопросам. А гороскопы и астрологические и нумерологические прогнозы, составленные командой опытных и профессиональных астрологов и нумерологов, помогут вам получить больше информации о себе, своих родных и близких или просто знакомых. Гороскоп, составленный по Солнечному знаку Зодиака, поможет определить характер человека, его способности, таланты, наклонности. В разделах, посвященных астрологии и нумерологии вы можете узнать астрологический и нумерологический прогноз на сегодня, завтра, месяц и год для любого знака Зодиака, а так же узнать о своем предназначении с помощью бесплатного персонального кармического гороскопа.</p>
                                <p>
                                    Если вы следите за ритмами Луны, на Астро Таро для вас всегда открыт самый подробный Лунный календарь. Наш Лунный календарь содержит много интересной и полезной информации о влиянии Луны, смены ее фаз и положений в знаках Зодиака. Мы постарались как можно интереснее и доступнее описать каждый Лунный день, чтобы предоставить возможность нашим посетителям заранее планировать начало новых дел и принятия важных решений. Лунный календарь стрижки, свадьбы, здоровья, зачатия, бизнеса поможет вам подобрать наиболее благоприятный день для вышеперечисленных мероприятий, а Лунный календарь садовода поможет подобрать самые благоприятные периоды для ухода за растениями. Так же вы можете получить много интересной и полезной информации о магии, узнать магические обряды и заговоры по привлечению удачи, денег, любви, здоровья и благополучия, по избавлению от негативного магического воздействия, сглаза и порчи.</p>
                                <p>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="column3">
                    <div id="taging"><div class="actual_header">Популярные теги</div><div class="tag_item"><a href="http://astrotarot.ru/statyi/tag/56-bliznetsyi">Близнецы</a></div><div class="tag_item"><a href="http://astrotarot.ru/statyi/tag/61-skorpion">Скорпион</a></div><div class="tag_item"><a href="http://astrotarot.ru/statyi/tag/58-lev">Лев</a></div><div class="tag_item"><a href="http://astrotarot.ru/statyi/tag/27-prognozyi-i-predskazaniya">Прогнозы и предсказания</a></div><div class="clear"></div></div>		                					                					                				                				                				                				                				                		<div id="popular">

                    <div id="right_hrskp">
                        <div class="actual_header">Гороскопы</div>';
                                foreach($allSigns as $sign){
                                    CreatePanelRightHoroscopeViewOnePage($sign, $Content);
                                }
                        echo '<div class="clear"></div>
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



