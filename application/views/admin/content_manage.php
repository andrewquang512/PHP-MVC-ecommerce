<!DOCTYPE html>
<html lang="en">
    <?php include  ROOT . '/application/views/admin/templates/header.php'; ?>
    <body>
        <?php include  ROOT . '/application/views/admin/templates/sidebar.php'; ?>
        <section id="section">
            <?php include  ROOT . '/application/views/admin/templates/navbar.php'; ?>
            <div class="home-content" id="homecontent">
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
                                
                            </table>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add a new Post</button>
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
                <h5 class="modal-title">Create new post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body container bg-white">
                <div class="row">
                    <div class="col-12 border-right">
                        <div class="py-2">
                            <!-- <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="text-right">Edit profile</h6>
                            </div> -->
                            <div class="row ">
                                <div class="col-md-12"><label class="labels">Title</label><input type="text" class="form-control" placeholder="John"></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Content</label><textarea rows="12" class="form-control"></textarea></div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                                        <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                        <input class="form-control" id="myInput" type="text" placeholder="Search..">
                                        <li><a href="#">HTML</a></li>
                                        <li><a href="#">CSS</a></li>
                                        <li><a href="#">JavaScript</a></li>
                                        <li><a href="#">jQuery</a></li>
                                        <li><a href="#">Bootstrap</a></li>
                                        <li><a href="#">Angular</a></li>
                                    </div>
                                </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Create new post</button>
        </div>
    </div>
  </div>
</div>
    </body>
    <?php include  ROOT . '/application/views/admin/templates/footer.php'; ?>
</html>