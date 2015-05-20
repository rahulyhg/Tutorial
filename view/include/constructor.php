<?php

    function CreateSignSmallItem($smallItem, $Content){
        echo '<div class="sign_small_item">
                    <div class="sign_small_img">
                        <img src="'.ROOT_HOST.'view/images/small/'.$smallItem['sign_name'].'-small.png"/>
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
                <div class="button_content"><a href="/user/">Inregistrare</a></div>
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
                    <a href="/horoscope">Horoscop</a>
                </div>
            </div>
            <div id="menu_right">
                <div class="lilac_item">
                    <a href="/news">Noutati</a>
                </div>
                <div class="lilac_item">
                    <a href="/statyi">Articole</a>
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
                        May 16, 2015 </div>
                    <div class="text">
                        '.$sign['description'].' ... <a href="'.ROOT_HOST.'horoscope/'.$sign['sign_name'].'">mai mult →</a></div>
                    <div class="button" style="bottom:45px;">
                        <div class="button_left"></div>
                        <div class="button_content"><a id="sign-all-horoscoper" href="'.ROOT_HOST.'horoscope/'.$sign['sign_name'].'">Toate pentru '.$Content[$sign['sign_name']].'</a></div>
                        <div class="button_right"></div>
                    </div>
                    <div class="clear"></div>
                </div>';
    }