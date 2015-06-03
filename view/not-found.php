<?php
    require_once('view/include/constructor.php');
    CreateMenu();
    CreateFeedbackForm();
echo '<div id="content_white">
    <div id="content_wrap">
        <div id="white_space">
            <br><br>
            <div class="tri_header">Eroare 404</div>
            <div id="four_zero_four">
                <img src="'.ROOT_HOST.'view/images/404.png" alt="">
                <div class="four_opis">
                    <span>Pagina inexistenta.</span><br>
                    Folositi meniul pentru a naviga pe alta pagina.
                </div>
            </div>
        </div>
    </div><!-- end of content wrap -->
</div>';
include_once('view/include/footer.php');
