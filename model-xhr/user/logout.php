<?php
    if(isset($_POST['action'])){
        if($_POST['action'] == 'reload'){
            session_destroy();
            $data['url'] = ROOT_HOST.'home';
            header('Content-Type: application/json');
            echo json_encode($data);
        }
    }


