<?php

require_once('model/application-functions.php');
require_once('model/sign-functions.php');
require_once('model/user-functions.php');
$allSigns = GetSignList($bdd);
$Content = parse_ini_file('language/content.ini');
$name = GetNameSignification($bdd, $_REQUEST['section3'])[0];