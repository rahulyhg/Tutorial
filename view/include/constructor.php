<?php

    function CreateSignSmallItem($smallItem, $Content){
        echo '<div class="sign_small_item">
                    <div class="sign_small_img">
                        <img src="'.ROOT_HOST.'view/images/small/'.$smallItem['sign_name'].'.png"/>
                    </div>
                    <div class="sign_small_text">
                        <span>'.$Content[$smallItem['sign_name']].'</span>
                        <br />'.$smallItem['sign_date'].'
                        <input type="hidden" value="aries" />
                    </div>
                </div>';
    }
    function CreatePanelReadMoreAboutYou(){
        echo ' <div id="cosmo">
            <div id="know_thyself">
                <img src="img/images/profile.jpg" alt="" />
                <div class="text">
                    <span>Afla mai mult despre tine!</span>
                    <p>Nu sunt doar un semn al zodiacului! Du-te înregistra și obține profilul dvs. spațiu liber. Deschide pentru tine, carte de tarot, numărul calea vietii, horoscopul karmic și alte informații personale.</p>
                </div>
            </div>
            <div class="button">
                <div class="button_left"></div>
                <div class="button_content"><a href="'.ROOT_HOST.'registration">Inregistrare</a></div>
                <div class="button_right"></div>
            </div>
        </div>';
    }
    function CreateBottomTextpanel(){
        echo ' <div class="bottom_text">
                <div class="text_open">
                    Proiectul Astro Tarot dedicat sistemelor de predictie mai interesante și mai populare, cum ar fi astrologie, numerologie, cărți de tarot și cărți clasice tarot, rune, divinație prin Cartea schimbărilor, tszyn și mai mult. Pe Astro Tarot puteti gasi carduri online, divinație Tarot și diagrame clasice convenționale pe o varietate de subiecte, pentru a obține răspunsuri la întrebările cele mai urgente. Proiectul nostru include o multitudine de secțiuni de divinație on-line, dedicat celor mai importante domenii ale vieții, cum ar fi dragoste, relatii, sanatate, familie, copii, viitor, destin, de călătorie, de călătorie, de muncă, afaceri, cariera, imobiliare, pierdere, pierdere, deteriorare, deochi alte secțiuni pe probleme importante. Un horoscop și prognoze astrologice și numerologice elaborate de o echipa de astrologi și numerologi experiență și profesionale va ajuta să obțineți mai multe informații despre ei înșiși, familiile lor și prietenii sau doar cunoștințe. Horoscop întocmit de semnul soarelui al zodiacului, va ajuta la determinarea caracterul unei persoane, abilitățile, talentele, înclinațiile. Secțiunea privind astrologie și numerologie, puteți găsi Prognoza astrologică și numerologica pentru astăzi și mâine, luna și anul pentru fiecare semn al zodiacului, precum și pentru a afla mai multe despre misiunea sa, cu ajutorul unui horoscop personal liber karmic.
                    <div class="text_roll">
                        Если вы следите за ритмами Луны, на Астро Таро для вас всегда открыт самый подробный Лунный календарь. Наш Лунный календарь содержит много интересной и полезной информации о влиянии Луны, смены ее фаз и положений в знаках Зодиака. Мы постарались как можно интереснее и доступнее описать каждый Лунный день, чтобы предоставить возможность нашим посетителям заранее планировать начало новых дел и принятия важных решений. Лунный календарь стрижки, свадьбы, здоровья, зачатия, бизнеса поможет вам подобрать наиболее благоприятный день для вышеперечисленных мероприятий, а Лунный календарь садовода поможет подобрать самые благоприятные периоды для ухода за растениями. Так же вы можете получить много интересной и полезной информации о магии, узнать магические обряды и заговоры по привлечению удачи, денег, любви, здоровья и благополучия, по избавлению от негативного магического воздействия, сглаза и порчи.
                    </div>
                </div>
                <div class="open_text">
                    <span>развернуть</span> ↓
                </div>
            </div>';
    }
    function CreateMenu(){
        echo '<div id="menu">
        <div class="top_wrap">
            <div id="menu_left">
                <div class="lilac_item">
                    <a href="'.ROOT_HOST.'horoscope/aries">Horoscop</a>
                </div>
            </div>
            <div id="menu_left">
                <div class="lilac_item">
                    <a href="'.ROOT_HOST.'application/life-duration">Cifrele vietii</a>
                </div>
            </div>
            <div id="menu_left">
                <div class="lilac_item">
                    <a href="'.ROOT_HOST.'application/compatibility">Compatibilitate</a>
                </div>
            </div>
            <div id="menu_left">
                <div class="lilac_item">
                    <a href="'.ROOT_HOST.'application/name-compatibility">Numele pereche</a>
                </div>
            </div>
            <div id="menu_left">
                <div class="lilac_item">
                    <a href="'.ROOT_HOST.'application/dream">Vise</a>
                </div>
            </div>
            <div id="menu_right">
                <div class="lilac_item">
                    <a href="#">Noutati</a>
                </div>
                <div class="lilac_item">
                    <a href="#">Articole</a>
                </div>
            </div>
            <div class="clear"></div>
         </div>
        </div>
    </div>';
    }
    function CreateSignRightpanel($sign, $Content){
        echo '<div class="sign_item">
                    <div id="sign_img">
                        <img src="'.ROOT_HOST.'view/images/big/'.$sign['sign_name'].'.png" />
                    </div>
                    <div class="item_header"><span>'.$Content[$sign['sign_name']].'</span>
                        <br />'.$sign['sign_date'].'</div>
                    <div class="clear"></div>
                    <div class="sign_item_header">'.$Content[$sign['sign_name']].' — horscopul pentru astazi</div>
                    <div class="data">
                        '.GetMonth(date('m', strtotime($sign['horoscope_date']))).' '.date('d', strtotime($sign['horoscope_date'])).', '.date('Y', time()).' </div>
                    <div class="text">
                        '. substr($sign['description'], 0, 200).' ... <a href="'.ROOT_HOST.'horoscope/'.$sign['sign_name'].'">mai mult →</a></div>
                    <div class="button" style="bottom:45px;">
                        <div class="button_left"></div>
                        <div class="button_content"><a id="sign-all-horoscoper" href="'.ROOT_HOST.'horoscope/'.$sign['sign_name'].'">Toate pentru '.$Content[$sign['sign_name']].'</a></div>
                        <div class="button_right"></div>
                    </div>
                    <div class="clear"></div>
                </div>';
    }
    function CreatePanelRightHoroscopeViewOnePage($sign, $Content){
        echo '<div class="hrskp_item">
                        <img src="'.ROOT_HOST.'view/images/small/'.$sign['sign_name'].'.png" alt="" />
                        <div class="item_header"><a href="'.ROOT_HOST.'horoscope/'.$sign['sign_name'].'"><span>'.$Content[$sign['sign_name']].'</span><br />'.$sign['sign_date'].'</a></div>
                    </div>';
    }
    function CreateLeftMenuViewOnePage($allSigns, $Content){
        echo '<div id="orange_menu">
                        <div class="menu_left_item">
                            <div id="horoscope-menu-block" class="menu_header">
                            Horoscop<img alt="" src="'.ROOT_HOST.'view/images/menu_arrow.png">
                            </div>

                            <div class="menu_content">';
                                foreach($allSigns as $sign) {
                                    echo '<div class="menu_content_item">';
                                        echo '<a href="'.ROOT_HOST.'horoscope/'.$sign['sign_name'].'"><span>'.$sign['sign_date'].' - </span>'.$Content[$sign['sign_name']].'</a>';
                                    echo '</div>';
                                }
                            echo '</div>';
                        echo'</div>';
    }
    function CreateTopTabsViewOnePage($allSigns, $Content){
        echo '<div id="orange_sign">';
            foreach($allSigns as $sign) {
                echo '<div class="orange_sign_item">';
                    echo '<a href="'.ROOT_HOST.'horoscope/'.$sign['sign_name'].'">'.$Content[$sign['sign_name']].'</a>';
                echo '</div>';
            }
            echo '<div class="clear"></div>';
        echo '</div>';
    }
    function CreateFeedbackForm(){
        echo '<div style="right: -385px;" id="feedback">
        <div id="feedback_button"></div>
            <form id="feedback-form" action = "javascript:void(0);" method="POST" >
                <span>Nume<img src="'.ROOT_HOST.'view/images/must.png" alt=""></span><br>
                <input value="" name="user-name" class="feedback_form_text" size="30" type="text"><br>
                <span>Аdresa de e-mail<img src="'.ROOT_HOST.'view/images/must.png" alt=""></span><br>
                <input name="email" class="feedback_form_text" value="" size="30" type="text"><br>
                <span>Mesaj<img src="'.ROOT_HOST.'view/images/must.png" alt=""></span><br>
                <textarea name="content" class="feedback_form_text2"></textarea>
                <div id="feedback-sended" style="display: none;"><span style="color: white;">Scrisoare a fost trimisa</span></div>
                <button id="send-feedback">Trimite</button>
                <div id="nope">Inapoi</div>
            </form>
        </div>';
    }
    function CreatePanelLifeNumbersApplication(){
        echo'
                    <div id="number">
                                <div class="header">Numerele vietii</div>
                                <div class="left_block">
                                                                <img src="'.ROOT_HOST.'view/images/vopros.png" alt="число не определено" title="число не определено">
                                                        </div>
                                <div class="right_block">
                                    <div class="number_header">Viata in cifre</div>
                                                                <div class="sub_header">Afla cifrele care te vor impresiona, viata traita exprimata in cifre.</div>
                                                        </div>
                                <div class="clear"></div>
                                <div class="button">
                                    <div class="button_left"></div>
                                    <div class="button_content"><a indepth="true" href="'.ROOT_HOST.'application/life-duration">&nbsp;&nbsp;&nbsp;&nbsp;Calculeaza&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
                                    <div class="button_right"></div>
                                </div>
                            </div>';
    }
    function CreateVotePanel(){
        echo '<div class="vote_ask">
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
    }
    function CreateAlphabeatDream(){
        $letters = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','X','Y','Z','W');
        echo '<div class="sonnik_alph">';
                            foreach($letters as $letter) {
                                echo '<a href="'.ROOT_HOST.'application/dream/letter/'.strtolower($letter).'">'.$letter.'</a>';
                            }
                        echo '</div>';
    }
    function CreateAlphabeatName(){
        $letters = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','X','Y','Z','W');
        echo '<div class="sonnik_alph">';
        foreach($letters as $letter) {
            echo '<a href="'.ROOT_HOST.'application/name-signification/letter/'.strtolower($letter).'">'.$letter.'</a>';
        }
        echo '</div>';
    }
    function CreatePanelDreams($dreams){
        $columns = ceil(count($dreams)/40);
        echo '<div class="sonnik_list">';
                            for($i = 1; $i <= $columns; $i++) {
                                echo '<div class="list_item">';
                                    for($j = $columns-1 * 40; $j < $columns*40; $j++) {
                                        if(isset ($dreams[$j])) {
                                            echo '<a href="'.ROOT_HOST.'application/dream/show/'.$dreams[$j]['dream_name'].'">' . $dreams[$j]['dream_name'] . '</a>';
                                        }
                                    }
                                echo '</div>';
                            }
                        echo '</div>';
    }
    function CreatePanelNames($names){
        $columns = ceil(count($names)/40);
        echo '<div class="sonnik_list">';
        for($i = 1; $i <= $columns; $i++) {
            echo '<div class="list_item">';
            for($j = $columns-1 * 40; $j < $columns*40; $j++) {
                if(isset ($names[$j])) {
                    echo '<a href="'.ROOT_HOST.'application/name-signification/show/'.$names[$j]['name_signification'].'">' . $names[$j]['name_signification'] . '</a>';
                }
            }
            echo '</div>';
        }
        echo '</div>';
    }
    function CreatePopularItemsPanel(){
        echo '<div id="popular">
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
                                <span></span><br>
                                <a indepth="true" href="'.ROOT_HOST.'application/name-compatibility">
                                    Numele pereche</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="popular_item">
                            <div class="popular_count">4</div>
                            <div class="popular_text">
                                <span>Afla daca va potriviti</span><br>
                                <a indepth="true" href="'.ROOT_HOST.'application/life-duration">
                                    Cifrele vietii</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="popular_item">
                            <div class="popular_count">5</div>
                            <div class="popular_text">
                                <span>Ce ai visat</span><br>
                                <a indepth="true" href="'.ROOT_HOST.'application/dream">
                                   Semnificatia viselor </a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="popular_item">
                            <div class="popular_count">6</div>
                            <div class="popular_text">
                                <span>Ce inseamna numele tau</span><br>
                                <a indepth="true" href="'.ROOT_HOST.'application/name-signification">
                                   Semnificatia numelui</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>';
    }