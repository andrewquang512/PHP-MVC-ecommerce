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
                            <h3 class="panel-title">Contact Management</h3>
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
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Phone</th>
                                    <th>Emails</th>
                                    <th>Date</th>
                                    <th>Tools</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <th>Nguyễn Văn A</th>
                                    <td><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Tiến đẹp trai quá</a></td>
                                    <td>0123456789</td>
                                    <td>tiendeptrai@gmail.com</td>
                                    <td>02/02/2021</td>
                                    <td>
                                        <button class="btn btn-primary"><i class="far fa-eye"></i></button>
                                        <button class="btn btn-danger"><i class="fas fa-minus"></i></button>
                                    </td>
                                </tr>
                            </table>
                            <div class="panel-body" >
                                <h4>Tiến đẹp trai quá</h4>
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="p-1">Name:</th>
                                                <td class="p-1">Nguyễn Văn A</td>
                                            </tr>                                          
                                            <tr>
                                                <th scope="row" class="p-1">Phone:</th>
                                                <td class="p-1">0123456789</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="p-1">Email:</th>
                                                <td class="p-1">tiendeptrai@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="p-1">Date:</th>
                                                <td class="p-1">02/02/2021</td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="p-1">Content</th>
                                                <td class="p-1">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- COMMENT 1 - END -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <?php include "./templates/footer.php"; ?>
</html>