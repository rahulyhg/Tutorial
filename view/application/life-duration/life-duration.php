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

                        <form id="life-duration" action = "javascript:void(0);" method="POST">
                            <div id="num_calc1">
                                <div>
                                    <div class="num_calc1_form">
                                        <span>Zile</span><br>

                                        <input name="fname" id="day" value="0" type="text" disabled>				</div>
                                    <div class="num_calc1_form" id="num_calc1_center">
                                        <span>Ore</span><br>

                                        <input name="lname" id="hour" value="0" type="text" disabled>				</div>
                                    <div class="num_calc1_form">
                                        <span>Minute</span><br>

                                        <input name="mname" id="minute" value="0" type="text" disabled>				</div>

                                    <div class="clear"></div>
                                </div>
                                <div class="num_calc1_line">
                                    <span>Data nasterii</span><br>
                                    <div class="num_calc1_form">

                                        <span class="selectbox" style="display: inline-block; position: relative;"><select style="position: absolute; top: -9999px;" name="byear" id="byear">
                                            <option value="" label="год">An</option>
                                            <option value="2025" label="2025">2025</option>
                                            <option value="2024" label="2024">2024</option>
                                            <option value="2023" label="2023">2023</option>
                                            <option value="2022" label="2022">2022</option>
                                            <option value="2021" label="2021">2021</option>
                                            <option value="2020" label="2020">2020</option>
                                            <option value="2019" label="2019">2019</option>
                                            <option value="2018" label="2018">2018</option>
                                            <option value="2017" label="2017">2017</option>
                                            <option value="2016" label="2016">2016</option>
                                            <option value="2015" label="2015">2015</option>
                                            <option value="2014" label="2014">2014</option>
                                            <option value="2013" label="2013">2013</option>
                                            <option value="2012" label="2012">2012</option>
                                            <option value="2011" label="2011">2011</option>
                                            <option value="2010" label="2010">2010</option>
                                            <option value="2009" label="2009">2009</option>
                                            <option value="2008" label="2008">2008</option>
                                            <option value="2007" label="2007">2007</option>
                                            <option value="2006" label="2006">2006</option>
                                            <option value="2005" label="2005">2005</option>
                                            <option value="2004" label="2004">2004</option>
                                            <option value="2003" label="2003">2003</option>
                                            <option value="2002" label="2002">2002</option>
                                            <option value="2001" label="2001">2001</option>
                                            <option value="2000" label="2000">2000</option>
                                            <option value="1999" label="1999">1999</option>
                                            <option value="1998" label="1998">1998</option>
                                            <option value="1997" label="1997">1997</option>
                                            <option value="1996" label="1996">1996</option>
                                            <option value="1995" label="1995">1995</option>
                                            <option value="1994" label="1994">1994</option>
                                            <option value="1993" label="1993">1993</option>
                                            <option value="1992" label="1992">1992</option>
                                            <option value="1991" label="1991">1991</option>
                                            <option value="1990" label="1990">1990</option>
                                            <option value="1989" label="1989">1989</option>
                                            <option value="1988" label="1988">1988</option>
                                            <option value="1987" label="1987">1987</option>
                                            <option value="1986" label="1986">1986</option>
                                            <option value="1985" label="1985">1985</option>
                                            <option value="1984" label="1984">1984</option>
                                            <option value="1983" label="1983">1983</option>
                                            <option value="1982" label="1982">1982</option>
                                            <option value="1981" label="1981">1981</option>
                                            <option value="1980" label="1980">1980</option>
                                            <option value="1979" label="1979">1979</option>
                                            <option value="1978" label="1978">1978</option>
                                            <option value="1977" label="1977">1977</option>
                                            <option value="1976" label="1976">1976</option>
                                            <option value="1975" label="1975">1975</option>
                                            <option value="1974" label="1974">1974</option>
                                            <option value="1973" label="1973">1973</option>
                                            <option value="1972" label="1972">1972</option>
                                            <option value="1971" label="1971">1971</option>
                                            <option value="1970" label="1970">1970</option>
                                            <option value="1969" label="1969">1969</option>
                                            <option value="1968" label="1968">1968</option>
                                            <option value="1967" label="1967">1967</option>
                                            <option value="1966" label="1966">1966</option>
                                            <option value="1965" label="1965">1965</option>
                                            <option value="1964" label="1964">1964</option>
                                            <option value="1963" label="1963">1963</option>
                                            <option value="1962" label="1962">1962</option>
                                            <option value="1961" label="1961">1961</option>
                                            <option value="1960" label="1960">1960</option>
                                            <option value="1959" label="1959">1959</option>
                                            <option value="1958" label="1958">1958</option>
                                            <option value="1957" label="1957">1957</option>
                                            <option value="1956" label="1956">1956</option>
                                            <option value="1955" label="1955">1955</option>
                                            <option value="1954" label="1954">1954</option>
                                            <option value="1953" label="1953">1953</option>
                                            <option value="1952" label="1952">1952</option>
                                            <option value="1951" label="1951">1951</option>
                                            <option value="1950" label="1950">1950</option>
                                            <option value="1949" label="1949">1949</option>
                                            <option value="1948" label="1948">1948</option>
                                            <option value="1947" label="1947">1947</option>
                                            <option value="1946" label="1946">1946</option>
                                            <option value="1945" label="1945">1945</option>
                                            <option value="1944" label="1944">1944</option>
                                            <option value="1943" label="1943">1943</option>
                                            <option value="1942" label="1942">1942</option>
                                            <option value="1941" label="1941">1941</option>
                                            <option value="1940" label="1940">1940</option>
                                            <option value="1939" label="1939">1939</option>
                                            <option value="1938" label="1938">1938</option>
                                            <option value="1937" label="1937">1937</option>
                                            <option value="1936" label="1936">1936</option>
                                            <option value="1935" label="1935">1935</option>
                                            <option value="1934" label="1934">1934</option>
                                            <option value="1933" label="1933">1933</option>
                                            <option value="1932" label="1932">1932</option>
                                            <option value="1931" label="1931">1931</option>
                                        </select>				</div>
                                    <div class="num_calc1_form" id="num_calc1_center2">
                                        <span class="selectbox" style="display: inline-block; position: relative;"><select style="position: absolute; top: -9999px;" name="bmonth" id="bmonth">
                                            <option value="" label="luna">Luna</option>
                                            <option value="01" label="Ianuarie">Ianuarie</option>
                                            <option value="02" label="Februarie">Februarie</option>
                                            <option value="03" label="Martie">Martie</option>
                                            <option value="04" label="Aprilie">Aprilie</option>
                                            <option value="05" label="Mai">Mai</option>
                                            <option value="06" label="Iunie">Iunie</option>
                                            <option value="07" label="Iulie">Iulie</option>
                                            <option value="08" label="August">August</option>
                                            <option value="09" label="Septembrie">Septembrie</option>
                                            <option value="10" label="Octombrie">Octombrie</option>
                                            <option value="11" label="Noiembrie">Noiembrie</option>
                                            <option value="12" label="Decembrie">Decembrie</option>
                                        </select>				</div>
                                    <div class="num_calc1_form">

                                        <span class="selectbox" style="display: inline-block; position: relative;"><select style="position: absolute; top: -9999px;" name="bday" id="bday">
                                            <option value="" label="день">ziua</option>
                                            <option value="01" label="01">1</option>
                                            <option value="02" label="02">2</option>
                                            <option value="03" label="03">3</option>
                                            <option value="04" label="04">4</option>
                                            <option value="05" >5</option>
                                            <option value="06" >6</option>
                                            <option value="07" >7</option>
                                            <option value="08" >8</option>
                                            <option value="09" >9</option>
                                            <option value="10" >10</option>
                                            <option value="11" >11</option>
                                            <option value="12" >12</option>
                                            <option value="13" >13</option>
                                            <option value="14" >14</option>
                                            <option value="15" >15</option>
                                            <option value="16" >16</option>
                                            <option value="17" >17</option>
                                            <option value="18" >18</option>
                                            <option value="19" >19</option>
                                            <option value="20" >20</option>
                                            <option value="21" >21</option>
                                            <option value="22" >22</option>
                                            <option value="23" >23</option>
                                            <option value="24" >24</option>
                                            <option value="25" >25</option>
                                            <option value="26" >26</option>
                                            <option value="27" >27</option>
                                            <option value="28" >28</option>
                                            <option value="29" >29</option>
                                            <option value="30" >30</option>
                                            <option value="31" >31</option>
                                        </select>				</div>
                                    <div class="clear"></div>
                                </div>';
                                if(!isset($_SESSION['user_id'])) {
                                    echo '<div class="enter_reg"><a id="ident-enter" href="#">logare</a> sau <a href="'.ROOT_HOST.'registration">inregistrare</a></div>';
                                }
                                echo '<div class="clear"></div>
                            </div>
                            <button id="calculate-life-duration">Calculeaza</button>

                            <div class="why_box">
                                <div class="why_need">
                                    <span>Pentru ce avem nevoie de datele dvs</span>
                                    <img src="mark.png" alt="">
                                </div>
                                <div class="detail">
                                    <div class="windows_closw"></div>
                                    <div class="text">Составить нумерологический прогноз или карту личности невозможно без Ф.И.О. и полной даты рождения. Если вы планируете использовать данный раздел сайта регулярно, для удобства пройдите <a href="http://astrotarot.ru/user/registration">регистрацию</a></div>
                                </div>
                            </div>
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
