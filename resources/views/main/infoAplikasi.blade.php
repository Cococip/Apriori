<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengembang Aplikasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .card-img-top {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Judul Besar -->
        <div class="row">
            <div class="col-12">
                <h1 class="text-center my-4">PENGEMBANG APLIKASI</h1>
            </div>
        </div>

        <div class="row">
            <!-- Card 1 -->
            <div class="col-lg-4">
                <div class="card">
                    <img src="{{ asset('riska.jpeg') }}" class="card-img-top" alt="Developer 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Riska Destiana</h5>
                        <p class="card-text">
                            Mahasiswa Informatika<br/>
                            Universitas Janabadra
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-4">
                <div class="card">
                    <img src="{{ asset('jeamy.png') }}" class="card-img-top" alt="Developer 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Jemmy Edwin Bororing, S.Kom., M.Eng.</h5>
                        <p class="card-text">
                            Dosen Informatika<br/>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-lg-4">
                <div class="card">
                    <img src="{{ asset('yumarlin.png') }}" class="card-img-top" alt="Developer 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Yumarlin MZ, S.Kom., M.Pd., M.Kom.</h5>
                        <p class="card-text">
                            Dosen Informatika<br/>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="text-center">
            <p>
                <i>Website ini dikembangkan menggunakan framework Laravel, dengan algoritma perhitungan menggunakan algoritma APRIORI</i>
            </p>
        </div>
    </div>
</body>
</html>
