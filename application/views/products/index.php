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
        <h2 class="mt-4 text-center ">Product View</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-control">
                    <a href="<?php echo site_url('products/create'); ?>" class="btn btn-primary">Add New Product</a>
                    <table border="1" cellpadding="5" class="table table-striped mt-3">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td><?= $product->id ?></td>
                                <td><?= $product->name ?></td>
                                <td><?= $product->description ?></td>
                                <td><?= '₹' . $product->price ?></td>

                                <td>
                                    <a href="<?= site_url('products/edit/' . $product->id); ?>" class="btn btn-primary mt-1" style="width: 60px;">Edit</a> |
                                    <a href="<?= site_url('products/delete/' . $product->id); ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger mt-1 " style="width: 60px;">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>

            </div>
        </div>
    </div>


</body>

</html>