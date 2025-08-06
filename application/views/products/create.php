<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMS</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
</head>

<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container text-center">
            <a href="#" class="navbar-brand text-center">Product Management system</a>
        </div>
    </div>
    <div>
        <h2 class="mt-4 text-center ">Add New Product</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-control">
                    <form method="post">
                        <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" name="name" class="form-control"><br>
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
                <a href=" <?= site_url('products'); ?>" class="btn btn-secondary form-control mt-4">Back to List</a>
            </div>
        </div>
    </div>


</body>

</html>