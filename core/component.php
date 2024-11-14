<?php
$time_passed = strtotime(date('H:i:s'))- strtotime(108);
//$conn = new Query("localhost", "iskcop35_quiz", "An8)wvqOk@K%", "iskcop35_scriptures_quiz");
$conn = new Query("localhost", "root", "", "scriptures_quiz");
$notice = "";
/* SQL */
$centers = $conn->select("centers");
$scriptures = $conn->select("scriptures");
$chapters = $conn->select("chapters");
$verses = $conn->select("verse");
$questions = $conn->select("questions");
$user_answers = $conn->select("user_answers");

/* methods */
function successAlert($msg) {
    $_SESSION['alert'] =  "<div class='row text-center'><div class='alert alert-success col-md-12' role='alert'>$msg</div></div>";
    return $_SESSION['alert'];
}

function failAlert($msg) {
    return "<div class='row text-center'><div class='alert alert-danger col-md-12' role='alert'>$msg</div></div>";
}

function redirect($url) {
    echo "<script> location.href='$url'; </script>";
    exit;
}

function welcome($first_name, $last_name, $initiated_name, $gender){
    if($gender == 'Male') {
        $devotee = 'Prabhu';
    } else {
        $devotee = 'Mata';
    }
    if($initiated_name){
        $name = ucfirst($initiated_name);
    } else {
        $name = ucfirst($first_name) . " " . ucfirst($last_name);
    }
    return "<span><h6>Hare Krishna 🙏🏼<br><b>$name $devotee</b><br>Dandavat Pranam</h6><span>";
}

function get_name($conn, $table = 'users', $field = '*', $condition_field = 'id', $value = 0){
    return $conn->select($table, $field, "WHERE ". $condition_field . "=" . $value);
}

function admin_auth($url, $role = 0){
    if($role == 0) {
        redirect(substr( $url, 0, strrpos( $url, "?")));
    }
}

function filter_filename($str = '')
{
    $str = strip_tags($str);
    $str = preg_replace('/[\r\n\t ]+/', ' ', $str);
    $str = preg_replace('/[\"\*\/\:\<\>\?\'\|]+/', ' ', $str);
    $str = strtolower($str);
    $str = html_entity_decode( $str, ENT_QUOTES, "utf-8" );
    $str = htmlentities($str, ENT_QUOTES, "utf-8");
    $str = preg_replace("/(&)([a-z])([a-z]+;)/i", '$2', $str);
    $str = str_replace(' ', '-', $str);
    $str = rawurlencode($str);
    $str = str_replace('%', '-', $str);
    return $str;
}