<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MEZZA VOICE - ABOUT</title>
    <!-- swiper js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <?php require('layout/links.php'); ?>
    <style>
        .h-line {
            width: 150px;
            margin: 0 auto;
            height: 1.7px;
        }

        .box {
            border-top-color: #2ec1ac !important;
        }
    </style>
</head>

<body class="bg-light">

    <?php require('layout/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Architecto atque dolorum ab <br>quasi molestias, cumque accusantium
            ratione placeat officia fugit.
        </p>
    </div>

    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
                <h3 class="mb-3">MEZZA VOICE</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Possimus cum animi neque numquam velit pariatur omnis ducimus
                    explicabo molestias. At, nulla rerum dolorem nostrum quidem consectetur,
                    animi odit voluptatum magni porro laborum aut iure possimus ducimus ab cum quae
                    voluptatem minima doloribus maxime temporibus, sit ratione amet. Qui, enim nesciunt.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
                <img src="images/about/wedding.jpg" class="w-100">
            </div>
        </div>
    </div>


    <?php require('layout/footer.php'); ?>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 4,
            spaceBetween: 40,
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                6400: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

</html>