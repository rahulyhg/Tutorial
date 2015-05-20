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
        $req = $bdd->prepare('select sign_name,sign_date, description, horoscope_date from sign s INNER JOIN horoscope h
                                                                        on s.sign_id = h.id_sign
                                                                        WHERE  h.horoscope_date=? and s.sign_name=?');
        $req->execute(array($currentDate, $sign));
        $i = 0;
        $signHoroscope = array();

        return $signHoroscope = $req->fetchAll();
    }

    function GetSignHoroscopeForTomorrow($bdd, $sign){
        $tomorrowDate = new DateTime('tomorrow');
        $req = $bdd->prepare('select sign_name,sign_date, description, horoscope_date from sign s INNER JOIN horoscope h
                                                                        on s.sign_id = h.id_sign
                                                                        WHERE  h.horoscope_date=? and s.sign_name=?');
        $req->execute(array($tomorrowDate->format('Y-m-d'), $sign));

        $signHoroscope = $req->fetchAll();
        if(count($signHoroscope) != 0){
            return $signHoroscope;
        }
        else{
            $signHoroscope['empty'] = 'empty';
        }
    }

    function GetSignList($bdd){
        $req = $bdd->prepare('select sign_name, sign_date from sign');
        $req->execute(array());
        $i = 0;
        $allSigns = array();
        while($row = $req->fetch()){
            $allSigns[$i]['sign_name'] = $row['sign_name'];
            $allSigns[$i]['sign_date'] = $row['sign_date'];
            $i++;
        }
        return $allSigns;
    }



