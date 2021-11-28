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
                            <h3 class="panel-title">Contact Management</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="form-control" id="FilterInput" onkeyup="FilterFunction()" type="text" placeholder="Filter Posts...">
                                </div>
                            </div>
                            <br>
                            <table class="table table-striped table-hover" id="FilterTable">
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Phone</th>
                                    <th>Emails</th>
                                    <th>Tools</th>
                                </tr>
                                <?php
                                foreach ($contacts as $contact) {
                                    echo '<tr>';
                                    echo '<td>' . $contact->getid() .
                                        '</td>
                                        <td>' . $contact->getcustomer_name() . 
                                        '</td>
                                        <td> ' . $contact->gettitle() .
                                        '</td>
                                        <td> ' . $contact->getphone() .
                                        '</td>
                                        <td> ' . $contact->getemail() .
                                        '</td>
                                        <td>
                                        <button id="'. $contact->getid() .'" onClick="displaycontact(this.id)" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                        <button class="btn btn-danger" data-toggle="modal" data-target="#deletecontact'. $contact->getid() .'"><i class="fas fa-minus"></i></button>
                                        </td>';
                                    echo '</tr>';
                                    
                                    echo '<tr class="panel-body contact-details" id="contact'. $contact->getid() .'" >
                                    <td colspan="6">
                                        <h4>' . $contact->gettitle() . '</h4>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="p-1">Name:</th>
                                                        <td class="p-1">' . $contact->getcustomer_name() . '</td>
                                                    </tr>                                          
                                                    <tr>
                                                        <th scope="row" class="p-1">Phone:</th>
                                                        <td class="p-1">' . $contact->getphone() . '</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="p-1">Email:</th>
                                                        <td class="p-1">' . $contact->getemail() . '</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="p-1">Content</th>
                                                        <td class="p-1">' . $contact->getcontent() . '</td>
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
            foreach ($contacts as $contact) {
                echo '
            <div id="deletecontact'. $contact->getid() .'"class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <form action="http://localhost/PHP-MVC-ecommerce/index.php?controller=admin&action=deletecontact" method="post" class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Contact</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body container bg-white">
                            <blockquote class="blockquote text-center">
                                <p class="mb-0">Are you sure want to delete this contact ?</p>
                            </blockquote>
                        </div>
                        <div class="modal-footer d-flex justify-content-around">
                        <input type="hidden" name="contact_id" value="'. $contact->getid() .'" />
                            <button type="button" class="btn btn-success px-5" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Delete Contact</button>
                        </div>
                    </div>
                </form>
            </div>';
            }
        ?>
    </body>
    <?php include ROOT . '/application/views/admin/templates/footer.php'; ?>
</html>