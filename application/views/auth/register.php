<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>

<body>
    <?php $this->load->view('layout/header'); ?>
    <div class="container mt-5">
        <h2>Register</h2>
        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger"><?= $this->session->flashdata('error') ?></div>
        <?php endif; ?>

        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="<?= set_value('name') ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" value="<?= set_value('email') ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <br>
            <button class="btn btn-primary" type="submit">Register</button>
            <a href="<?= site_url('auth/login') ?>" class="btn btn-secondary">Login</a>
        </form>
    </div>


    <?php $this->load->view('layout/footer'); ?>
</body>

</html>