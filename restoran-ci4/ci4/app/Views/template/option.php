<div class="form-group">
<select class="form-control" onchange="this.form.submit()" name="idkategori" id="kategori">
    <?php foreach ($kategori as $key => $value):?>
    <option value="<?= $value ['idkategori'] ?>"><?= $value ['kategori'] ?></option>
    <?php endforeach ;?>
</select>
</div>