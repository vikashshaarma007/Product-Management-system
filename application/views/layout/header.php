<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <title>Document</title>
</head>

<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand text-center">Product Management System</a>

        </div>
        <div>
            <a href="<?= site_url('auth/logout') ?> " class=" btn btn-danger">Logout <?= $this->session->userdata('username') ?></a>
        </div>
    </div>
    <div>
        <h2 class="h2body mt-4 text-center "> Welcome to the Product Management System </h2>
        <!--<h2 class="mt-4 text-center ">Product View</h2>-->
    </div>