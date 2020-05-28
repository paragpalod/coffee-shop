<!DOCTYPE html>
<html lang="en">
  <head>
  <?php require_once 'header.php';?>
  <script type="text/javascript">
    $('document').ready(() => {

      $('#login').click( (ev) => {
        ev.preventDefault();
        email = $('#email').val();
        password = $('#password').val();

        $.ajax({
          type: "POST",
          url: "loginUser.php",
          data: "email=" + email + "&password=" + password,
          success: (html) => {

            console.log({html});
            if (html == 'true') {
              $("#add_err2").html('<div class="alert alert-success"><strong>Login </strong> Successfully. \ \ </div>')
              window.location.href = "index.php";
            } else if (html == 'false') {
              $("#add_err2").html('<div class="alert alert-danger"><strong>Invalid Credential!</strong> \ \ </div>')
            } else {
              $("#add_err2").html('<div class="alert alert-danger"><strong>Something went wrong</strong> please try again. \ \ </div>')
            }
          },
          beforeSend: () => {
            $("#add_err2").html('Loading...')
          }
        })
      })

    })
  </script>
  <body>

    <?php require_once 'nav.php';?>

    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="alert alert-danger"><strong>You must be logged in to view this page.</strong></div>
                </div>
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                      Login
                    </h2>
                    <hr>
                    <div id="add_err2" class="text-center"></div>
                    <br>
                </div>
                <form role="form">
                    <div class="row">
                        <div class="form-group col col-lg-3"></div>
                        <div class="form-group col col-lg-2"><label style="font-size: 20px">Email:</label></div>
                        <div class="form-group col-lg-4">
                            <input id="email" name="email" maxlength="25" type="email" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col col-lg-3"></div>
                        <div class="form-group col col-lg-2"><label style="font-size: 20px">Password</label></div>
                        <div class="form-group col-lg-4">
                            <input id="password" name="password" maxlength="25" type="password" class="form-control" rows="6"></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col col-lg-5"></div>
                        <div class="form-group col-lg-1">
                            <button id="login" style="margin-left: 20px" type="submit" class="btn btn-primary btn-sm">Login</button>
                        </div>
                        <div class="form-group col-lg-3">
                          <a href="/coffee-shop/register.php">
                            <button style="margin-left: 20px" type="button" class="btn btn-primary btn-sm">
                              Not a Member Register
                            </button>
                          </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col col-lg-6"></div>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
