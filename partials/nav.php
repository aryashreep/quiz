<nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo substr( $url, 0, strrpos( $url, "?"));?>"><i class="bi bi-flower1" style="font-size: 2rem;"></i> <strong>Bhagavad Gita Quiz</strong></a>
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
                    <?php
                    if(isset($_SESSION['uid']) && $_SESSION['uid'])
                    {
                        $a_login = welcome($_SESSION['first_name'], $_SESSION['last_name'], $_SESSION['initiated_name'], $_SESSION['gender']);
                        ?>
                        <li class="nav-item"><?php echo $a_login;?></li>
                        <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="<?php echo substr( $url, 0, strrpos( $url, "?"));?>?section=logout">
                        <button type="button" class="btn btn-warning">Logout</button>
                        </a>
                    </li>
                        <?php
                    }
                    else {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="<?php echo substr( $url, 0, strrpos( $url, "?"));?>?section=login">
                        <button type="button" class="btn btn-warning">Login</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="<?php echo substr( $url, 0, strrpos( $url, "?"));?>?section=signup">
                        <button type="button" class="btn btn-warning">Sign-up</button>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!--Main Navigation-->