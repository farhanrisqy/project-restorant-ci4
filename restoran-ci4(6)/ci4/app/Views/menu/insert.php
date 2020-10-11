<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>


<div class="col">
<?php 
    if (!empty(session()->getFlashdata('info'))) {
        echo '<div class="alert alert-danger" role="alert">';
        $error = session()->getFlashdata('info');
        foreach ($error as $key => $value) {
            echo $key. "=>" .$value;
            echo "</br>";
        }
        echo '</div>';
    }
    ?>
</div>
<div class="col mt-2">
<h3>INSERT DATA MENU</h3>
</div>
<div class="col-8">
    <form action="<?= base_url()?>/admin/menu/insert" method="post"  enctype="multipart/form-data">
        <div class="form-group">
            <label for="kategori">Kategori</label> 
            <select class="form-control" name="idkategori" id="kategori">
                <?php foreach ($kategori as $key => $value):?>
                <option value="<?= $value ['idkategori'] ?>"><?= $value ['kategori'] ?></option>
                <?php endforeach ;?>
            </select>
        </div>

        <div class="form-group">
            <label for="menu">Menu</label> 
            <input type="text" name="menu" required class="form-control">
        </div>
        <div class="form-group">
            <label for="harga">Harga</label> 
            <input type="text" name="harga" required class="form-control"> 
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label> 
            <input type="file" name="gambar" required class="form-control"> 
        </div>
        <div class="from-group">
            <input type="submit" class="btn btn-primary" value="SIMPAN">
        </div>
    </form>
</div>

<?= $this->endSection() ?>