<?= $this->extend('template/front')?>
<?= $this->section('content') ?>


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
<div class="shopping-cart section">
    <div class="container">
        <?php if (count($orderdetail) === 0) : ?>
        <div class="alert alert-danger text-center" role="alert"  style="margin-top:20px; margin-bottom:20px;">
            Anda Tidak Memiliki History Pembelian
        </div>
        <?php else : ?>
        <div class="row">
            <div class="col-12">
                <!-- Shopping Summery -->
                <table class="table shopping-summery">
                    <thead>
                        <tr class="main-hading text-center">
                            <th>TANGGAL ORDER</th>
                            <th>GAMBAR</th>
                            <th>PRODUK</th>
                            <th class="text-center">HARGA</th>
                            <th class="text-center">JUMLAH</th>
                            <th class="text-center">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orderdetail as $key => $value) : ?>
                        <?php
                            $time = strtotime($value['tglorder']);
                            $myFormatForView = date("d-m-yy G:i", $time);
                            ?>
                        <tr class="text-center">
                            <td class="product-des" data-title="TANGGAL ORDER">
                                <p class="product-name"><a><?= $myFormatForView ?></a></p>
                            </td>
                            <td class="product-des" data-title="PRODUK">
                                <img src="<?= base_url('/upload/' . $value['gambar'] . '') ?>" alt="#" style="height:70px; width:70px;">
                            </td>
                            <td class="product-des" data-title="PRODUK">
                                <p class="product-name"><a><?= $value['menu'] ?></a></p>
                            </td>
                            <td class="product-des" data-title="HARGA">
                                <p class="product-name"><a>Rp.
                                        <?= number_format($value['harga'], 0, ',', '.')  ?></a></p>
                            </td>
                            <td class="qty" data-title="JUMLAH">
                                <p class="product-name"><a><?= $value['jumlah'] ?></a></p>
                            </td>
                            <td class="product-des" data-title="Total">
                                <?php $total = $value['harga'] * $value['jumlah']?>
                                <p class="product-name"><a>Rp.
                                        <?= number_format($total, 0, ',', '.')  ?></a></p>
                            </td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
                <!--/ End Shopping Summery -->
            </div>
        </div>
        <?php endif;?>
    </div>
</div>

<!--/ End Shopping Cart -->

<?= $this->endSection() ?>