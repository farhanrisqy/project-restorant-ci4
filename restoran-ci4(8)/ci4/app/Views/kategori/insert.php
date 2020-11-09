<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>


<div class="col">
    <?php 
    if (!empty(session()->getFlashdata('info'))) {

        echo '<div class="alert alert-danger" role="alert">';
        echo session()->getFlashdata('info');
        echo '</div>';
    }
    ?>
</div>
<div class="col mt-2">
<h3>INSERT DATA</h3>
</div>
<div class="col-8">
    <form action="<?= base_url()?>/admin/kategori/insert" method="post">
        <div class="form-group">
            <label for="kategori">Kategori</label> 
            <input type="text" name="kategori" required class="form-control">
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label> 
            <input type="text" name="keterangan" required class="form-control"> 
        </div>
        <input type="submit" value="SIMPAN">
    </form>
</div>

<?= $this->endSection() ?>