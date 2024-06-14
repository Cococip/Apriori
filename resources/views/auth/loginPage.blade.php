@include('layout.headerAuth')
<body class="bg-primary bg-pattern">
    <!-- Modal -->
    
    <div class="modal" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <img src="{{ asset('modal.png') }}" style="width: 100vw; height: 100vh; object-fit: cover;" alt="Modal Image">
                </div>
                <style>
                    .custom-outline-primary {
                        color: #3f78c0; /* Warna teks */
                        border-color: #3f78c0;
                        border-radius: 30px;
                        box-shadow: 0 0 20px 5px #3f78c0;
                         /* Warna outline */
                    }

                    .custom-outline-primary.btn:hover {
                        color: #fff; /* Warna teks saat disorot */
                        background-color: #3f78c0; /* Warna background saat disorot */
                        border-color: #3f78c0; /* Warna outline saat disorot */
                    }
                </style>

                <button id="btn-close" type="button" style="z-index: 99999999; position: absolute; bottom: 100px; left: 40px; font-size: 30px; border-width: 2px; font-weight: bold;" class="btn custom-outline-primary btn-lg" data-bs-dismiss="modal" aria-label="Close">MULAI IDENTIFIKASI</button>

            </div>
        </div>
    </div>

    <div class="home-btn d-none d-sm-block">
        <a href="{{ url('') }}"><i class="mdi mdi-home-variant h2 text-white"></i></a>
    </div>

    <div class="account-pages my-5 pt-5" id="divLogin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <h1 class="text-center  text-white my-4">Aplikasi Analisa Penjualan<br>Gig's Batik</h1>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="p-2">
                                <h5 class="mb-5 text-center">Login ke dalam Aplikasi</h5>
                                <form class="form-horizontal">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-4">
                                                <label for="txtUsername">Username</label>
                                                <input type="text" class="form-control" id="txtUsername" placeholder="Enter username">
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="txtPassword">Password</label>
                                                <input type="password" class="form-control" id="txtPassword" placeholder="Enter password">
                                            </div>

                                            <div class="mt-4">
                                                <a class="btn btn-info btn-block waves-effect waves-light" href="javascript:void(0)" @click="loginAtc()">Log In</a>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
   
    @include('layout.footerAuth')

    <script>
        $(document).ready(function(){
            $('#imageModal').modal('show');
        });

        $('#btn-close').on('click', function(){
            $('#imageModal').slideUp(300, function(){
                $(this).modal('hide');
            });
        });
    </script>
</body>
