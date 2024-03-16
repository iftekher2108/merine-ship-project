<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMTA Group</title>

    <!-- custom bootstrap 5.3.2 -->
    <link rel="stylesheet" href="./assets/src/scss/custom-boot.min.css">

    <!-- fontawesome 6.5.1 -->
    <link rel="stylesheet" href="./assets/plugins/fontawesome/css/all.min.css">

    <!-- slick style -->
    <link rel="stylesheet" href="./assets/plugins/slick/slick.css">
    <link rel="stylesheet" href="./assets/plugins/slick/slick-theme.css">

    <!-- custom style -->
    <link rel="stylesheet" href="./assets/src/css/style.css">
    <link rel="stylesheet" href="./assets/src/scss/responsive.min.css">
</head>

<body>

    <div class="hero-section">


        <!-- nav menu bar -->
        <div class="nav-menu fixed-top">


            <!-- <div class="container info-content">
                <div class=" d-none d-xxl-flex d-xl-flex d-lg-flex d-md-flex d-sm-none align-items-center justify-content-between mt-5">
                    <div>

                    </div>

                    <div class="d-flex gap-3 align-items-center flex-wrap">
                        <div class="d-flex align-items-center gap-2 text-dark fw-bold">
                            <span class=" text-primary"><i class="fa-solid fs-4 fa-envelope"></i></span>
                            <p class="p-0 m-0">info@smta-group.com</p>
                        </div>
                        <div class="d-flex align-items-center gap-2 text-dark fw-bold">
                            <span class=" text-primary"><i class="fa-solid fs-4 fa-square-phone"></i></span>
                            <p class="p-0 m-0">+880 1810-020098</p>
                        </div>
                    </div>

                </div>

            </div> -->

            <nav class="navbar menu small align-items-center navbar-expand-lg">
                <div class="container">

                    <a class="navbar-brand d-lg-none d-md-block d-block" href="index.php">
                        <img src="./assets/images/logo-2.png" width="100" class="img-fluid z-4 p-0 m-0" alt="logo">
                    </a>

                    <button class="navbar-toggler bg-primary me-3 mb-3 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid text-white p-1 fs-3 fa-bars"></i>
                    </button>

                    <div class="collapse m-auto navbar-collapse" id="navbarSupportedContent">

                        <div class="d-flex align-items-center justify-content-around w-100">
                            <ul class="navbar-nav align-items-center w-100 justify-content-around m-auto text-primary small mb-lg-0">

                                <li class="nav-item"><a href="./index.php" class="nav-link"> Home </a></li>
                                <li class="nav-item"><a href="" class="nav-link"> About </a></li>
                                <li class="nav-item"><a href="./service.php" class="nav-link"> Services </a></li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Enterprise
                                    </a>
                                    <ul class="dropdown-menu animate slideIn" aria-labelledby="dropdownMenuButton">
                                        <!-- <li><a class="dropdown-item" href="#">Constraction and Engineering</a></li>
                                        <li>
                                            <a class="dropdown-item" href="#">Shipping and Merine Services</a>
                                        </li> -->

                                        <li>
                                            <a class="dropdown-item">
                                                Dredging <i class="fa-solid small fa-caret-right"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-submenu animate slideIn">
                                                <li>
                                                    <a class="dropdown-item" href="#">Dredging and engineering
                                                         <!-- <i class="fa-solid small fa-caret-right"></i> -->
                                                         </a>
                                                    <!-- <ul class="dropdown-menu dropdown-submenu animate slideIn">
                                                        <li>
                                                            <a class="dropdown-item" href="#">Sub sub item 5</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">Multi level 2</a>
                                                        </li>
                                                    </ul> -->
                                                </li>

                                            </ul>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="#">Shipping/Constraction <i class="fa-solid small fa-caret-right"></i> </a>
                                            <ul class="dropdown-menu dropdown-submenu animate slideIn">
                                                <li>
                                                    <a class="dropdown-item" href="#">M/S SMTA Shipping and Merine Services</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">M/S SMTA Constraction and Engineering</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <!-- <li>
                                            <a class="dropdown-item">
                                                items-3 <i class="fa-solid small fa-caret-right"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-submenu animate slideIn">
                                                <li>
                                                    <a class="dropdown-item" href="#">Shipping/Constraction <i class="fa-solid small fa-caret-right"></i> </a>
                                                    <ul class="dropdown-menu dropdown-submenu animate slideIn">
                                                        <li>
                                                            <a class="dropdown-item" href="#">M/S SMTA Shipping and Merine Services</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">M/S SMTA Constraction and Engineering</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </li> -->

                                        <!-- <li>
                                            <a class="dropdown-item">
                                                items-3 <i class="fa-solid small fa-caret-right"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-submenu animate slideIn">
                                                <li>
                                                    <a class="dropdown-item" href="#">Submenu item 5 <i class="fa-solid small fa-caret-right"></i> </a>
                                                    <ul class="dropdown-menu dropdown-submenu animate slideIn">
                                                        <li>
                                                            <a class="dropdown-item" href="#">Multi level 1</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">Multi level 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Submenu item 2</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Submenu item 3 <i class="fa-solid small fa-caret-right"></i> </a>
                                                    <ul class="dropdown-menu dropdown-submenu animate slideIn">
                                                        <li>
                                                            <a class="dropdown-item" href="#">Multi level 1</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">Multi level 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Submenu item 4</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">Submenu item 5 <i class="fa-solid small fa-caret-right"></i> </a>
                                                    <ul class="dropdown-menu dropdown-submenu animate slideIn">
                                                        <li>
                                                            <a class="dropdown-item" href="#">Multi level 1</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="#">Multi level 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> -->

                                    </ul>
                                </li>
                                <li class="nav-item"><a href="" class="nav-link"> Gellery </a></li>

                                <a class="navbar-brand d-lg-block mx-5 m-auto d-md-none d-none" href="index.php">
                                    <img src="./assets/images/logo-2.png" width="230" class="img-fluid  z-4" alt="logo">
                                </a>

                                <li class="nav-item"><a href="./news.php" class="nav-link"> News & Evants</a></li>
                                <li class="nav-item"><a href="" class="nav-link">Career</a></li>
                                <li class="nav-item"><a href="./contact.php" class="nav-link">Contact Us</a></li>

                                <li class="ms-lg-4">
                                    <a href="https://www.bb.org.bd/en/index.php/econdata/exchangerate" target="_blank" class=" bg-primary exchange text-white py-2 px-5 rounded-pill">Exchange Rate</a>
                                </li>
                            </ul>

                        </div>



                        <!-- <li class="nav-item dropdown"><a href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" class="nav-link dropdown-toggle"> Business </a>

                                <ul class="dropdown-menu animate slideIn">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>

                            </li> -->





                    </div>
                </div>
            </nav>
        </div>

        <!-- nav menu bar -->