<!-- Masthead-->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item bg bg1 active">
            <!-- <div class="container">
                <div class="carousel-caption">
                    <h1>Example headline.</h1>
                    <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
            </div> -->
        </div>
        <div class="carousel-item bg bg2">
            <!-- <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div> -->
        </div>
        <div class="carousel-item bg bg1">
            <!-- <div class="container">
                <div class="carousel-caption">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div> -->
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Services-->

<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="form-group">
            <div class="container">
                <label for="labelKost">Cari Tempat Kost</label>
                <br />
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <form method="post" action="">
                            <div class="card-body row no-gutters align-items-center">
                                <div class="col-auto mr-2 ">
                                    <i class="fas fa-search h4 text-body"></i>
                                </div>
                                <!--end of col-->
                                <div class="col">
                                    <input class="form-control form-control-lg" type="search" placeholder="Cari kos berdasarkan Jenis / Harga / Nama Kos">
                                </div>
                                <!--end of col-->
                                <div class="col-auto ml-2">
                                    <button class="btn btn-lg btn-primary" type="submit">Search</button>
                                </div>
                                <!--end of col-->
                            </div>
                        </form>
                    </div>
                    <!--end of col-->
                </div>
            </div>
        </div>
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Rekomendasi Kost</h2>
            <h3 class="section-subheading text-muted">Berikut adalah beberapa rekomendasi tempat kost</h3>
        </div>
        <div class="row">
            <?php
            foreach ($kos as $tb) { ?>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?= base_url(); ?>assets/img/foto_kos/<?= $tb['fotokos']; ?>" alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading"><?= $tb['namakos'] ?></div>
                            <div class="portfolio text-uppercase"><?php if ($tb['khususkos'] == 1) {
                                                                        echo '<span class="badge badge-success">Putra</span>';
                                                                    } else {
                                                                        echo '<span class="badge badge-info">Putri</span>';
                                                                    }  ?></div>
                            <div class="portfolio-caption-subheading text-muted"><?= $tb['alamatkos'] ?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Tentang Kami</h2>
            <h3 class="section-subheading text-white">Aplikasi ini adalah aplikai yang membantu mahasiswa untuk mencari tempat tinggal sementara khususnya mahasiswa jember</h3>
        </div>
        <div class="row align-items-stretch mb-5">
            <div class="col-md-6">
                <div class="form-group">
                    <h5 class="section-subheading text-white">ALamat : Jember, Jawa Timur</h5>
                </div>
                <div class="form-group">
                    <h5 class="section-subheading text-white">Cp : 085236844218</h5>
                </div>
                <div class="form-group">
                    <h5 class="section-subheading text-white">Email : ketrinamarga@gmail.com</h5>
                </div>
                <div class="form-group">
                    <h5 class="section-subheading text-white">Ikuti Akun Social Media Kami</h5>
                </div>
                <div class="form-group mb-md-0">
                    <div class="col-md-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 200px">
                    <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>