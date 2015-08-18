    <?php

    require_once('view/include/constructor.php');
    CreateMenu();
    CreateFeedbackForm();
    echo '
    </div>    <div id="content_white">
        <div id="content_wrap">
            <div id="white_space">
                <div class="tri_header">'.ucfirst($name['name_signification']).'</div>
                <div id="columns">
                    <div id="column1">';
    CreateVotePanel();
    CreateLeftMenuViewOnePage($allSigns, $Content);
    echo '
                        </div>
                    </div>
                    <div id="column2">
                        <div id="article">

                            <div class="sonnik_new_block">
                                <div class="sonnik_new_header">Semnificatia numelui</div>
                                <div class="text">';
    echo '<p>'.$name['name_signification_description'].'</p>';
    echo '</div>
                            </div>

                            <div class="sonnik_header">Ce nume cauti ?</div>
                            <div class="sonnik_search">
                                <form id="search-name-form"  action = "javascript:void(0);">
                                    <input id="word-search" class="sonnik_input" name="name_signification" placeholder="Cauta numele" value="" type="text">
                                    <button id="search-name">Cauta</button>
                                </form>
                            </div>

                                <div class="soc_line">
                                    </div>
                            </div>';
    if(!isset($_SESSION['user_id'])) {
        echo '<div id = "comments" >
                                    <div class="the_same_comment" >
                                        <div class="the_same_header" > Pentru a beneficia de toate serviciile noastre:</div >
                                        <div class="the_same_header" > Puteti <a class="ident-enter" href = "#" >sa intrati</a > sau <a href = "'.ROOT_HOST.'registration" > sa creati un cont nou</a ></div >
                                    </div >
                                    <div id = "comments-items" >
                                    </div >
                                </div >';
    }

    echo '<div id="abuse-comment-form" style="z-index: 1000;">
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
                    <div id="column3">';
    CreatePopularItemsPanel();
    echo '
                        <div id="right_hrskp">
                            <div class="actual_header">Гороскопы</div>';
    foreach($allSigns as $sign){
        CreatePanelRightHoroscopeViewOnePage($sign, $Content);
    }
    echo '<div class="clear"></div>

                        </div>		                				      <div id="banner_right_200x350" style="margin-bottom: 25px;">
                            <a href="http://astrotarot.ru/service/horoscope/data-svadbyi" target="blank">
                                <img class="eeyjminjzkqcayapdbbt" src="54d7cfbcd79b0.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="clear"></div>';
    include_once('view/include/footer.php');
