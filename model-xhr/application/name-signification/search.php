    <?php

    require_once('model/application-functions.php');

    $name = array();
    if(isset($_REQUEST['name_signification'])) {
        $name['name_signification'] = GetNameSignification($bdd, $_REQUEST['name_signification']);
        $name['success'] = true;
    }

    header('Content-Type: application/json');
    echo json_encode($name);