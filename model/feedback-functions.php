<?php

    function InsertFeedBack($bdd, $feedback){
        $req = $bdd->prepare('insert into feedback (user_name, email, content) VALUES (?,?,?)');
        $req ->execute(array(
            $feedback['user-name'],
            $feedback['email'],
            $feedback['content']
        ));
    }
