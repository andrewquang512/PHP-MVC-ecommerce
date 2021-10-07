<!DOCTYPE html>
<html lang="en">
    <?php include "./templates/header.php"; ?>
    <body>
        <?php include "./templates/sidebar.php"; ?>
        <section id="section">
            <?php include "./templates/navbar.php"; ?>
            <div class="home-content">
                <div class="employee_list">
                <!-- Website Overview -->
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg title">
                            <h3 class="panel-title">Content</h3>
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
                                    <th>Title</th>
                                    <th>Published</th>
                                    <th>Created</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td>Blog Post 1</td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td>Dec 12, 2016</td>
                                    <td>
                                        <button class="btn btn-primary"><i class="far fa-edit"></i></button>
                                        <button class="btn btn-danger"><i class="fas fa-minus"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Blog Post 2</td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td>Dec 13, 2016</td>
                                    <td>
                                        <button class="btn btn-primary"><i class="far fa-edit"></i></button>
                                        <button class="btn btn-danger"><i class="fas fa-minus"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Blog Post 3</td>
                                    <td><i class="fas fa-minus"></i></td>
                                    <td>Dec 13, 2016</td>
                                    <td>
                                        <button class="btn btn-primary"><i class="far fa-edit"></i></button>
                                        <button class="btn btn-danger"><i class="fas fa-minus"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Blog Post 4</td>
                                    <td><i class="fas fa-check"></i></td>
                                    <td>Dec 14, 2016</td>
                                    <td>
                                        <button class="btn btn-primary"><i class="far fa-edit"></i></button>
                                        <button class="btn btn-danger"><i class="fas fa-minus"></i></button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <?php include "./templates/footer.php"; ?>
</html>