<?php

    function ExistSign($bdd, $sign){
        $req = $bdd->prepare('select count(sign_id) from sign WHERE sign_name=?');
        $req->execute(array($sign));
        $result = $req->fetch()['count(sign_id)'];
        if($result != 0){
            return true;
        }
        else{
            return false;
        }
    }

    function GetSignHoroscopeForToday($bdd, $sign){
        $currentDate = date('Y-m-d', time());
        $req = $bdd->prepare('select sign_name,description from sign s INNER JOIN horoscope h
                                                                        on s.sign_id = h.id_sign
                                                                        WHERE  h.horoscope_date=? and s.sign_name=?');
        $req->execute(array($currentDate, $sign));
        $i = 0;
        $signHoroscope = array();
        while($row = $req->fetch()){
            $signHoroscope[$i]['sign_name'] = $row['sign_name'];
            $signHoroscope[$i]['description'] = $row['description'];
            $i++;
        }
        return $signHoroscope;
    }

    function GetAllSignsWithDescription($bdd){
        $currentDate = date('Y-m-d', time());
        $req = $bdd->prepare('select sign_name, sign_date, description from sign s INNER join horoscope h
                                                                                   ON s.sign_id = h.id_sign
                                                                                   where h.horoscope_date=?');
        $req->execute(array($currentDate));
        $i = 0;
        $allSigns = array();
        while($row = $req->fetch()){
            $allSigns[$i]['sign_name'] = $row['sign_name'];
            $allSigns[$i]['sign_date'] = $row['sign_date'];
            $allSigns[$i]['description'] = $row['description'];
            $i++;
        }
        return $allSigns;
    }

