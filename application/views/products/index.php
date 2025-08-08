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
                        <a href="<?php echo site_url('products/create'); ?>" class="btn btn-primary">Add Product</a>
                    </div>


                    <table border="1" cellpadding="5" class="table table-striped mt-3">
                        <tr>
                            <th>ID</th>
                            <th>Image</th> <!-- New column for image -->
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td><?= $product->id ?></td>
                                <td>
                                    <?php if (!empty($product->image)): ?>
                                        <img src="<?= base_url('uploads/' . $product->image) ?>" width="80" height="80" style="object-fit: cover;">
                                    <?php else: ?>
                                        <span>No Image</span>
                                    <?php endif; ?>
                                </td>
                                <td><?= $product->name ?></td>
                                <td><?= $product->description ?></td>
                                <td><?= '₹' . $product->price ?></td>
                                <td>
                                    <a href="<?= site_url('products/edit/' . $product->id); ?>" class="btn btn-primary mt-1" style="width: 60px;">Edit</a> |
                                    <a href="<?= site_url('products/delete/' . $product->id); ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger mt-1" style="width: 60px;">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                    <div>

                        <div class="pagination">
                            <?php echo $pagination_links; ?>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>


    <?php $this->load->view('layout/footer'); ?>
</body>

</html>