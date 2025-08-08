<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>

<body>
    <?php $this->load->view('layout/header'); ?>

    <div class="container mt-5">
        <h2>Login</h2>

        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
        <?php endif; ?>

        <?= validation_errors('<div class="alert alert-danger">', '</div>'); ?>

        <form method="post">
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" value="<?= set_value('email') ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <br>
            <button class="btn btn-primary">Login</button>
            <a href="<?= site_url('auth/register') ?>" class="btn btn-secondary">Register</a>
        </form>
    </div>


    <?php $this->load->view('layout/footer'); ?>
</body>

</html>