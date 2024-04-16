<?php include './component/header.php'; ?>


<!-- main section  -->
<div class="news-hero position-relative">
    <img src="./assets/images/gallery-banner.jpg" class="img-fluid w-100 h-100" alt="feature-img">

    <div class="feature-content position-absolute bg-dark bg-opacity-30 text-white px-4 top-50 translate-middle-y">
        <h1 class="display-4 fw-bold text-uppercase">Gallery</h1>
        <!-- <p class="small col-lg-6 col-md-8 col-sm-10">
            A short description is a short piece of text that supports the app title. Once Play Store users land on your app's store listing page, the first screen they see ...
        </p> -->
    </div>

</div>

<div class="container-fluid">

    <div class="row g-2 m-0 py-4 mb-4">

        <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 m-auto p-2">
            <h1 class="text-primary text-capitalize mb-5 fw-bold">Gallery</h1>

                <div class="row g-2">

                <?php for($i = 1; $i<10; $i++) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="block-img m-1">
                                <img src="./assets/images/gellery/img-<?php echo $i ?>.jpg" class="gallery-img img-fluid shadow w-100" alt="news-img">
                            </div>
                    </div>

                    <?php } ?>

             
                </div>

                <div class="preview-block fixed-top w-100 h-100 bg-dark bg-opacity-75">
                    <span class="bg-primary preview-close"><i class="fa-solid m-auto fa-xmark"></i></span>
                    <div class="d-flex h-100 w-100 align-items-center m-auto p-lg-8 p-md-6 p-sm-4 justify-content-center">
                        <img src="" class="preview-img img-fluid w-100" alt="preview">
                    </div>
                        
                </div>

                <!-- <div class="d-flex justify-content-center py-4">
                    <nav aria-label="Page navigation">
                        <ul class="pagination gap-2">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div> -->


        </div>

        <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
            <div class="letest-news-section border border-1 border-primary">
                <h3 class="fw-bold text-center text-white p-3 bg-primary">Letest News</h3>
                <div class="p-2">
                    <?php
                    //  for ($i = 0; $i < 5; $i++) { 
                    ?>
                        <a class="nav-link news " href="#">
                            <div class="row g-2 mb-2 rounded shadow-sm">
                                <div class="col-3 mx-0 p-0">
                                    <img src="./assets/images/about-us.jpg" class="img-fluid p-0 m-0 w-100 h-100" alt="news">
                                </div>
                                <div class="col-9">
                                    <h5>letest news number-1</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, culpa!</p>
                                </div>
                            </div>
                        </a>
                    <?php // } 
                    ?>
                    <div class="w-100 p-2 mt-2">
                        <a href="#" class="btn btn-primary rounded-0 w-100 text-center">Read More</a>
                    </div>

                </div>
            </div>

        </div> -->

    </div>

</div>


<!-- main section  -->


<?php include './component/footer.php'; ?>