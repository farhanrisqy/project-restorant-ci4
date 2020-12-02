<?= $this->extend('template/front')?>
<?= $this->section('content') ?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark " id="ftco-navbar" style="position:fixed; width:100%; z-index:99;">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url()?>">Taste</a>
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


    <div class="text-center" style="margin-bottom:100px;">
        <img src="upload/ceklis.png" alt="" style="height:310px; width:250px; margin-top:100px;">
        <p>Pembayaran Berhasil</p>
        <a href="<?= base_url() ?>" class="btn text-center" style="float:none;">kembali ke home</a>
    </div>

<?= $this->endSection() ?>