<body style="font-family:poppins; background-color: black">
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark shadow-lg" style="background-color: black;">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('dashboard') ?>"><img src="https://static-assets.profiles.hallyulife.com/izone-logo-fix.png" width="100px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                </ul>

                <ul class="navbar-nav">

                    <li class="nav-item m-2">
                        <?php if ($this->session->userdata('username')) { ?>
                    <li class="m-3 text-white">Welcome! <?php echo $this->session->userdata('username') ?></li>
                    <?php echo anchor('auth/logout', ' <li class="nav-link btn btn-danger btn-sm text-white m-2" style="text-decoration: none;">Keluar</li>') ?>
                <?php } else { ?>
                    <a class="nav-link btn btn-outline-secondary btn-sm text-white" style="font-weight:500" href="<?php echo base_url('auth/login'); ?>"> Masuk </a>
                    </li>
                    <li class="nav-item m-2">
                        <a class="nav-link btn btn-light btn-sm text-dark" style="font-weight:600" href="<?= base_url('registrasi/index') ?>"> Daftar </a>
                    </li>
                <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide container" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url(); ?>assets/scene2.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-lg-block text-shadow">
                    <h1>All u want in US</h1>
                    <p>Website kami menyediakan berbagai macam kebutuhan anda untuk kebahagiaan anda dalam ber-KPOP</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url(); ?>assets/slider.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-lg-block">
                    <h1>All u want in US</h1>
                    <p>Website kami menyediakan berbagai macam kebutuhan anda untuk kebahagiaan anda dalam ber-KPOP</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                </div>
            </div>
            <div class="carousel-item ">
                <img src="<?= base_url(); ?>assets/slider2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-lg-block">
                    <h1>All u want in US</h1>
                    <p>Website kami menyediakan berbagai macam kebutuhan anda untuk kebahagiaan anda dalam ber-KPOP</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url(); ?>assets/scene1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-lg-block">
                    <h1>All u want in US</h1>
                    <p>Website kami menyediakan berbagai macam kebutuhan anda untuk kebahagiaan anda dalam ber-KPOP</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>

                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url(); ?>assets/slider1.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-lg-block">
                    <h1>All u want in US</h1>
                    <p>Website kami menyediakan berbagai macam kebutuhan anda untuk kebahagiaan anda dalam ber-KPOP</p>
                </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <div class="my-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-3 text-center">
                <div class="col">
                    <div class="card m-2">
                        <h2 class="m-2">Album</h2>
                        <div class="card-body">
                            <h1 class="fas fa-compact-disc mb-3"></h1>
                            <p class="card-text">
                                Menyediakan album-album official artis KPOP kesayangan anda!</p>
                            <a class="btn btn-outline-dark my-2" href="<?= base_url('kategori/album') ?>">Lihat Produk</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card m-2">
                        <h2 class="m-2">Idol</h2>
                        <div class="card-body">
                            <h1 class="fas fa-child mb-3"></h1>
                            <p class="card-text">Beli barang-barang kesayangan Idol anda disini!</p>
                            <a class="btn btn-outline-dark my-2" href="<?= base_url('kategori/idol') ?>">Lihat Produk</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card m-2">
                        <h2 class="m-2">Konser Kit</h2>
                        <div class="card-body">
                            <h1 class="fas fa-archive mb-3"></h1>
                            <p class="card-text">Lengkapi perlengkapan konser anda sekarang juga!</p>
                            <a class="btn btn-outline-dark my-2" href="<?= base_url('kategori/perlengkapan_konser') ?>">Lihat Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="container">
        <div id="footerbawah">
            <ul class="navbar-nav flex-row justify-content-end">
                <li class="nav-item pl-3 ">
                    <a href="#" class="footermenu text-white"> TENTANG KAMI </a>
                </li>
                <li class="nav-item pl-3 ">
                    <a href="#" class="footermenu text-white"> PERBANDINGAN PAKET </a>
                </li>
                <li class="nav-item pl-3 ">
                    <a href="#" class="footermenu text-white"> FAQ </a>
                </li>
                <li class="nav-item pl-3 ">
                    <a href="#" class="footermenu text-white"> SOCIAL MEDIA</a>
                </li>
                <li class="nav-item pl-3 ">
                    <a href="#" class="footermenu text-white"> NEWS </a>
                </li>
            </ul>
        </div>
        <br>
        <div id="copyright">
            Copyright 2020 © All in Us Indonesia. Cigombong, Bogor
        </div>
    </footer>