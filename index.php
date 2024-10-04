<!doctype html>
<html lang="en" data-bs-theme="auto">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Hugo 0.122.0">
<title>Carousel Template · Bootstrap v5.3</title>
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="carousel.css" rel="stylesheet">

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
    <nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="bi bi-flower1" style="font-size: 2rem;"></i> <strong>Bhagavad Gita Quiz</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase active" aria-current="page" href="#">Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#">Catalog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#">
                        <button type="button" class="btn btn-warning">Login</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="#">
                        <button type="button" class="btn btn-warning">Sign-up</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Main Navigation-->

    <main>

        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/img/slider1.jpg" class="img-fluid" />
                    <div class="container-fluid d-none d-md-block">
                        <div class="carousel-caption text-start">
                            <h1 class="text-dark">Bhagavad Gita Chapter 5 Verse 22</h1>
                            <p class="opacity-75"><mark>The mystics derive unlimited transcendental pleasures from the
                                    Absolute Truth, and therefore the Supreme Absolute Truth, the Personality of
                                    Godhead, is also known as Rama.</mark></p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up for quiz</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/slider2.jpg" class="img-fluid" />
                    <div class="container-fluid d-none d-md-block">
                        <div class="carousel-caption">
                            <h1 class="text-light">Bhagavad Gita Chapter 4 Verse 31</h1>
                            <p><mark>Ignorance is the cause of sinful life, and sinful life is the cause of one’s
                                    dragging on in material existence.<mark></p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up for quiz</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/slider3.jpg" class="img-fluid" />
                    <div class="container-fluid d-none d-md-block">
                        <div class="carousel-caption text-end">
                            <h1 class="text-light">Bhagavad Gita Chapter 10 Verse 8</h1>
                            <p><mark>Those who have entered into a transcendental relationship with Krishna relish at
                                    every step the descriptions of the pastimes of the Lord.<mark></p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up for quiz</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <div class="row">
                <h3 class="mobile-text d-flex justify-content-center align-items-cente">Welcome to Bhagavad Gita Question and
                    Answer Quiz!</h3>
            </div>

            <hr class="featurette-divider">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img src="./assets/img/baladeva.jpeg" class="img-fluid rounded-circle" width="140" height="140" />
                    <h2 class="fw-normal">Jay Baladev</h2>
                    <p>Balarāma, bala means strength and rāma means enjoyment. So Balarāma means who gives you spiritual
                        strength for enjoying eternal blissful life.</p>
                    <p><a class="btn btn-secondary" href="#">View quiz &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="./assets/img/subhadra.jpeg" class="img-fluid rounded-circle" width="140" height="140" />
                    <h2 class="fw-normal">Jay Subhadra</h2>
                    <p>Subhadra is Krsna's sister who when entering Vrndavan at the birth of Krsna is yoga maya and then
                        becomes maha maya when going to Mathura.</p>
                    <p><a class="btn btn-secondary" href="#">View quiz &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="./assets/img/jagannath.jpeg" class="img-fluid rounded-circle" width="140" height="140" />
                    <h2 class="fw-normal">Jay Jagannath</h2>
                    <p>Lord Jagannatha is an ocean of mercy and as beautifull as a row of blackish rain clouds. He is
                        the storehouse of bliss for laksmi and Sarsavati.</p>
                    <p><a class="btn btn-secondary" href="#">View quiz &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Bhagavad gita Chapter 1 : Observing the Armies on the
                        Battlefield of <span class="text-body-secondary">Kurukṣetra.</span></h2>
                    <p class="lead pt-3 ps-3 pe-3">
                        Although Lord Kṛṣṇa is the Supreme Personality of Godhead, out of His causeless mercy He was
                        engaged in the service of His friend. He never fails in His affection for His devotees, and thus
                        He is addressed herein as infallible. As charioteer, He had to carry out the orders of Arjuna,
                        and since He did not hesitate to do so, He is addressed as infallible. Although He had accepted
                        the position of a charioteer for His devotee, His supreme position was not challenged. In all
                        circumstances, He is the Supreme Personality of Godhead, Hṛṣīkeśa, the Lord of the total senses.
                        The relationship between the Lord and His servitor is very sweet and transcendental. The
                        servitor is always ready to render service to the Lord, and, similarly, the Lord is always
                        seeking an opportunity to render some service to the devotee. He takes greater pleasure in His
                        pure devotee’s assuming the advantageous position of ordering Him than He does in being the
                        giver of orders. Since He is master, everyone is under His orders, and no one is above Him to
                        order Him. But when He finds that a pure devotee is ordering Him, He obtains transcendental
                        pleasure, although He is the infallible master in all circumstances.
                    </p>
                    <p class="lead  pt-3 ps-3 pe-3">
                        As a pure devotee of the Lord, Arjuna had no desire to fight with his cousins and brothers, but
                        he was forced to come onto the battlefield by the obstinacy of Duryodhana, who was never
                        agreeable to any peaceful negotiation. Therefore, he was very anxious to see who the leading
                        persons present on the battlefield were. Although there was no question of a peacemaking
                        endeavor on the battlefield, he wanted to see them again, and to see how much they were bent
                        upon demanding an unwanted war.
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="./assets/img/ch1.jpg" class="featurette-image img-fluid mx-auto" />
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">Bhagavad gita Chapter 2 : Contents of the <span
                            class="text-body-secondary">Gītā
                            Summarized.</span></h2>
                    <p class="lead pt-3 ps-3 pe-3">
                        Since every living entity is an individual soul, each is changing his body every moment,
                        manifesting sometimes as a child, sometimes as a youth and sometimes as an old man. Yet the same
                        spirit soul is there and does not undergo any change. This individual soul finally changes the
                        body at death and transmigrates to another body; and since it is sure to have another body in
                        the next birth – either material or spiritual – there was no cause for lamentation by Arjuna on
                        account of death, neither for Bhīṣma nor for Droṇa, for whom he was so much concerned. Rather,
                        he should rejoice for their changing bodies from old to new ones, thereby rejuvenating their
                        energy. Such changes of body account for varieties of enjoyment or suffering, according to one’s
                        work in life. So Bhīṣma and Droṇa, being noble souls, were surely going to have spiritual bodies
                        in the next life, or at least life in heavenly bodies for superior enjoyment of material
                        existence. So, in either case, there was no cause of lamentation.
                    </p>
                    <p class="lead pt-3 ps-3 pe-3">
                        Any man who has perfect knowledge of the constitution of the individual soul, the Supersoul, and
                        nature – both material and spiritual – is called a dhīra, or a most sober man. Such a man is
                        never deluded by the change of bodies.
                    </p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="./assets/img/ch2.jpg" class="featurette-image img-fluid mx-auto" />
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Bhagavad gita Chapter 3 : <span
                            class="text-body-secondary">Karma-yoga</span></h2>
                    <p class="lead pt-3 ps-3 pe-3">
                        There are many pseudo meditators who misrepresent themselves as belonging to high parentage, and
                        great professional men who falsely pose that they have sacrificed everything for the sake of
                        advancement in spiritual life. Lord Kṛṣṇa did not want Arjuna to become a pretender. Rather, the
                        Lord desired that Arjuna perform his prescribed duties as set forth for kṣatriyas. Arjuna was a
                        householder and a military general, and therefore it was better for him to remain as such and
                        perform his religious duties as prescribed for the householder kṣatriya. Such activities
                        gradually cleanse the heart of a mundane man and free him from material contamination. So-called
                        renunciation for the purpose of maintenance is never approved by the Lord, nor by any religious
                        scripture. After all, one has to maintain one’s body and soul together by some work. Work should
                        not be given up capriciously, without purification of materialistic propensities. Anyone who is
                        in the material world is certainly possessed of the impure propensity for lording it over
                        material nature, or, in other words, for sense gratification. Such polluted propensities have to
                        be cleared. Without doing so, through prescribed duties, one should never attempt to become a
                        so-called transcendentalist, renouncing work and living at the cost of others.
                    </p>
                </div>
                <div class="col-md-5">
                    <img src="./assets/img/ch3.jpg" class="featurette-image img-fluid mx-auto" />
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->
        <footer class="container">
            <p class="float-end"><a href="#">Back to top</a></p>
            <p>&copy; <?php echo date("Y")?> &nbsp;<a href="https://vedabase.io/en/library/bg/"
                    target="_blank">Bhagavad-gītā As It Is</a>. &middot;</p>
        </footer>
    </main>
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
</body>

</html>