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
<h3>INSERT USER</h3>
</div>
<div class="col-8">
    <form action="<?= base_url()?>/admin/user/insert" method="post">
        <div class="form-group">
            <label for="kategori">User</label> 
            <input type="text" name="user" required class="form-control">
        </div>
        <div class="form-group">
            <label for="keterangan">Email</label> 
            <input type="email" name="email" required class="form-control"> 
        </div>
        <div class="form-group">
            <label for="keterangan">Password</label> 
            <input type="password" name="password" required class="form-control"> 
        </div>
        <div class="form-group">
            <label for="kategori">Level</label> 
            <select class="form-control" name="level" id="kategori">
                <?php foreach ($level as $key ):?>
                <option value="<?= $key ?>"><?= $key ?></option>
                <?php endforeach ;?>
            </select>
        </div>
        <input type="submit" value="SIMPAN">
    </form>
</div>

<?= $this->endSection() ?>