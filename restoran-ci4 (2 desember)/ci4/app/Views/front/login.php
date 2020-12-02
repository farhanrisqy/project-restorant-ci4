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


<section class="user ftco-section" id="section-login">>
  <div class="user_options-container container">
    <div class="user_options-text">
      <div class="user_options-unregistered">
        <h2 class="user_unregistered-title ">Belum Mempunyai Akun??</h2>
        <p class="user_unregistered-text">Silahkan Mendaftar disini</p>
        <button class="user_unregistered-signup" id="signup-button">Sign up</button>
      </div>

      <div class="user_options-registered">
        <h2 class="user_registered-title ">Sudah Mempunyai Akun??</h2>
        <p class="user_registered-text">Silahkan Masuk disini</p>
        <button class="user_registered-login" id="login-button">Login</button>
      </div>
    </div>
    
    <div class="user_options-forms" id="user_options-forms" style="overflow:scroll;">
      <div class="user_forms-login">
        <h2 class="forms_title">Login</h2>

        <?php if (session()->getFlashdata('message') != null) : ?>
            <center><div class="alert alert-success" role="alert"><?= session()->getFlashdata('message') ?></div></center>
        <?php endif?>
        <?php if (session()->getFlashdata('error') != null) : ?>
            <center><div class="alert alert-danger" role="alert"><?= session()->getFlashdata('error') ?></div></center>
        <?php endif?>
        <form class="forms_form" method="post" action="<?= base_url('/authlogin') ?>">
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="email" placeholder="Email"name="email" class="forms_field-input" required autofocus />
            </div>
            <div class="forms_field">
              <input type="password" placeholder="Password"name="password" class="forms_field-input" required />
            </div>
          </fieldset>
          <div class="forms_buttons">
            <input type="submit" name="login" value="Login" class="forms_buttons-action">
          </div>
        </form>
      </div>
      <div class="user_forms-signup" >
        <h2 class="forms_title">Sign Up</h2>
        <?php if (session()->getFlashdata('info') != null) : ?>
                            <center><div class="alert alert-danger" role="alert"><?= session()->getFlashdata('info') ?></div></center>
                <?php endif?>
        <form class="forms_form" method="post" action="<?= base_url('authregister') ?>">
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="text" placeholder="Full Name" name="pelanggan" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="text" placeholder="Alamat" name="alamat" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="text" placeholder="Telepon" name="telp" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="email" placeholder="Email" name="email" class="forms_field-input" required />
            </div>
            <div class="forms_field">
              <input type="password" placeholder="Password" name="password" class="forms_field-input" required />
            </div>
            
          
          </fieldset>
          <div class="forms_buttons" style="margin-bottom:50px;">
            <input  type="submit" name="register" value="register" class="forms_buttons-action">
          </div>
        </form>
      </div>
    </div>
  </div>
            </section>

    <!-- END section -->
    <?= $this->endSection() ?>