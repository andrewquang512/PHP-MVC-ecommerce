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
                            <h3 class="panel-title">Customer List</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control" id="FilterInput" onkeyup="FilterFunction()" type="text" placeholder="Filter Posts...">
                                </div>
                            </div>
                            <br>
                            <button type="button" class="btn btn-success mt-1 mb-3" data-toggle="modal" data-target="#createinformation">Add a new account</button>
                            <table class="table table-striped table-hover" id="FilterTable">
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Tools</th>
                                </tr>
                                <tr>
                                <?php
                                foreach ($customers as $customer) {
                                    echo '<tr>';
                                    echo '<td>' . $customer->getCustomer_id() .
                                        '</td>
                                        <td><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">' . $customer->getUser_name() . '</a>
                                        </td>
                                        <td> ' . $customer->getEmail() .
                                        '</td>
                                        <td> ' . $customer->getPhone() .
                                        '</td>
                                        <td>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#changeinformation'. $customer->getCustomer_id() .'"><i class="far fa-edit"></i></button>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#deleteinformation'. $customer->getCustomer_id() .'"><i class="fas fa-minus"></i></button>
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
        
        <!-- Modal -->
        <?php
            foreach ($customers as $customer) {
                echo '
            <div id="changeinformation'. $customer->getCustomer_id() .'"class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <form action="http://localhost/PHP-MVC-ecommerce/index.php?controller=admin&action=updatecustomer" method="post" class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body container bg-white">
                            <div class="row" >
                                <div class="col-4 border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                        <img class="rounded-circle mt-5" src="https://toppng.com/uploads/preview/roger-berry-avatar-placeholder-11562991561rbrfzlng6h.png" width="90">
                                        <span class="font-weight-bold">'. $customer->getUser_name() .'</span>
                                        <span class="text-black-50">'. $customer->getEmail() .'</span>
                                    </div>
                                </div>
                                <div class="col-8 border-right">
                                    <div class="py-2">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h6 class="text-right">Edit profile</h6>
                                        </div> 
                                        <div class="row ">
                                            <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" name="first_name" value="'. $customer->getFirst_name() .'" placeholder="An" required></div>
                                            <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control" name="last_name" value="'. $customer->getLast_name() .'" placeholder="Nguyen Quang" required></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mt-3"><label class="labels">Username</label><input type="text" class="form-control" name="user_name" value="'. $customer->getUser_name() .'" placeholder="e.g: annguyen123" required> </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mt-3"><label class="labels">Telephone</label><input type="text" class="form-control" name="phone" value="'. $customer->getPhone() .'" placeholder="e.g: 0112233442" required> </div>
                                         </div>
                                        <div class="row">
                                            <div class="col-md-12 mt-3"><label class="labels">Email</label><input type="email" class="form-control" name="email" value="'. $customer->getEmail() .'" placeholder="e.g: annguyen123@gmail.com" required> </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-12 mt-3"><label class="labels">Address</label><input type="text" class="form-control" name="addr" value="'. $customer->getAddr() .'" placeholder="Your address" required></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="customer_id" value="'. $customer->getCustomer_id() .'" />
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
            <div id="deleteinformation'. $customer->getCustomer_id() .'"class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <form action="http://localhost/PHP-MVC-ecommerce/index.php?controller=admin&action=deletecustomer" method="post" class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body container bg-white">
                            <blockquote class="blockquote text-center">
                                <p class="mb-0">Are you sure want to delete this account ?</p>
                            </blockquote>
                        </div>
                        <div class="modal-footer d-flex justify-content-around">
                        <input type="hidden" name="customer_id" value="'. $customer->getCustomer_id() .'" />
                            <button type="button" class="btn btn-success px-5" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete Account</button>
                        </div>
                    </div>
                </form>
            </div>';
            }
        ?>
        <div id="createinformation"class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <form action="http://localhost/PHP-MVC-ecommerce/index.php?controller=admin&action=addcustomer" method="post" class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create a new profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body container bg-white">
                            <div class="row" >
                                <div class="col-12 border-right">
                                    <div class="py-2">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h6 class="text-right">Add account</h6>
                                        </div> 
                                        <div class="row ">
                                            <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" name="first_name" placeholder="An" required></div>
                                            <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control" name="last_name" placeholder="Nguyen Quang" required></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mt-3"><label class="labels">Username</label><input type="text" class="form-control" name="user_name" placeholder="e.g: annguyen123" required> </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mt-3"><label class="labels">Password</label><input type="text" class="form-control" name="password" placeholder="e.g: security123" required> </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mt-3"><label class="labels">Telephone</label><input type="text" class="form-control" name="phone" placeholder="e.g: 0112233442" required> </div>
                                         </div>
                                        <div class="row">
                                            <div class="col-md-12 mt-3"><label class="labels">Email</label><input type="email" class="form-control" name="email" placeholder="e.g: annguyen123@gmail.com" required> </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-12 mt-3"><label class="labels">Address</label><input type="text" class="form-control" name="addr" placeholder="Your address" required></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create account</button>
                        </div>
                    </div>
                </form>
            </div>



    </body>
    <?php include ROOT . '/application/views/admin/templates/footer.php'; ?>
</html>