<?php

    function CreateSignSmallItem($smallItem){
        echo '<div class="sign_small_item">
                    <div class="sign_small_img">
                        <img src="'.ROOT_HOST.'view/images/'.$smallItem['sign_name'].'-small.png"/>
                    </div>
                    <div class="sign_small_text">
                        <span>'.$smallItem['sign_name'].'</span>
                        <br />'.$smallItem['sign_date'].'
                        <input type="hidden" value="aries" />
                    </div>
                </div>';
    }