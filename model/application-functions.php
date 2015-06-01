<?php


function GetCompatibilityOnNames($bdd, $rank){
    $req = $bdd->prepare('select name_compatibility_description from name_compatibility where name_compatibility_rank=?');
    $req->execute(array($rank));
    return $req->fetch()['name_compatibility_description'];
}