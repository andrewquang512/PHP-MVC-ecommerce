<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <?php 
            $uri = $_SERVER['REQUEST_URI']; 
            $uriAr = explode("/", $uri);
            $page = end($uriAr);
            if($page == 'comment_manage.php'){
               echo '<link rel="stylesheet" href="../../../public/assets/css/admin/comment/styles.css">';
            }
    ?>
    <link rel="shortcut icon" type="image" href="../../../public/assets/images/cropped-mona-180x180.png">
    <link rel="stylesheet" href="../../../public/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../../../public/assets/css/admin/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <script type="text/javascript" src="../../../public/assets/js/admin/index.js"></script>
    <script type="text/javascript" src="../../../public/assets/bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../../public/assets/bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="../../../public/assets/bootstrap/js/bootstrap.min.js"></script>
</head>