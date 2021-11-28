<!DOCTYPE html>
<html lang="en">
<?php include ROOT . '/application/views/admin/templates/header.php'; ?>
    <body>
    <?php include ROOT . '/application/views/admin/templates/sidebar.php'; ?>
        <section id="section">
        <?php include ROOT . '/application/views/admin/templates/navbar.php'; ?>
            <div class="home-content" id="homecontent">
                <div class="employee_list">
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg title">
                            <h3 class="panel-title">Product List</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control" type="text" placeholder="Filter Posts...">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-success" data-toggle="modal" data-target="#createproduct">Add a new Product</button>
                                </div>
                            </div>
                            <table class="table table-striped table-hover">
                                <tr>
                                    <th>No.</th>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Tools</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td><img class="rounded-circle" src="http://localhost/PHP-MVC-ecommerce/public/assets/images/dtdd/Phone1/1.png" width="80" height="80"></td>
                                    <td><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Iphone 13</a></td>
                                    <td>33.000.000đ</td>
                                    <td>39</td>
                                    <td>
                                        <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="far fa-edit"></i></button>
                                        <button class="btn btn-danger"><i class="fas fa-minus"></i></button>
                                    </td>
                                </tr>
                                <?php
                                foreach ($products as $product) {
                                    echo '<tr>';
                                    echo '<td>' . $product->getId() .
                                        '</td>
                                        <td><img class="rounded-circle" src="http://localhost/PHP-MVC-ecommerce/public/assets/images/dtdd/Phone'. $product->getId() .'/1.png" width="80" height="80"></td>
                                        <td><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">' . $product->getPname() . '</a>
                                        </td>
                                        <td> ' . $product->getPrice() .
                                        '</td>
                                        <td> ' . $product->getQuantity() .
                                        '</td>
                                        <td>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#changeproduct'. $product->getId() .'"><i class="far fa-edit"></i></button>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#deleteproduct'. $product->getId() .'"><i class="fas fa-minus"></i></button>
                                        </td>';
                                    echo '</tr>';
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="createproduct" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <form action="http://localhost/PHP-MVC-ecommerce/index.php?controller=admin&action=addproduct" enctype="multipart/form-data" method="post" class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body container bg-white">
                        <div class="row" >
                            <div class="col-5 border-right">
                                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                    <img class="mt-5" src="https://www.lifewire.com/thmb/P856-0hi4lmA2xinYWyaEpRIckw=/1920x1326/filters:no_upscale():max_bytes(150000):strip_icc()/cloud-upload-a30f385a928e44e199a62210d578375a.jpg" id="preview_image" style="max-width:300px; max-height:800px;">
                                </div>
                            </div>
                            <div class="col-7 border-right">
                                <div class="py-2">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h6 class="text-right">Edit profile</h6>
                                    </div> 
                                    <div class="row ">
                                        <div class="col-md-12"><label class="labels">Phone image</label><input class="form-control-file" type="file" name="fileToUpload" id="fileToUpload"></div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-6 mt-3"><label class="labels">Name</label><input type="text" class="form-control" name="product_name" placeholder="Iphone XX" required></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mt-3"><label class="labels">Price (in VNĐ)</label><input type="text" class="form-control" name="product_price" placeholder="e.g: 25000000" required> </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mt-3"><label class="labels">Quantity (in stock)</label><input type="text" class="form-control" name="product_quantity" placeholder="e.g: 50" required> </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-12 mt-3"><label class="labels">Brand</label><input type="text" class="form-control" name="product_brand" placeholder="e.g: Apple required"> </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-6 mt-3"><label class="labels">RAM (in GB)</label><input type="text" class="form-control" name="product_ram" placeholder="12" required></div>
                                        <div class="col-md-6 mt-3"><label class="labels">Storage (in GB)</label><input type="text" class="form-control" name="product_storage" placeholder="500" required></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mt-3"><label class="labels">Gift (in VNĐ)</label><input type="text" class="form-control" name="product_gift" placeholder="e.g: 300000" required> </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mt-3"><label class="labels">Link</label><input type="text" class="form-control" name="product_link" placeholder="e.g: iphone-14" required> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
    <?php include ROOT . '/application/views/admin/templates/footer.php'; ?>
    <script>
        fileToUpload.onchange = evt => {
            const [file] = fileToUpload.files
            if (file) {
                preview_image.src = URL.createObjectURL(file)
            }
        }
    </script>
</html>