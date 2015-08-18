<?php
require_once('view/include/constructor.php');
CreateMenu();
CreateFeedbackForm();
echo '</div>    <div id="content">
    <div id="content_wrap">
        <div id="orange_sign">

            <div class="clear"></div>
        </div><div id="white_space">

            <div class="tri_header">Cifrele vietii</div>
            <div id="columns">
                <div id="column1">';
CreateLeftMenuViewOnePage($allSigns, $Content);
echo '
                </div>
                </div>
                <div id="column2">
                    <div id="opisanie">
                        <div class="item_header">Cifrele vietii</div>
                        <div class="text">
                            Stii citi ani ai trait. Dar cite zile ? Sau ore ? Chiar si cite minute ? Vei ramine surprins de aceste cifre.</div>
                        <div class="clear"></div>
                    </div>
                    <div id="num_content">
                        <div class="num_what">
                            <img src="'.ROOT_HOST.'view/images/num_what.png" alt="" title="">
                            <div class="text">Pentru a afisa informatiile necesare este nevoie de calcul numerologic.Vă rugăm să completați formularul și faceți click pe "Calculeaza"</div>
                            <div class="clear"></div>
                        </div>

                        <form id="compatibility-form" action = "javascript:void(0);" method="POST">
                            <div id="compatibility">
                                <div>
                                    <div class="clear"></div>
                                </div>
                                    <div class="num_calc1_form" id="sign1">
                                        <span class="selectbox" style="display: inline-block; position: relative;"><select style="position: absolute; top: -9999px;" name="sign1" id="bmonth">
                                            <option value="" >Zodia</option>';
                                                foreach($allSigns as $sign){
                                                    echo '<option value="'.$sign['sign_id'].'">'.$Content[$sign['sign_name']].'</option>';
                                                }
                                        echo '</select>
                                    </div>

                                    <div class="num_calc1_form" id="sign2">
                                        <span class="selectbox" style="display: inline-block; position: relative;"><select style="position: absolute; top: -9999px;" name="sign2" id="bmonth">
                                            <option value="" >Zodia</option>';
                                                foreach($allSigns as $sign){
                                                    echo '<option value="'.$sign['sign_id'].'">'.$Content[$sign['sign_name']].'</option>';
                                                }
                                        echo '</select>
                                    </div>

                                    <div class="clear"></div>
                                </div>';
                                if(!isset($_SESSION['user_id'])) {
                                    echo '<div class="enter_reg"><a id="ident-enter" href="#">logare</a> sau <a href="'.ROOT_HOST.'registration">inregistrare</a></div>';
                                }
echo '<div class="clear"></div>
                            </div>
                            <button id="calculate-compatibility">Calculeaza</button>

                        </form>						<div id="description_wrapper">

                        </div>
                        <div id="also">

                        </div>
                        <div id="abuse-comment-form" style="z-index: 1000;">
                            <div class="reference">
                                <form action="http://astrotarot.ru/numerology/personal/identity">
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
                        </div>
                    </div>
                </div>
                <div id="column3">
                    <div id="vklad">
                        <div class="actual_header">In curind</div>
                        <div id="vklad_content">
                            <div class="vklad_item">
                                <img src="'.ROOT_HOST.'view/images/horo_corner.png" alt="">
                                <a href="#">Numarul meu</a>
                            </div>
                            <div class="vklad_item">
                                <img src="'.ROOT_HOST.'view/images/horo_corner.png" alt="">
                                <img src="'.ROOT_HOST.'view/images/horo_corner.png" alt="">
                                <a href="#">Carti tarot</a>
                            </div>
                            <div class="vklad_item_active">
                                <img src="'.ROOT_HOST.'view/images/horo_corner.png" alt="">
                                Cifrele vietii
                                <a href="'.ROOT_HOST.'application/life-duration"></a>
                            </div>
                            <div class="vklad_item">
                                <img src="'.ROOT_HOST.'view/images/horo_corner.png" alt="">
                                <img src="'.ROOT_HOST.'view/images/horo_corner.png" alt="">
                                <a href="#">Numarul sufletului</a>
                            </div>

                        </div>
                    </div>			            <div class="banner_right_200x350">
                        <a href="http://astrotarot.ru/service/divination/gadanie-na-lyubov" target="blank">
                            <img src="54d7cf12641bf.jpg" alt="">
                        </a>
                    </div>
                    <div id="banner_right_200x350" style="margin-bottom: 25px;">
                        <a href="http://astrotarot.ru/service/horoscope/data-svadbyi" target="blank">
                            <img src="54d7cfbcd79b0.jpg" alt="">
                        </a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
                <div class="clear"></div>
    </div><!-- end of content wrap -->
</div>';
include_once('view/include/footer.php');
