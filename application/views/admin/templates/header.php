<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <?php 
            if($file == 'comment_manage'){
               echo '<link rel="stylesheet" type="text/css" href="public/assets/css/admin/comment/styles.css">';
            }
            if($file == 'contact_manage'){
               echo '<link rel="stylesheet" type="text/css" href="public/assets/css/admin/contact/styles.css">';
            }
    ?>
    <link rel="shortcut icon" type="image" href="public/assets/images/cropped-mona-180x180.png">
    <link rel="stylesheet" type='text/css' href="public/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type='text/css' href="public/assets/css/admin/styles.css">
    <link rel="stylesheet" type='text/css' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <?php 
            if($file == 'contact_manage'){
               echo '<script type="text/javascript" src="public/assets/js/admin/contact/index.js"></script>';
            }
    ?>
</head>