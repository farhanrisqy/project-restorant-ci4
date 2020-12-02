<?= $this->extend('template/front')?>
<?= $this->section('content') ?>

<style>
    body {
  font-family: 'Open Sans', sans-serif;
  background-color: #fff;
  font-size: 16px;
    }
    .content {
  background-color: #fff;
  margin: 20px 30px;
  padding: 30px;
  border-radius: 10px;
        }
    label {
  color: #477;
  font-weight: normal;
  font-size: 0.8em;
    }
    .form-control {
  border-bottom: 1px solid #dbdbdb;
  font-size: 1em;
    }
    .form-control,
    .form-control:hover,
    .form-control:active,
    .form-control:focus {
    border: none;
    box-shadow: none;
    border-bottom: 1px solid #dbdbdb;
    }
    img {
    max-width: 100%;
    max-height: 100%;
    }
    .ready {
    width: 60%;
    margin: 0 20%;
    background-color: #477;
    }
    .ready:hover {
    background-color: #177;
    }
    .title {
    text-align: center;
    padding-bottom: 20px;
    }

</style>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark " id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url()?>">FLAVOUR</a>
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
            <li class="nav-item active"><a href="<?= base_url()?>" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="#section-gallery" class="nav-link">Gallery</a></li>
           
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

    <div class="content">
  <div class="row">
    <h3 class="title">
      Checkout disini
    </h3>
  </div>
  <div class="col-md-2"></div>
  <div class="col-md-12">
    
    <form action="" class="">
      <div class="form-group col-md-6">
        <label for="">Name</label>
        <input type="text" name="name" disabled placeholder="<?= session()->get('namapelanggan')?>" class="form-control" />
      </div>
      <div class="form-group col-md-6">
        <label for="">Email</label>
        <input  type="text" disabled name="email" placeholder="<?= session()->get('emailpelanggan')?>"  class="form-control" />
      </div>
      <div class="form-group col-md-6">
        <label for="">Telp</label>
        <input disabled type="text" name="telp" placeholder="<?= session()->get('telppelanggan')?>"  class="form-control" />
      </div>
      <div class="form-group col-md-6">
        <label for="">Alamat</label>
        <input type="text" disabled name="alamat" placeholder="<?= session()->get('alamatpelanggan')?>" class="form-control" />
      </div>
    </form>
  </div>
  <div class="col-md-4">
    <img src="https://www.vegetarian-shoes.co.uk/Portals/42/product/images/prd0683d04d-faaf-4826-a692-45d2e5cfbe3b.jpg" alt="" />
    <div class="col-md-3"></div>
    <div class="col-md-6"></div>
    <div class="col-md-3"></div>
  </div>
  <div class="row">
    
    
      <a href="<?= base_url('bayar')?>" style="color:#fff; text-align:center;" class="btn ready"> Bayar <?= number_format($total, 0, ',', '.')  ?></a>

  </div>
</div>
<!--/ End Checkout -->
<?= $this->endSection() ?>