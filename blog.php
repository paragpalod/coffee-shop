<?php
  session_start();

  if(isset($_SESSION['login'])) {

    $fName = $_SESSION['fName'];
    $lName = $_SESSION['lName'];

?>
<!DOCTYPE html>
<html lang="en">
<?php require_once 'header.php';?>
<body>

    <?php require_once 'nav.php';?>

    <div class="brand">The Coffee Shop</div>
    <div class="address-bar">3481 Balewadi Highstreet | Balewadi, 411033 | +91 1234567890</div>

    <div class="container">

        <div class="row">
            <div class="box">
                <h2 class="text-center">
                  Welcome <?php echo "$fName $lName" ?> | <a href="logout.php">Logout</a>
                </h2>
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">The Coffee Shop
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-1.jpg" alt="">
                    <h2>COCONUT OIL COFFEE
                        <br>
                        <small>October 13, 2020</small>
                    </h2>
                    <p>Start your morning off with this great recipe for hot coffee with coconut oil and butter.</p>
                    <button type='button' class='btn btn-info btn-lg' data-toggle="modal" data-target="#myModal1">
                      Read More
                    </button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-2.jpg" alt="">
                    <h2>IRISH COFFEE
                        <br>
                        <small>October 13, 2020</small>
                    </h2>
                    <p>Take the edge off with a Fresh hot cup of coffee made with Irish whiskey and Irish Cream.</p>
                    <button type='button' class='btn btn-info btn-lg' data-toggle="modal" data-target="#myModal2">
                      Read More
                    </button>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img class="img-responsive img-border img-full" src="img/slide-3.jpg" alt="">
                    <h2>FROZEN CARAMEL LATTE
                        <br>
                        <small>October 13, 2020</small>
                    </h2>
                    <p>Sweetened with caramel sauce and topped with whipped cream, this will make you happy any time of day.</p>
                    <button type='button' class='btn btn-info btn-lg' data-toggle="modal" data-target="#myModal3">
                      Read More
                    </button>
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

    <div id="myModal1" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 style="display: inline-block" class="modal-title">COCONUT OIL COFFEE</h5>
            <button style="display: inline-block" type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Start your morning off with this great recipe for hot coffee with coconut oil and butter.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div id="myModal2" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 style="display: inline-block" class="modal-title">IRISH COFFEE</h5>
            <button style="display: inline-block" type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Take the edge off with a Fresh hot cup of coffee made with Irish whiskey and Irish Cream.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div id="myModal3" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 style="display: inline-block" class="modal-title">FROZEN CARAMEL LATTE</h5>
            <button style="display: inline-block" type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Sweetened with caramel sauce and topped with whipped cream, this will make you happy any time of day.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <?php require_once 'footer.php';?>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php
  } else {
    header("location:login.php");
  }
?>
