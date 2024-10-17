<?php

function successAlert($msg) {
    $_SESSION['alert'] =  "<div class='row text-center'><div class='alert alert-success col-md-12' role='alert'>$msg</div></div>";
    return $_SESSION['alert'];
}

function failAlert($msg) {
    return "<div class='row text-center'><div class='alert alert-danger col-md-12' role='alert'>$msg</div></div>";
}

function redirect($url) {
    print $url;
    echo "<script> location.href='$url'; </script>";
    exit;
}

function welcome($first_name, $last_name, $initiated_name, $gender){
    if($gender == 'Male') {
        $devotee = 'Prabhu Ji';
    } else {
        $devotee = 'Mata Ji';
    }
    if($initiated_name){
        $name = ucfirst($initiated_name);
    } else {
        $name = ucfirst($first_name) . " " . ucfirst($last_name);
    }
    return "<span><h6>Hare Krishna🙏🏼<br><b>$name $devotee</b><br>Dandavat Pranam</h6><span>";
}