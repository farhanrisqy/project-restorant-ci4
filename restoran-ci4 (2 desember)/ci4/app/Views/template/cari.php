<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css')?>">
    <title> Beranda </title>
</head>
<body>

    <div class="container">
        <div class="row mt-2">
        
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="<?= base_url('/home') ?>">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mr-auto"></ul>
                        
                        <span class="navbar">
                            <ul class="navbar-nav">
                            <li class="nav-item mt-2 ml-2">
                                    <a href="<?= base_url('#')?>">Daftar</a>
                                </li>
                                <li class="nav-item mt-2 ml-2">
                                    <a href="<?= base_url('/login/logout')?>">Login</a>
                                </li>
                            </ul>
                        </span>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-4 mt-3">
                <div class="row mx-auto mt-1">
                    <h3> Kategori </h3>
                </div>
                <hr>
                <div class="card">
                    <?php if (empty($row)) { ?>
                        <ul class="list-group list-group-flush">
                            <?php foreach($kategori as $key => $value): ?>
                                <li class="list-group-item">
                                    <a href="<?= base_url('/home/select' . '/' . $value['idkategori']) ?>">
                                        <?php echo $value['kategori'] ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>

            <div class="col-8 mt-4">
                <div class="row">
                    <h2 class="mx-auto">Menu</h2>
                </div>
                
                <div class="row">
                    <?php foreach ($menu as $r) : ?>
                        <div class="card" style="width: 15rem; float:left; margin:5px;">
                            <img style="height:150px;" src="<?= base_url('upload/' . $r['gambar']. '') ?>" class="card-img-top" alt="...">
                            <div class="card-body bg-light">
                                <h5 class="card-title"><?php echo $r['menu'] ?></h5>
                                <hr>
                                <div class="float-left mr-4">
                                    <p class="card-text">Rp.<?php echo $r['harga'] ?></p>
                                    <a class="btn btn-primary" href="?f=home&m=beli&id=<?php echo $r['idmenu']?>" role="button">BELI</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                    <?= $this->renderSection('content') ?>
                </div>
                <?= $pager->makeLinks(1, $tampil, $total, 'bootstrap') ?>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <p class="text-center">2020 - copyright@ilhamberlianoktavio.com</p>
            </div>
        </div>
    </div>

</body>
</html>