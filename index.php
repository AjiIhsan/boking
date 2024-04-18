<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mezza Voice - HOME</title>
    <!-- swiper js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <?php require('layout/links.php'); ?>
</head>

<body class="bg-light">

    <?php require('layout/header.php'); ?>

    <!-- carousel awal -->
    <div class="container-fluid mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/1.png" class="w-120 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.png" class="w-120 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/3.png" class="w-120 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/4.png" class="w-120 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/5.png" class="w-120 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/6.png" class="w-120 d-block">
                </div>

            </div>
        </div>
    </div>
    <!-- carousel akhir -->


    <!-- Our music start -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR MUSIC EVENT</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/musicevent/wedding.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Acara Wedding</h5>
                        <div class="d-flex justify-content-between mb-2 mt-4">
                            <a href="booking.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/musicevent/wedding.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Acara Formal</h5>
                        <div class="d-flex justify-content-between mb-2 mt-4">
                            <a href="booking.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/musicevent/wedding.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Acara Non-Formal</h5>
                        <div class="d-flex justify-content-between mb-2 mt-4">
                            <a href="booking.php" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="musicevent.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Music Event >>></a>
            </div>
        </div>
    </div>
    <!-- Our music end -->

    <!-- schedule & booking start -->
    <h2 class="mt-5 pt-4 mb-5 text-center fw-bold h-font">Schedule & Booking</h2>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-5 px-4">
                    <div class="bg-white rounded shadow p-4">
                        <h5>Schedule Mezza Voice</h5>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Tanggal Booking</th>
                                    <th scope="col">Acara</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mark</td>
                                    <td>08-03-2025</td>
                                    <td>Wedding</td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>29-03-2025</td>
                                    <td>Wedding</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-5 px-2">
                    <div class="bg-white rounded shadow p-3">
                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3" style="font-size: 18px;">Form Booking Mezza Voice</h5>
                            <!-- nama -->
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control shadow-none mb-2">

                            <!-- alamat -->
                            <div class="mt-2">
                                <label class="form-label">Alamat</label>
                                <textarea class="form-control shadow-none" rows="3" style="resize: none;"></textarea>
                            </div>

                            <!-- Tanggal  -->
                            <label class="form-label mt-2">Tanggal</label>
                            <input type="date" class="form-control shadow-none">

                            <!-- acara -->
                            <label class="form-label mt-2">Acara</label>
                            <select class="form-select mb-3 ">
                                <option selected>--silahkan pilih acara--</option>
                                <option value="wedding">Wedding</option>
                                <option value="ulang tahun">Ulang Tahun</option>
                                <option value="acara formal">Acara Formal</option>
                                <option value="acara nonformal">Acara non-formal</option>
                            </select>

                            <!-- button -->
                            <button type="submit" class="btn text-white custom-bg mt-3">Booking</button>
                        </div>





                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- schedule & booking end -->

    <!-- Testimonials start -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/1.svg" width="30px">
                        <h6 class="m-0 ms-2">Sanzches</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Maiores tempora numquam optio aperiam cumque, tenetur nulla
                        fugiat provident explicabo ipsam!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-dark"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/1.svg" width="30px">
                        <h6 class="m-0 ms-2">Sanzches</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Maiores tempora numquam optio aperiam cumque, tenetur nulla
                        fugiat provident explicabo ipsam!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/1.svg" width="30px">
                        <h6 class="m-0 ms-2">Sanzches</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Maiores tempora numquam optio aperiam cumque, tenetur nulla
                        fugiat provident explicabo ipsam!
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-dark"></i>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- Testimonials end -->

    <!-- Reach us start -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.5440524090723!2d105.90789177474907!3d-6.057104193928728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e418446050b2fa7%3A0xdedee4b9287f440a!2sAllisa%20Resort%20Hotel%20Anyer!5e0!3m2!1sid!2sid!4v1713163606556!5m2!1sid!2sid" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call Us</h5>
                    <a href="tel: 0254601430" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> 0254601430</a><br>
                    <a href="tel: 0254601430" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> 0254601430</a>
                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-twitter me-1"></i> Mezza_Voice
                        </span>
                    </a><br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-instagram me-1"></i> Mezza_Voice
                        </span>
                    </a><br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                            <i class="bi bi-facebook me-1"></i> Mezza Voice
                        </span>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!-- Reach us end -->

    <?php require('layout/footer.php'); ?>


    <!-- swiper js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });

        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
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
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>

</html>