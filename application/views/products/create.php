<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMS</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
</head>

<body>
    <?php $this->load->view('layout/header'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-control">
                    <div class="text-end">
                        <a href=" <?= site_url('products'); ?>" class="btn btn-primary mt-4">List</a>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" name="name" class="form-control"><br>
                        </div>

                        <div class="form-group">
                            <label>Product Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div>
                            <label for="">Description: </label>
                            <textarea name="description" class="form-control"></textarea><br>
                        </div>
                        <div class="form-group">
                            <label for="">Price:</label>
                            <input type="text" name="price" class="form-control"><br>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary"> Create</button>
                            <a href="<?= site_url('products'); ?>" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <?php $this->load->view('layout/footer'); ?>
</body>

</html>