<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="row">
<?= view_cell ('\App\Controllers\Admin\Menu::option') ?>
</div>

<div class="row">
<h1>UPLOADI IMAGE</h1>

<form action="<?= base_url('/admin/menu/insert')?>" method="post" enctype="multipart/form-data">

    Gambar = <input type="file" name="gambar" required>
    <br> 
    <input type="submit" value="SIMPAN">

</form>
</div>

<?= $this->endSection() ?>