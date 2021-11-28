<!DOCTYPE html>
<html lang="en">
    <?php include ROOT . '/application/views/admin/templates/header.php'; ?>
    <body>
        <?php include ROOT . '/application/views/admin/templates/sidebar.php'; ?>
        <section id="section">
            <?php include ROOT . '/application/views/admin/templates/navbar.php'; ?>
            <div class="home-content" id="homecontent">
                <div class="employee_list">
                <!-- Website Overview -->
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg title">
                            <h3 class="panel-title">Comments</h3>
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
                                <th>Comments</th>
                                <th>Last Commented</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>Blog Post 1</td>
                                <td>10</td>
                                <td>Dec 12, 2016</td>
                                <td>
                                    <button class="btn btn-primary">View Comments</button>
                                </td>
                            </tr>
                        </table>
                        <div class="panel-body" id="comments">
                            <h3>10 Comments</h3>
                            <!-- COMMENT 1 - START -->
                            <div class="media">
                                <a class="pull-left" href="#"><img class="media-object" src="https://toppng.com/uploads/preview/roger-berry-avatar-placeholder-11562991561rbrfzlng6h.png" alt=""></a>
                                <div class="media-body">
                                    <h4 class="media-heading">John Doe <span>Dec 12, 2016</span></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <ul class="list-unstyled d-flex list-inline media-detail pull-right">
                                        <li class=""><button class="btn btn-primary">Change Visibility</button></li>
                                        <li class=""><button class="btn btn-danger">Delete</button></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- COMMENT 1 - END -->
                        </div>

                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Products</th>
                                <th>Reviews</th>
                                <th>Last Commented</th>
                                <th></th>
                            </tr>
                            <tr>
                                <td>Iphone 10</td>
                                <td>10</td>
                                <td>Dec 12, 2016</td>
                                <td>
                                    <button class="btn btn-primary">View Reviews</button>
                                </td>
                            </tr>
                        </table>
                        <div class="panel-body" id="comments">
                            <h3>10 Comments</h3>
                            <!-- COMMENT 1 - START -->
                            <div class="media">
                                <a class="pull-left" href="#"><img class="media-object" src="https://toppng.com/uploads/preview/roger-berry-avatar-placeholder-11562991561rbrfzlng6h.png" alt=""></a>
                                <div class="media-body">
                                    <h4 class="media-heading">John Doe <span>Dec 12, 2016</span></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    <ul class="list-unstyled d-flex list-inline media-detail pull-right">
                                        <li class=""><button class="btn btn-primary">Change Visibility</button></li>
                                        <li class=""><button class="btn btn-danger">Delete</button></li>
                                    </ul>

                                </div>
                            </div>
                            <!-- COMMENT 1 - END -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <?php include ROOT . '/application/views/admin/templates/footer.php'; ?>
</html>