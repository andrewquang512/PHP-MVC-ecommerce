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
                        <div class="row">
                            <div class="col-md-4 col-12"><a href="#">
                                <div class="card text-white bg-primary mb-3" style="height:150px;">
                                <a href="http://localhost/PHP-MVC-ecommerce/index.php?controller=admin&action=customermanage" style="color:white">
                                    <div class="card-body">
                                        <h5 class="card-title">Customer Management</h5>
                                        <p class="card-text">Manage all account information</p>
                                    </div>
                                </a>
                                </div>
                            </div></a>
                            <div class="col-md-4 col-12"><a href="#">
                                <div class="card text-white bg-success mb-3" style="height:150px;">
                                <a href="http://localhost/PHP-MVC-ecommerce/index.php?controller=admin&action=commentmanage" style="color:white">
                                    <div class="card-body">
                                        <h5 class="card-title">Comment Management</h5>
                                        <p class="card-text">Manage people's comment on product</p>
                                    </div>
                                </a>
                                </div>
                            </div></a>
                            <div class="col-md-4 col-12"><a href="#">
                                <div class="card text-white bg-success mb-3" style="height:150px;">
                                <a href="" style="color:white">
                                    <div class="card-body">
                                        <h5 class="card-title">Page Management</h5>
                                        <p class="card-text">Manage footer, contact details, information</p>
                                    </div>
                                </a>
                                </div>
                            </div></a>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-12"><a href="#">
                                <div class="card text-white bg-warning mb-3" style="height:150px;">
                                    <a href="http://localhost/PHP-MVC-ecommerce/index.php?controller=admin&action=productmanage" style="color:white">
                                        <div class="card-body">
                                            <h5 class="card-title">Product Management</h5>
                                            <p class="card-text">Manage products details, what are you gonna sell</p>
                                        </div>
                                    </a>
                                </div>
                            </div></a>
                            <div class="col-md-4 col-12"><a href="#">
                                <div class="card text-white bg-info mb-3" style="height:150px;">
                                <a href="http://localhost/PHP-MVC-ecommerce/index.php?controller=admin&action=contentmanage" style="color:white">
                                    <div class="card-body">
                                        <h5 class="card-title">Content Management</h5>
                                        <p class="card-text">Manage news of website</p>
                                    </div>
                                </a>
                                </div>
                            </div></a>
                            <div class="col-md-4 col-12"><a href="#">
                                <div class="card text-white bg-info mb-3" style="height:150px;">
                                <a href="http://localhost/PHP-MVC-ecommerce/index.php?controller=admin&action=contactmanage" style="color:white">
                                    <div class="card-body">
                                        <h5 class="card-title">Contact</h5>
                                        <p class="card-text">See what customer thinks about your shop</p>
                                    </div>
                                </a>
                                </div>
                            </div></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <?php include ROOT . '/application/views/admin/templates/footer.php'; ?>
</html>
