<?php include './component/header.php'; ?>


<!-- main section  -->
<div class="news-hero position-relative">
    <img src="./assets/images/services-bg.jpg" class="img-fluid" alt="feature-img">

    <div class="feature-content position-absolute text-white px-4 top-50 translate-middle-y">
        <h1 class="fw-bold">News And Events</h1>
        <p class="small">short description</p>
    </div>

</div>

<div class="container-fluid">


    <nav aria-label="breadcrumb" class="my-3 ms-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Library</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
    </nav>

    <hr>

    <div class="row g-2 m-0 py-4">

        <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-12 col-sm-12 p-2">
            <h1 class="text-primary text-capitalize fw-bold">news Events title here</h1>
            <hr>
            <div class="d-flex align-items-center justify-content-between mb-4">
                <p class="p-0 m-0"><span class="text-primary fw-bold">Catagory: </span><a href="" class="text-decoration-none">Catagory </a> | <a href="" class="text-decoration-none">SubCatagory</a> | <a href="" class="text-decoration-none">Sub sub Catagory</a> </p>
                <p class="p-0 m-0"><span class="text-primary fw-bold">Date: </span>29 Feb 2024</p>
            </div>
            <div class="news-content text-justify">

                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis voluptatibus, quod culpa tempore magnam repellendus? Minus, repellat alias laboriosam ea labore explicabo, quam quisquam perferendis voluptates aut est veniam optio.
                </p>

                <h4 class="text-capitalize">sub title here</h4>

                <p>
                    it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                </p>

                <img src="https://www.royalihc.com/sites/default/files/styles/twig_image_landscape_1844_826/public/images/DSCF0032.webp?itok=A89a_0hm" class="img-fluid my-2 rounded" alt="news-image">

                <p>
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum,
                </p>

                <img src="https://www.royalihc.com/sites/default/files/styles/twig_image_landscape_1844_826/public/images/DSCF0032.webp?itok=A89a_0hm" class="img-fluid w-50 float-start m-2 rounded" alt="news-image">

                <h4 class="text-capitalize">sub title here</h4>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition

                </p>
                <img src="https://www.royalihc.com/sites/default/files/styles/twig_image_landscape_1844_826/public/images/DSCF0032.webp?itok=A89a_0hm" class="img-fluid w-50 float-end m-2 rounded" alt="news-image">

                <p>
                    Praesent congue dui orci, vitae interdum lectus placerat id. Praesent a neque ut nisl tempor sodales. Praesent ac urna aliquet ex imperdiet congue. Nunc pharetra malesuada dapibus. Integer vestibulum quam id faucibus laoreet. Suspendisse mattis quis lectus nec volutpat. Aliquam et vulputate ante. In in metus urna. Vestibulum et nisi vitae nunc euismod iaculis. In dui velit, egestas a pulvinar in, interdum ut ligula. Suspendisse purus neque, interdum vitae condimentum ut, consectetur at diam.

                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In scelerisque quam neque, eu pretium tortor dignissim eu. Duis felis risus, eleifend non turpis ac, consequat consectetur erat. Aliquam sollicitudin lectus ut libero ornare, at fermentum risus condimentum. Maecenas vitae feugiat leo, vitae placerat dolor. Nulla sed mi leo. Vivamus vitae euismod risus, et ullamcorper nibh. Etiam non fermentum mauris. Suspendisse quis scelerisque erat.
                </p>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8">

                <div class="d-flex gap-1 flex-wrap">
                    <?php
                    for ($i = 0; $i < 25; $i++) {
                    ?>
                        <span class="badge bg-primary">Tags<?php echo $i; ?></span>
                    <?php } ?>
                </div>

            </div>




        </div>

        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
            <div class="letest-news-section border border-1 border-primary">
                <h3 class="fw-bold text-center text-white p-3 bg-primary">Letest News</h3>
                <div class="p-2">
                    <?php for ($i = 0; $i < 5; $i++) { ?>
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
                    <?php } ?>
                    <div class="w-100 p-2 mt-2">
                        <a href="#" class="btn btn-primary rounded-0 w-100 text-center">Read More</a>
                    </div>

                </div>
            </div>

        </div>

    </div>

</div>


<!-- main section  -->


<?php include './component/footer.php'; ?>