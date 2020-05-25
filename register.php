<!DOCTYPE html>
<html lang="en">
  <head>
  <?php require_once 'header.php';?>
  <script type="text/javascript">
    $('document').ready(() => {

      $('#register').click( (ev) => {
        ev.preventDefault();
        fName = $('#fName').val();
        lName = $('#lName').val();
        email = $('#email').val();
        password = $('#password').val();

        $.ajax({
          type: "POST",
          url: "addUser.php",
          data: "fName=" + fName + "&lName=" + lName + "&email=" + email + "&password=" + password,
          success: (html) => {
            console.log('aaaaaaaaaaaaaaaaaaaa', html);
            if (html === true) {
              $("#add_err2").html('<div class="alert alert-success"><strong>Account</strong> Processed. \ \ </div>')
              widow.location.href = "inndex.php";
            } else if (html === false) {
              $("#add_err2").html('<div class="alert alert-danger"><strong>Email Address</strong> already exists. \ \ </div>')
            } else if (html === 'fName') {
              $("#add_err2").html('<div class="alert alert-warning"><strong>First name</strong> is required. \ \ </div>')
            } else if (html === 'lName') {
              $("#add_err2").html('<div class="alert alert-warning"><strong>Last name</strong> is required. \ \ </div>')
            } else if (html === 'eShort') {
              $("#add_err2").html('<div class="alert alert-warning"><strong>Email Address</strong> is required. \ \ </div>')
            } else if (html === 'eFormat') {
              $("#add_err2").html('<div class="alert alert-warning"><strong>Email Address</strong> format is not valid. \ \ </div>')
            } else if (html === 'pShort') {
              $("#add_err2").html('<div class="alert alert-warning"><strong>Password</strong> is required. \ \ </div>')
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
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                      Registration Form
                    </h2>
                    <hr>
                    <div id="add_err2" class="text-center"></div>
                    <br>
                </div>
                <form role="form">
                    <div class="row">
                        <div class="form-group col col-lg-3"></div>
                        <div class="form-group col col-lg-2"><label style="font-size: 20px">First Name:</label></div>
                        <div class="form-group col col-lg-4">
                            <input id="fName" name="fName" maxlength="25" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col col-lg-3"></div>
                        <div class="form-group col col-lg-2"><label style="font-size: 20px">Last Name:</label></div>
                        <div class="form-group col-lg-4">
                            <input id="lName" name="lName" maxlength="25" type="text" class="form-control">
                        </div>
                    </div>
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
                            <input id="password" name="password" maxlength="25" type="text" class="form-control" rows="6"></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col col-lg-5"></div>
                        <div class="form-group col-lg-2">
                            <button id="register" style="margin-left: 20px" type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
