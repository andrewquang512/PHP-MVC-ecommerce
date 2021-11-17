<!DOCTYPE html>
<html lang="en">
    <?php include "./templates/header.php"; ?>
    <body>
        <?php include "./templates/sidebar.php"; ?>
        <section id="section">
            <?php include "./templates/navbar.php"; ?>
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
                            <table class="table table-striped table-hover">
                                <tr>
                                    <th>No.</th>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Available</th>
                                    <th>Discount</th>
                                    <th>Tools</th>
                                </tr>
                                <tr>
                                    <td class="align-middle">1</td>
                                    <td class="align-middle"><img class="rounded-circle" src="../../../public/assets/images/phone1.png" width="80" height="80"></td>
                                    <td class="align-middle"><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Iphone 13</a></td>
                                    <td class="align-middle">33.000.000đ</td>
                                    <td class="align-middle">39</td>
                                    <td class="align-middle">10%</td>
                                    <td class="align-middle">
                                        <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="far fa-edit"></i></button>
                                        <button class="btn btn-danger"><i class="fas fa-minus"></i></button>
                                    </td>
                                </tr>
                            </table>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add a new Product</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body container bg-white">
                    <div class="row">
                        <div class="col-4 border-right">
                            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                <img class="rounded-circle mt-5" src="https://bootdey.com/img/Content/avatar/avatar1.png" width="90">
                                <span class="font-weight-bold">John Doe</span>
                                <span class="text-black-50">john_doe12@bbb.com</span>
                                <span>United States</span>
                            </div>
                        </div>
                        <div class="col-8 border-right">
                            <div class="py-2">
                                <!-- <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h6 class="text-right">Edit profile</h6>
                                </div> -->
                                <div class="row ">
                                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="John"></div>
                                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control"  placeholder="Doe"></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12"><label class="labels">Date of Birth</label><input type="date" class="form-control"></div>
                                    <div class="col-md-12 mt-3"><label class="labels">Telephone</label><input type="text" class="form-control" placeholder="e.g: 0112233442"></div>
                                    <div class="col-md-12 mt-3"><label class="labels">Email</label><input type="email" class="form-control" placeholder="e.g: text@gmail.com"></div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 "><label class="labels">Country</label><input type="text" class="form-control" placeholder="Country"></div>
                                    <div class="col-md-6 mt-3"><label class="labels">City/Province</label><input type="text" class="form-control" placeholder="City/Province"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
    



    </body>
    <?php include "./templates/footer.php"; ?>
</html>