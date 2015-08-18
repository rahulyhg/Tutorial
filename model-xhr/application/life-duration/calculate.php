<?php

    if(IsDataValid($_POST['bmonth'], $_POST['bday'], $_POST['byear'])){
        $current = date('Y-m-d',time());
        $temp = $_POST['bmonth'].'-'.$_POST['bday'].'-'.$_POST['byear'];
        $userDate = date('Y-m-d',strtotime($temp));
        $dateDiff = $current - $userDate;
        if($current > $userDate){
            $data['success'] = true;
            $data['day']  = ($current - $userDate)*365;
            $data['hour'] = ($current - $userDate)*365*24;
            $data['minute'] = ($current - $userDate)*365*24*60;
        }
        else{
            $data['errors'] = 'Wrong date';
        }

        header('Content-Type: application/json');
        echo json_encode($data);

    }