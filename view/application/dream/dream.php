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
                        if(isset($_REQUEST['section3'])) {
                            echo '<div class="sonnik_here">' . strtoupper($_REQUEST['section3']) . '</div>';
                        }
                        CreatePanelDreams($dreamsStartWith);

                    echo '</div>		                	</div>
                <div id="column3">';
                        CreatePopularItemsPanel();
                    echo '<div id="right_hrskp">
                        <div class="actual_header">Гороскопы</div>';
                        foreach($allSigns as $sign){
                            CreatePanelRightHoroscopeViewOnePage($sign, $Content);
                        }
                    echo '</div>

                </div>
                <div class="clear"></div>
';
include_once('view/include/footer.php');
