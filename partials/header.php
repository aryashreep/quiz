<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
require_once("./core/dbclass.php");
require_once("./core/request.php");
require_once("./core/session.php");
require_once("./core/component.php");
require_once("./core/controller.php");
require_once("./core/ajaxdata.php");
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Bhagavad Question and Answer Quiz">
<meta name="author" content="Aryashree Pritikrishna">
<meta name="generator" content="PHP Opensource">
<title>Welcome to Bhagavad Question and Answer Quiz!</title>
<link rel="apple-touch-icon" sizes="180x180" href="./assets/img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon-16x16.png">
<link rel="manifest" href="./site.webmanifest">
<link rel="manifest" href="./manifest.json">
<link rel="canonical" href="<?php echo $url;?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="./assets/js/custom.js" crossorigin="anonymous"></script>
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
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none">
                    <span class="me-3">
                    <a href="https://www.iskconbangalore.co.in/" target="_blank"><img class="img-fluid" src="./assets/img/logo.png" width="25%"></a>
                    </span>
                </div>
                <div
                    class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-end">
                <marquee class="h2" behavior="scroll" direction="left" scrollamount="12"><img class="img-fluid" src="./assets/img/krishna_yoga_crop.png" width="5%"> Hare Krishna Hare Krishna Krishna Krishna Hare Hare ☸ Hare Rama Hare Rama Rama Rama Hare Hare <img class="img-fluid" src="./assets/img/krishna_yoga_crop.png" width="5%"> Hare Krishna Hare Krishna Krishna Krishna Hare Hare 🐚 Hare Rama Hare Rama Rama Rama Hare Hare <img class="img-fluid" src="./assets/img/krishna_yoga_crop.png" width="5%"> Hare Krishna Hare Krishna Krishna Krishna Hare Hare 🏹 Hare Rama Hare Rama Rama Rama Hare Hare <img class="img-fluid" src="./assets/img/krishna_yoga_crop.png" width="5%"></marquee>
                </div>
                <div
                    class="col-lg-2 col-md-2 col-sm-12 col-xs-12 text-end">
                    <span class="me-3"><div id="google_translate_element"></div></span>
                </div>
            </div>
        </div>
    </div>