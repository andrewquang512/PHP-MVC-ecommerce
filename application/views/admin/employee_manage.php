<!DOCTYPE html>
<html lang="en">
    <?php include "./templates/header.php"; ?>
    <body>
        <?php include "./templates/sidebar.php"; ?>
        <section id="section">
            <?php include "./templates/navbar.php"; ?>
            <div class="home-content">
                <div class="employee_list">
                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg title">
                            <h3 class="panel-title">Employee List</h3>
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
                                    <th>City/Province</th>
                                    <th>Date of Birth</th>
                                    <th>Telephone</th>
                                    <th>Position</th>
                                    <th>Tools</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td><a href="#" data-toggle="modal" data-target="#exampleModalCenter">Nguyễn Văn A</a></td>
                                    <td>Hồ Chí Minh</td>
                                    <td>01/01/2001</td>
                                    <td>0123456789</td>
                                    <td>Admin</td>
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
        

        <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



    </body>
    <?php include "./templates/footer.php"; ?>
</html>