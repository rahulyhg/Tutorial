<?php

require_once('view/include/constructor.php');
CreateMenu();
CreateFeedbackForm();
echo '     <div id="content_white">
    <div id="content_wrap">
        <div id="white_space">
            <div id="deep_page">
            </div>
            <div class="tri_header">Despre proiect</div>
            <div id="columns">
                <div id="column1">
                    ';
CreateVotePanel();
CreateLeftMenuViewOnePage($allSigns, $Content);
echo '


                    </div>
                </div>
                <div id="column2">
                    <div id="article_full">
                        <div class="article_full_item">
                            <div class="data"></div>
                            <div class="item_header">Despre proiect</div>
                            <div class="text">
                                <p>Proiectul ZodiaCool este predestinat pentru cele mai interesante preziceri, precum astrologia, numerologia, ghicirea cu carti Taro si carti clasice,rune, ghicitul cu cartea schimbarilor si multe altele. Pe ZodiaCool Dumneavoastra puteti gasi preziceri online cu cartile Taro si obisnuite, puteti primi raspuns la cele mai deranjante progleme. Proiectul ZodiaCool contine multe compartimente de preziceri online, predestinate celor mai importante sfere ale vietii, precum: dragoste,relatii, sanatate, familie, copii, viitor, destin, calatorii, lucru, cariera, pierderi,deochi, vraji si alte compartimente, predestinate intrebarilor Dumneavoastra. Horoscopul si prognozele numerologice sunt create de o echipa din astrologi si numerologi profesionali, cu ajutorul lor puteti obtine mai multa informatie despte Dumnevoastra, persoanelor apropiate, prieteni si alte persoane. Horoscopul, se creeaza pe baza semnului zodiacal solar, ceea ce permite sa gasim caracterizam persoana, capacitatile ei, talentu, si inclinarile. In compartimentele predestinate numerologiei puteti afla prognoza astrologica si numerologica de azi, miine, luna si an pentru oricare semn al zodiacului, precum si carma personala.</p>
                                <p>Daca urmatiti ciclurile Lunii, Zodiacool va ofera cel mai detaliat calendar al Lunii. Calendarul nostru contine multa informatie interesanta si utila despre efectele Lunii, schimbarile de faza si pozitia fata de zodiac. Noi ne-am straduit cit mai interesant sa descrim fiecare zi a Lunii, pentru a va oferi posibilitatea de a planifica inceputul unei noi zi si de a lua decizii importante. Calendarul frezurilor, nuntilor, sanatatii,conceptiei va va ajuta cum sa va organizati mai bine ziua din activitatile enumerate anterior, calendarul agricol va va ajuta sa gasiti o perioada perfecta pentru a avea grija de plante.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="column3">
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

                </div>	                		                	<div class="clear"></div>
            </div><!-- end of columns -->
        </div><!-- end of whitespace -->
    </div><!-- end of content wrap -->
</div>';
include_once('view/include/footer.php');



