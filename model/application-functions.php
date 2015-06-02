<?php


function GetCompatibilityOnNames($bdd, $rank){
    $req = $bdd->prepare('select name_compatibility_description from name_compatibility where name_compatibility_rank=?');
    $req->execute(array($rank));
    return $req->fetch()['name_compatibility_description'];
}

function GetDreamsStartWithLetter($bdd, $letter){
    $letter = $letter.'%';
    $req = $bdd->prepare('select dream_name from dream where dream_name like ? ');
    $req->execute(array($letter.'%'));
    $i = 0;
    $dreams = array();
    while($row = $req->fetch()){
        $dreams[$i]['dream_name'] = $row['dream_name'];
        $i++;
    }
    return $dreams;
}