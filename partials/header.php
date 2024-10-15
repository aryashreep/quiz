<?php
require_once("./core/dbclass.php");
require_once("./core/request.php");
require_once("./core/session.php");
$time_passed = strtotime(date('H:i:s'))- strtotime(108);
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