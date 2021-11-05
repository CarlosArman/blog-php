<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> The Perfect Cup - Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.assets/js/1.4.2/respond.min.js"></script>
    <![endif]-->




</head>

<body>

    <div class="brand">The Perfect Cup</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <?php
    require_once '../partials/nav.php';
    ?>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"> <strong>Login</strong>
                    </h2>
                    <hr>
                    <div id="add_err2"></div>

                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <button type="submit" class="btn btn-default" id="login">Submit</button>
                            </div>
                        </div>
                    </form>
                    <div class="form-group col-lg-12" style="text-align: center;">
                        <a href="register.php"><button type="submit" class="btn btn-default">Not a Member? Register here</button></a>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <?php
    require_once '../partials/footer.php';
    ?>

    <!-- jQuery -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/login.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/js/bootstrap.min.js"></script>

</body>

</html>