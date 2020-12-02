<?= $this->extend('template/front')?>
<?= $this->section('content') ?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url()?>">Flavour</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <?php
    $jml_keranjang = 0;
    foreach ($cart as $key => $value) {
        $jml_keranjang = $jml_keranjang + $value['qty'];
    }
    ?>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>

           
            <?php if (!empty(session()->get('namapelanggan'))) :?>
                <li class="nav-item"><a href="<?= base_url('history')?>" class="nav-link">History</a></li>
				<li><i class=""></i> <a></a></li>
                 <li class="nav-item"><a class="nav-link"><?= session()->get('namapelanggan') ?></a></li>
            <?php endif ?>
            <li  class="nav-item"><a class="nav-link" href="<?= base_url('keranjang')?>"><i class=" icon-shopping-cart"></i> &nbsp;<?= $jml_keranjang ?></a>
								</li>
            <?php if (!empty(session()->get('namapelanggan'))) {?>
                <li class="nav-item"><a href="<?= base_url('logout')?>" class="nav-link">Logout</a></li>
				<?php }else{?>
                <li class="nav-item"><a href="<?= base_url('login')?>" class="nav-link">Login</a></li>
			<?php }?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
<section class="ftco-cover" style="background-image: url(asset/images/about_img_1.jpg);" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center ftco-vh-100">
          <div class="col-md-12">
            <h1 class="ftco-heading ftco-animate mb-3">Flavour Restaurant </h1>
            <h2 class="h5 ftco-subheading mb-5 ftco-animate">Website Restorant terbaik di Indonesia yang sangat istimewa dan bagus</h2>    
          
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

<section class="ftco-section" id="section-about" style="margin-bottom:14em;">
      <div class="container">
        <div class="row">
          <div class="col-md-5 ftco-animate mb-5">
            <h4 class="ftco-sub-title">Our Story</h4>
            <h2 class="ftco-primary-title display-4">Welcome</h2>
            <p>Flavour Restorant adalah sebuah restoran terbaik yang ada disurabaya, restorant kami memiliki berbagai kelengkapan fasilitas dan beragam menu yang kami hadirkan untuk anda, Flavour Restorant juga sudah memiliki berbagai prestasi tentang kelayakan dan keistimewaan restoran di indonesia</p>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 ftco-animate img" data-animate-effect="fadeInRight">
            <img src="asset/images/108.jpg" alt="Free Template by Free-Template.co">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    

    
<div  class="ftco-section" id="section-menu">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5 ftco-animate">
            <h2 class="display-4">Today's Menu</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Silahkan memilih berbagai makanan dan minuman terbaik kami.</p>
              </div>
            </div>
            </div>
        </div>


        <style>
            .cb:hover{
              color:#fff;
            }
        </style>
        <div class="col-md-12 text-center">
            <div class="col-12">
                <div class="product-info">
                    <div class="nav-main">
                        <!-- Tab Nav -->
                        <?php if (session()->getFlashdata('pesan') != null) { ?>
							<div class="alert alert-success">
								<center><?= session()->getFlashdata('pesan'); ?><center>
							</div>
						<?php } ?>
                        <ul  class="nav ftco-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
                            <?php foreach ($kategori as $key => $value) : ?>
                            <li class="nav-item ftco-animate  " style="margin-top:10px;"><a class="nav-link" data-toggle="tab"
                                    href=".kategori-<?= $value['idkategori'] ?>"
                                    role="tab"><?= $value['kategori'] ?></a></li>
                            <?php endforeach ?>
                        </ul>
                        <!--/ End Tab Nav -->
                    </div>
                    <div class="tab-content" id="myTabContent">

                        <!-- Start Single Tab -->
                        
                        <!--/ End Single Tab -->
                        <!-- Start Single Tab -->
                        <?php foreach ($kategori as $key => $value) : ?>
                        <div class="tab-pane fade show kategori-<?= $value['idkategori'] ?>" role="tabpanel">
                            <div class="tab-single">
                                <div class="row">
                                    <?php foreach ($menu as $key => $data) : ?>
                                    <?php if ($data['idkategori'] === $value['idkategori']) : ?>
                                    <div class="col-xl-3 col-lg-4 col-md-4 col-6 media menu-item">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <img class="hover-img" style="height:100px; width:100px;"
                                                    src="<?= base_url('/upload/' . $data['gambar'] . '') ?>" alt="#">
                                            </div>
                                            <div class="product-content">
                                                <h3 class="text-center"><a><?= $data['menu'] ?></a>
                                                </h3>
                                                <div class="product-price text-center">
                                                    <span>Rp. <?= number_format($data['harga'], 0, ',', '.')  ?></span>
                                                </div>
                                            </div>
                                            <div>
                                              <a href="<?= base_url('tambah-ke-keranjang/' . $data['idmenu']) ?>" class="btn cb">ADD TO CART</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endif ?>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <!--/ End Single Tab -->
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- END section -->


    <!-- <section class="ftco-section" id="section-gallery">
      <div class="container">
        <div class="row ftco-custom-gutters">

          <div class="col-md-12 text-center mb-5 ftco-animate">
            <h2 class="display-4">Food Gallery</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 ftco-animate">
            <a href="asset/images/menu_1.jpg" class="ftco-thumbnail image-popup">
              <img src="asset/images/menu_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 ftco-animate">
            <a href="asset/images/menu_2.jpg" class="ftco-thumbnail image-popup">
              <img src="asset/images/menu_2.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 ftco-animate">
            <a href="asset/images/menu_3.jpg" class="ftco-thumbnail image-popup">
              <img src="asset/images/menu_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
            </a>
          </div>

          <div class="col-md-4 ftco-animate">
            <a href="asset/images/menu_2.jpg" class="ftco-thumbnail image-popup">
              <img src="asset/images/menu_2.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 ftco-animate">
            <a href="asset/images/menu_3.jpg" class="ftco-thumbnail image-popup">
              <img src="asset/images/menu_3.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
            </a>
          </div>
          <div class="col-md-4 ftco-animate">
            <a href="asset/images/menu_1.jpg" class="ftco-thumbnail image-popup">
              <img src="asset/images/menu_1.jpg" alt="Free Template by Free-Template.co" class="img-fluid">
            </a>
          </div>

        </div>
      </div>
    </section> -->
    <!-- END section -->

    

  

    
    <!-- END section -->
<?= $this->endSection() ?>