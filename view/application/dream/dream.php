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
                    CreateLeftMenuViewOnePage($allSigns, $Content);
                        echo '</div>

                    </div>
                </div>
                <div id="column2">
                    <div id="article">
                        <div class="sonnik_header">Ce ati visat?</div>
                        <div class="sonnik_search">
                            <form id="search-dream-form"  action = "javascript:void(0);" >
                                <input value="" id="word-search" class="sonnik_input" name="dream_name" placeholder="Cautati cuvintul cheie din vis" type="text">
                                <button id="search-dream">Cauta</button>
                            </form>
                        </div>

                        <div class="sonnik_header">Cautati dupa alfabet</div>';
                        CreateAlphabeatDream();
                        if(isset($_REQUEST['section3'])) {
                            echo '<div class="sonnik_here">' . strtoupper($_REQUEST['section3']) . '</div>';
                        }
                        CreatePanelDreams($dreamsStartWith, 'dream');

                    echo '</div>		                	</div>
                <div id="column3">';
                        CreatePopularItemsPanel();
                    echo '<div id="right_hrskp">
                        <div class="actual_header">Horoscop</div>';
                        foreach($allSigns as $sign){
                            CreatePanelRightHoroscopeViewOnePage($sign, $Content);
                        }
                    echo '</div>

                </div>
                <div class="clear"></div>
';
include_once('view/include/footer.php');
