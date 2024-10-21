<nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light p-3 shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo substr( $url, 0, strrpos( $url, "?"));?>"><img src="./assets/img/jagannath.png" width="30%"> <span class="fs-3 fw-bolder text-secondary">Veda Quiz</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" collapse navbar-collapse col-lg-10 col-md-10" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="<?php echo substr( $url, 0, strrpos( $url, "?"));?>?section=scriptures">Quiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 text-uppercase" href="<?php echo substr( $url, 0, strrpos( $url, "?"));?>?section=my_result">My Result</a>
                    </li>
                    <?php
                    if(isset($_SESSION['role']) && $_SESSION['role'] == 1)
                    {
                    ?>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link mx-2 text-uppercase" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Admin
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?php echo substr( $url, 0, strrpos( $url, "?"));?>?section=add_scriptures">Add Scriptures</a></li>
                        <li><a class="dropdown-item" href="<?php echo substr( $url, 0, strrpos( $url, "?"));?>?section=add_chapter">Add Chapters</a></li>
                        <li><a class="dropdown-item" href="<?php echo substr( $url, 0, strrpos( $url, "?"));?>?section=add_verse">Add Verse</a></li>
                        <li><a class="dropdown-item" href="<?php echo substr( $url, 0, strrpos( $url, "?"));?>?section=add_question">Add Questions</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?php echo substr( $url, 0, strrpos( $url, "?"));?>?section=user_results">Devotee Marks</a></li>
                    </ul>
                    </li>                    
                    <?php
                    }
                    ?>
                </ul>
                <ul class="navbar-nav ms-auto text-end">
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