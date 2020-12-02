<?= $this->extend('template/front')?>
<?= $this->section('content') ?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark " id="ftco-navbar" style="position:fixed; width:100%; z-index:99;">
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

    
    <div class="wrap cf">
  <div class="heading cf">
      <?php if ($totalitem === 0) : ?>
        <div class="alert alert-danger text-center" role="alert">
            Keranjang Anda Masih Kosong ,Silahkan Belanja Terlebih Dahulu <a href="<?= base_url("#section-menu") ?>"
                class="alert-link">&nbsp; Menu</a>
        </div>
        <?php else : ?>
    <h1>Cart</h1>
    <a href="<?= base_url() ?>" class="continue">Continue Shopping</a>
  </div>
  <div class="cart">
    <ul class="cartWrap">
    <?php foreach ($cart as $key => $value) : ?>
      <li class="items odd">
        
            <div class="infoWrap"> 
        <div class="cartSection">
        <img src="<?= base_url('/upload/' . $value['gambar'] . '') ?>" alt="" class="itemImg" />
        
          <h3><?= $value['name'] ?></h3>
        <div class="">
           
        </div>
           <p style="margin-bottom:0;"> <a href="<?= base_url('/keranjang/plus/' . $value['qty'] . '/' . $value['rowid']) ?>"><i class="icon-plus"></i></a> <input type="text"  class="qty" value="<?= $value['qty']; ?>" disabled style="margin:0;" /> <a href=""<?= base_url('/keranjang/minus/' . $value['qty'] . '/' . $value['rowid']) ?>"><i class="icon-minus"></i> &nbsp;&nbsp;</a><?= number_format($value['price'], 0, ',', '.')  ?></p>
           <div class="">
           
        </div>
          
        </div>  
    
        <style>
      ul {
        list-style-type: none;
      }
      .remove{
          color:#fff;
      }
  </style>
        <div class="prodTotal cartSection">
          <p><?= number_format($total, 0, ',', '.')  ?></p>
        </div>
              <div class="cartSection removeWrap">
           <a href="<?= base_url('/hapus/' . $value['rowid']) ?>" class="remove ">x</a>
        </div>
        </div>
      </li>
      <?php endforeach ?>
      
      
      
      <!--<li class="items even">Item 2</li>-->
 
    </ul>
  </div> 
  
  <div class="subtotal cf">
    <ul>
            <li class="totalRow final"><span class="label">Total</span><span class="value"><?= number_format($total, 0, ',', '.')  ?></span></li>
            <?php if (!empty(session()->get('namapelanggan'))) { ?>
                <li class="totalRow">
                    <a href="<?= base_url('checkout') ?>" class="btn continue">Checkout</a>
                </li>
                <?php } else { ?>
                <li class="totalRow">
                    <a href="<?= base_url('login') ?>" onclick="ky()"class="btn continue">Checkout</a>
                </li>
                 <?php } ?>
     
    </ul>
  </div>
 
</div><?php endif ?>
</div></div>
               
              
                

<script>
    function ky() {
        alert("Harap Login Dahulu !");
    }
</script>
<?= $this->endSection() ?>