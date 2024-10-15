<?php
require_once("./partials/header.php");
require_once("./partials/nav.php");
$uri = new Request();
$url = $uri->fullUrl();
$url_query = $uri->queryParam($url);
if(!empty($url_query["section"])){
    $getParam = $url_query["section"];
} else {
    $getParam = "carousel";
}
?>
    <main>

       <?php
       if($getParam == 'carousel'){
        require_once("./partials/carousel.php");
       }
       ?>

        <div class="container marketing">

            <div class="row">
                <h3 class="mobile-text d-flex justify-content-center align-items-cente pt-4">
                    <?php
                        if($getParam == 'carousel')
                        {
                    ?>
                        Welcome to Bhagavad Gita Question and Answer Quiz!
                    <?php
                        } else {
                            print ucfirst($getParam);
                        }
                    ?>
                </h3>
            </div>

            <hr class="featurette-divider">

            <?php
            $section_name = "./sections/" . $getParam . ".php";
            if($getParam == 'carousel'){
                require_once("./sections/home.php");
            } else {
                require_once($section_name);
            }
            ?>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->
        </main>
<?php
require_once("./partials/footer.php");
?>