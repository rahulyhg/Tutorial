<?php

    function ExistUser($bdd, $userEmail){
        $req = $bdd->prepare('select count(user_id) from user
                                                    where email=?');
        $req->execute(array($userEmail));
        $existUser  = $req->fetch()['count(user_id)'];
        if($existUser != 0){
            return true;
        }
        else{
            return false;
        }
    }

    function GetUserId($bdd, $userEmail){
        $req = $bdd->prepare('select user_id from user where email=?');
        $req->execute(array($userEmail));

        return $req->fetch()['user_id'];
    }

    function InsertNewUser($bdd, $userEmail, $userPassword){
        $req = $bdd->prepare('insert into user (email, password) VALUES (?, ?)');
        $req->execute(array($userEmail, $userPassword));

        return $lastInsertId = $bdd->lastInsertId();
    }

    function GetUserEmail($bdd, $userId){
        $req = $bdd->prepare('select email from user where user_id=?');
        $req->execute(array($userId));

        return $req->fetch()['email'];
    }