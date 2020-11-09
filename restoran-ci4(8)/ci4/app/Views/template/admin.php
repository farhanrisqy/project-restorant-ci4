<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css')?>">
    <title>Admin Page</title>
</head>
<body>

    <div class="container">
        <div class="row">
        <div class="col">
            <nav class="navbar navbar-expand-lg navbar-light bg-light mt-2">
                <a class="navbar-brand" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item mt-2">User = </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#"><?php
                        if (!empty(session()->get('user'))) {
                            echo session()->get('user');
                        }
                    ?> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mt-2 ml-4">Email = </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php
                        if (!empty(session()->get('email'))) {
                            echo session()->get('email');
                        }
                    ?></a>
                    </li>
                    <li class="nav-item mt-2 ml-4">Level = </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><?php
                        if (!empty(session()->get('level'))) {
                            echo session()->get('level');
                            $level = session()->get('level');
                        }
                    ?></a>
                    </li>
                    <li class="nav-item mt-2 ml-4">
                        <a href="<?= base_url('admin/login/logout') ?>">Logout</a>
                    </li>
                
                    </ul>
                </div>
            </nav>
        </div>
        </div>
        <div class="row">
            <div class="col-4">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                <?php if($level === "Admin") : ?>
                    <li class="list-group-item"><a href="<?= base_url('/admin/kategori') ?>">Kategori</a></li>
                    <li class="list-group-item"><a href="<?= base_url('/admin/menu') ?>">Menu</a></li>
                    <li class="list-group-item"><a href="<?= base_url('/admin/pelanggan') ?>">Pelanggan</a></li>
                    <li class="list-group-item"><a href="<?= base_url('/admin/order') ?>">Order</a></li>
                    <li class="list-group-item"><a href="<?= base_url('/admin/orderdetail') ?>">Order Detail</a></li>
                    <li class="list-group-item"><a href="<?= base_url('/admin/user') ?>">User</a></li>
                <?php endif; ?>

                <?php if($level === "Kasir") : ?>
                    <li class="list-group-item"><a href="<?= base_url('/admin/order') ?>">Order</a></li>
                    <li class="list-group-item"><a href="<?= base_url('/admin/orderdetail') ?>">Order Detail</a></li>
                <?php endif; ?>

                <?php if($level === "Koki") : ?>
                    <li class="list-group-item"><a href="<?= base_url('/admin/orderdetail') ?>">Order Detail</a></li>
                <?php endif; ?>
                </ul>
                </div>
            </div>
            <div class="col-8"><?= $this->renderSection('content') ?></div>
        </div>
    </div>
    
</body>
</html>