
        <!-- FOOTER -->
        <footer class="container">
            <div class="row">
                <div class="col-sm-4">&copy; <?php echo date("Y")?>
                        <a href="https://www.iskconbangalore.co.in/" target="_blank">ISKCON Seshadripuram</a>
                </div>
                <div class="col-sm-4 text-center"><img class="img-fluid" src="./assets/img/dandavat_pranam.png" width="70%"><br><span class="blink_text"><?php echo date("l jS\, F Y");?></span></div>
                <div class="col-sm-4 text-end"><a href="#">Back to top</a></div>
            </div>
        </footer>
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script type="text/javascript">
    if ("serviceWorker" in navigator) {
      window.addEventListener("load", function () {
        navigator.serviceWorker
          .register("./serviceWorker.js")
          .then(res => console.log("service worker registered"))
          .catch(err => console.log("service worker not registered", err));
      });
    }
  </script>
</body>
</html>