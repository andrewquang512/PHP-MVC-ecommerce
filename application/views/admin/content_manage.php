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
                                    <input class="form-control" id="FilterInput" onkeyup="FilterFunction()" type="text" placeholder="Filter Posts...">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <button class="btn btn-success" data-toggle="modal" data-target="#createcontent">Add a new post</button>
                                </div>
                            </div>
                            <table class="table table-striped table-hover" id="FilterTable">
                                <tr>
                                    <th>No.</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Tools</th>
                                </tr>
                                <?php
                                foreach ($news as $new) {
                                    echo '<tr>';
                                    echo '<td>' . $new->getnews_id() .
                                        '</td>
                                        <td> <img class="rounded-circle" src="'.$new->getimage().'" width="80" height="80">
                                        </td>
                                        <td> ' . $new->gettitle() .
                                        '</td>
                                        <td style="width:20%;">
                                        <button id="'. $new->getnews_id() .'" onClick="displaycontent(this.id)" class="btn btn-success"><i class="far fa-eye"></i></button>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#changecontent'. $new->getnews_id() .'"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#deletecontent'. $new->getnews_id() .'"><i class="fas fa-minus"></i></button>
                                        </td>';
                                    echo '</tr>';
                                    
                                    echo '<tr class="panel-body content-details mt-2 mb-3" id="content'. $new->getnews_id() .'" style="display:none;" >
                                    <td colspan="6">
                                        <h4>' . $new->gettitle() . '</h4>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="p-1">Release Hour:</th>
                                                        <td class="p-1">' . $new->getrelease_hour() . '</td>
                                                    </tr>   
                                                    <tr>
                                                        <th scope="row" class="p-1">Content</th>
                                                        <td class="p-1">' . $new->getcontent() . '</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>';
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
            foreach ($news as $new) {
                echo '
            <div id="changecontent'. $new->getnews_id() .'"class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <form action="http://localhost/PHP-MVC-ecommerce/index.php?controller=admin&action=updatecontent" method="post" class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create a new post</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body container bg-white">
                            <div class="row" >
                                <div class="col-12 border-right">
                                    <div class="py-2">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h6 class="text-right">Add post</h6>
                                        </div> 
                                        <div class="row ">
                                            <div class="col-md-12"><label class="labels">Thumbnail:</label><input type="text" name="thumbnail" value="'.$new->getimage().'" class="form-control" placeholder="e.g: Put you image URL here" required></div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-12"><label class="labels">Title:</label><input type="text" name="title" class="form-control" value="'.$new->gettitle().'" placeholder="e.g: John" required></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12"><label class="labels">Content:</label><textarea rows="12" name="content" class="form-control" value="'.$new->getcontent().'" placeholder="e.g: Put some text about your newest post" required>'.$new->getcontent().'</textarea></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12"><label class="labels">Release Hour:</label><input type="text" name="release_hour" class="form-control" value="'.$new->getrelease_hour().'" placeholder="e.g: Time hour released" required></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="content_id" value="'. $new->getnews_id() .'" />
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update Post</button>
                        </div>
                    </div>
                </form>
            </div>
            <div id="deletecontent'. $new->getnews_id() .'"class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <form action="http://localhost/PHP-MVC-ecommerce/index.php?controller=admin&action=deletecontent" method="post" class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Post</h5>
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
                            <input type="hidden" name="content_id" value="'. $new->getnews_id() .'" />
                            <button type="button" class="btn btn-success px-5" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete Post</button>
                        </div>
                    </div>
                </form>
            </div>';
            }
        ?>
            <div id="createcontent"class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <form action="http://localhost/PHP-MVC-ecommerce/index.php?controller=admin&action=addcontent" method="post" class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create a new post</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body container bg-white">
                            <div class="row" >
                                <div class="col-12 border-right">
                                    <div class="py-2">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h6 class="text-right">Add post</h6>
                                        </div> 
                                        <div class="row ">
                                            <div class="col-md-12"><label class="labels">Thumbnail:</label><input type="text" name="thumbnail" class="form-control" placeholder="e.g: Put you image URL here" required></div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-md-12"><label class="labels">Title:</label><input type="text" name="title" class="form-control" placeholder="e.g: John" required></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12"><label class="labels">Content:</label><textarea rows="12" name="content" class="form-control" placeholder="e.g: Put some text about your newest post" required></textarea></div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12"><label class="labels">Release Hour:</label><input type="text" name="release_hour" class="form-control" placeholder="e.g: Time hour released" required></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create Post</button>
                        </div>
                    </div>
                </form>
            </div>
    </body>
    <?php include  ROOT . '/application/views/admin/templates/footer.php'; ?>
</html>