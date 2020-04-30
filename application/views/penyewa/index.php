<!-- Masthead-->
        <header>
            <div class="container-fluid">
                <!-- <div class="masthead-subheading">Welcome To Our Studio!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a> -->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="<?=base_url();?>assets/assets/img/test0.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="<?=base_url();?>assets/assets/img/test0.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                      <img src="<?=base_url();?>assets/assets/img/test0.jpg" class="d-block w-100" alt="...">
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
            </div>
        </header>
        <!-- Services-->

        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="form-group">
                    <div class="container">
                        <label for="labelKost">Cari Tempat Kost</label>
                        <br/>
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
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url();?>assets/assets/img/portfolio/01-thumbnail.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Threads</div>
                                <div class="portfolio-caption-subheading text-muted">Illustration</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url();?>assets/assets/img/portfolio/02-thumbnail.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Explore</div>
                                <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url();?>assets/assets/img/portfolio/03-thumbnail.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Finish</div>
                                <div class="portfolio-caption-subheading text-muted">Identity</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url();?>assets/assets/img/portfolio/04-thumbnail.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Lines</div>
                                <div class="portfolio-caption-subheading text-muted">Branding</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url();?>assets/assets/img/portfolio/05-thumbnail.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Southwest</div>
                                <div class="portfolio-caption-subheading text-muted">Website Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6"
                                ><div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?=base_url();?>assets/assets/img/portfolio/06-thumbnail.jpg" alt=""
                            /></a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Window</div>
                                <div class="portfolio-caption-subheading text-muted">Photography</div>
                            </div>
                        </div>
                    </div>
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
                            <div class="form-group mb-md-0">
                                <h5 class="section-subheading text-white">Email : ketrinamarga@gmail.com</h5>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <h5 class="section-subheading text-white"></h5>
                            </div>
                        </div>
                    </div>
            </div>
        </section>