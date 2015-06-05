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

function GetDreamNameAndDescription($bdd, $dream){
    $req = $bdd->prepare('select dream_name, dream_description from dream where dream_name=?');
    $req->execute(array($dream));
    $dream = array();
    $dream = $req->fetchAll();

    return $dream;
}

function SearchName($bdd, $name){
    $req = $bdd->prepare('select name_signification from name_signification where name_signification=?');
    $req->execute(array($name));
    return $req->fetch()['name_signification'];
}

function GetNameSignification($bdd, $name){
    $req = $bdd->prepare('select name_signification,name_signification_description  from name_signification where name_signification=?');
    $req->execute(array($name));
    return $req->fetchAll();
}

function GetNameStartWithLetter($bdd, $letter){
    $letter = $letter.'%';
    $req = $bdd->prepare('select name_signification from name_signification where name_signification like ?');
    $req->execute(array($letter));
    $names = array();
    $i = 0;
    while($row = $req->fetch()){
        $names[$i]['name_signification'] = $row['name_signification'];
    }

    return $names;
}