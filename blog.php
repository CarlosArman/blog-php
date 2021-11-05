<?php
//Initialize Session
session_start();

if (isset($_SESSION['login'])) {

  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup - Blog </title>

    <!-- favicon -->

    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/site.webmanifest">

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/business-casual.css" rel="stylesheet">

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
    require_once 'partials/nav.php';
    ?>

    <div class="container">

      <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">The Perfect Cup
              <strong>blog</strong>
            </h2>

            <hr>
            <h2 class="text-center">Welcome <?php echo $fname;
                                            echo " ";
                                            echo $lname; ?> </h2>
          </div>
          <div class="col-lg-12 text-center">
            <img class="img-responsive img-border img-full" src="assets/img/slide-1.jpg" alt="">
            <h2>Coconut Oil Coffee
              <br>
              <small>October 13, 2013</small>
            </h2>
            <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Read More</button>
            <hr>
          </div>
          <div class="col-lg-12 text-center">
            <img class="img-responsive img-border img-full" src="assets/img/slide-2.jpg" alt="">
            <h2>Irish Coffee
              <br>
              <small>October 13, 2013</small>
            </h2>
            <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Read More</button>
            <hr>
          </div>
          <div class="col-lg-12 text-center">
            <img class="img-responsive img-border img-full" src="assets/img/slide-3.jpg" alt="">
            <h2>Frozen Caramel Latte
              <br>
              <small>October 13, 2013</small>
            </h2>
            <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">Read More</button>
            <hr>
          </div>
          <div class="col-lg-12 text-center">
            <ul class="pager">
              <li class="previous"><a href="#">&larr; Older</a>
              </li>
              <li class="next"><a href="#">Newer &rarr;</a>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
    <!-- /.container -->

    <!-- Modal 1 -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Coconut Oil Coffee</h4>
          </div>
          <div class="modal-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laudantium pariatur atque vel sint cum, a doloremque earum possimus laborum sequi nostrum ducimus accusamus tenetur aliquam magnam eos similique ut animi quos quisquam ea nemo voluptatum esse! Sunt voluptatem corporis assumenda dolorum alias nihil optio, veritatis id reprehenderit molestias labore laboriosam placeat aliquam accusamus explicabo amet harum dolores. Velit, in tempora tenetur aut error nihil magni et facilis cumque! Inventore harum omnis dolorem dicta odit, culpa distinctio sint nobis corrupti laborum, reprehenderit expedita officia placeat, nostrum atque vitae rerum praesentium laboriosam assumenda quam blanditiis enim animi qui earum. Doloribus, porro.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

    <!-- Modal 2 -->
    <div id="myModal2" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Irish Coffee</h4>
          </div>
          <div class="modal-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laudantium pariatur atque vel sint cum, a doloremque earum possimus laborum sequi nostrum ducimus accusamus tenetur aliquam magnam eos similique ut animi quos quisquam ea nemo voluptatum esse! Sunt voluptatem corporis assumenda dolorum alias nihil optio, veritatis id reprehenderit molestias labore laboriosam placeat aliquam accusamus explicabo amet harum dolores. Velit, in tempora tenetur aut error nihil magni et facilis cumque! Inventore harum omnis dolorem dicta odit, culpa distinctio sint nobis corrupti laborum, reprehenderit expedita officia placeat, nostrum atque vitae rerum praesentium laboriosam assumenda quam blanditiis enim animi qui earum. Doloribus, porro.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

    <!-- Modal 3 -->
    <div id="myModal3" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Frozen Caramel Latte</h4>
          </div>
          <div class="modal-body">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laudantium pariatur atque vel sint cum, a doloremque earum possimus laborum sequi nostrum ducimus accusamus tenetur aliquam magnam eos similique ut animi quos quisquam ea nemo voluptatum esse! Sunt voluptatem corporis assumenda dolorum alias nihil optio, veritatis id reprehenderit molestias labore laboriosam placeat aliquam accusamus explicabo amet harum dolores. Velit, in tempora tenetur aut error nihil magni et facilis cumque! Inventore harum omnis dolorem dicta odit, culpa distinctio sint nobis corrupti laborum, reprehenderit expedita officia placeat, nostrum atque vitae rerum praesentium laboriosam assumenda quam blanditiis enim animi qui earum. Doloribus, porro.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>

    <?php
    require_once 'partials/footer.php';
    ?>


    <!-- jQuery -->
    <script src="assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

  </body>

  </html>

<?php

} else {
  header("location:users/login.php ");
}
?>