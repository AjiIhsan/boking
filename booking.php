<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MEZZA VOICE - BOOKING</title>
    <!-- swiper js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <?php require('layout/links.php'); ?>
    <style>
        .h-line {
            width: 150px;
            margin: 0 auto;
            height: 1.7px;
        }
    </style>
</head>

<body class="bg-light">

    <?php require('layout/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">SCHEDULE & BOOKING</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            <span class="badge text-bg-secondary">
                NOTE : Sebelum Booking pastikan melihat jadwal disamping terlebih dahulu. <br> <br>
                dan pastikan tanggal yang di Booking tidak ada jadwal disamping
            </span>
        </p>
    </div>

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
                                    <td>Mark</td>
                                    <td>Otto</td>
                                </tr>
                                <tr>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>Thornton</td>
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


    <?php require('layout/footer.php'); ?>

</body>

</html>