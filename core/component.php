<?php

function successAlert($msg) {
    $_SESSION['success_alert'] =  "<div class='row text-center'><div class='alert alert-success col-md-12' role='alert'>$msg</div></div>";
    return $_SESSION['success_alert'];
}

function failAlert($msg) {
    return "<div class='row text-center'><div class='alert alert-danger col-md-12' role='alert'>$msg</div></div>";
}

function redirect($url) {
    print $url;
    echo "<script> location.href='$url'; </script>";
    exit;
}
