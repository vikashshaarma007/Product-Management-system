<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>

<body>
    <div class="container mt-5">
        <h2>Welcome, <?= $this->session->userdata('user_name') ?>!</h2>
        <p>You are now logged in.</p>
        <a href="<?= site_url('auth/logout') ?>" class="btn btn-danger">Logout</a>
    </div>
</body>

</html>