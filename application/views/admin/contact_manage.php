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
                                    <th>Tools</th>
                                </tr>
                                <?php
                                foreach ($contacts as $contact) {
                                    echo '<tr>';
                                    echo '<td>' . $contact->id .
                                        '</td>
                                        <td>' . $contact->customer_name . 
                                        '</td>
                                        <td> ' . $contact->title .
                                        '</td>
                                        <td> ' . $contact->phone .
                                        '</td>
                                        <td> ' . $contact->email .
                                        '</td>
                                        <td>
                                        <button id="'. $contact->id .'" onClick="displaycontact(this.id)" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                        <button class="btn btn-danger"><i class="fas fa-minus"></i></button>
                                        </td>';
                                    echo '</tr>';
                                    
                                    echo '<tr class="panel-body contact-details" id="contact'. $contact->id .'" >
                                    <td colspan="6">
                                        <h4>' . $contact->title . '</h4>
                                        <div class="table-responsive">
                                            <table class="table table-borderless mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="p-1">Name:</th>
                                                        <td class="p-1">' . $contact->customer_name . '</td>
                                                    </tr>                                          
                                                    <tr>
                                                        <th scope="row" class="p-1">Phone:</th>
                                                        <td class="p-1">' . $contact->phone . '</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="p-1">Email:</th>
                                                        <td class="p-1">' . $contact->email . '</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="p-1">Content</th>
                                                        <td class="p-1">' . $contact->content . '</td>
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
    </body>
    <?php include ROOT . '/application/views/admin/templates/footer.php'; ?>
</html>