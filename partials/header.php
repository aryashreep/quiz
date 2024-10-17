<?php
session_start();
require_once("./core/dbclass.php");
require_once("./core/request.php");
require_once("./core/session.php");
require_once("./core/component.php");
$time_passed = strtotime(date('H:i:s'))- strtotime(108);
$conn = new Query("localhost", "root", "", "scriptures_quiz");
$centers = $conn->select("centers");
$uri = new Request();
$url = $uri->fullUrl();
$notice = "";
/* Login */
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $auth = $conn->authenticate($_POST['phone_no'], $_POST['password'], 'users');
    if($auth) {
       reset($auth);
       $auth = reset($auth);
       $_SESSION['uid'] = $auth["uid"];
       $_SESSION['role'] = $auth["role"];
       $_SESSION['first_name'] = $auth["first_name"];
       $_SESSION['last_name'] = $auth["last_name"];
       $_SESSION['initiated_name'] = $auth["initiated_name"] ? $auth["initiated_name"] : 0;
       $_SESSION['phone_no'] = $auth["phone_no"];
       $_SESSION['gender'] = $auth["gender"];
       $_SESSION['cid'] = $auth["cid"];
       $_SESSION['created_date'] = $auth["created_date"];
       redirect(substr( $url, 0, strrpos( $url, "?")));
    } else {
      $_SESSION['alert'] = failAlert("You have entered an invalid Mobile number or password!");
    }
  }
 /* Logout */

 if(){
    session_unset();
    session_destroy();
    redirect(substr( $url, 0, strrpos( $url, "?")));
 }
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Aryashree Pritikrishna">
<meta name="generator" content="PHP Opensource">
<title>Welcome to Bhagavad Gita Question and Answer Quiz!</title>
<link rel="icon" type="image/x-icon" href="./favicon.ico">
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="./assets/css/custom.css" rel="stylesheet">

<script type="text/javascript">
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en'
    }, 'google_translate_element');
}
</script>
</head>

<body>
    <!--Main Navigation-->
    <div class="border-bottom py-2 bg-light htg">
        <div class="container-fluid">
            <div class="row info-text">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none">
                    <span
                        class="me-3"><strong>Sri Jagannath Mandir, <a href="https://www.iskconbangalore.co.in/" target="_blank">ISKCON Seshadripuram</a></strong></span>
                </div>
                <div
                    class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-end">
                    <span class="me-3"><div id="google_translate_element"></div></span>
                </div>
            </div>
        </div>
    </div>