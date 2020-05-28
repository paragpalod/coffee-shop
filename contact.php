<!DOCTYPE html>
<html lang="en">
<?php require_once 'header.php';?>
<script type="text/javascript">
    $(document).ready(function () {

        $("#contact").click(function () {

            fname = $("#fname").val();
            email = $("#email").val();
            message = $("#message").val();

            $.ajax({
                type: "POST",
                url: "sendmsg.php",
                data: "fname=" + fname + "&email=" + email + "&message=" + message,
                success: function (html) {
                    if (html == 'true') {

                        $("#add_err2").html('<div class="alert alert-success"> \
                                             <strong>Message Sent!</strong> \ \
                                             </div>');

                    } else if (html == 'fname_long') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>First Name</strong> must cannot exceed 50 characters. \ \
                                             </div>');

        } else if (html == 'fname_short') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>First Name</strong> must exceed 2 characters. \ \
                                             </div>');

        } else if (html == 'email_long') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Email</strong> must cannot exceed 50 characters. \ \
                                             </div>');

        } else if (html == 'email_short') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Email</strong> must exceed 2 characters. \ \
                                             </div>');

        } else if (html == 'eformat') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Email</strong> format incorrect. \ \
                                             </div>');

        } else if (html == 'message_long') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Message</strong> must cannot exceed 50 characters. \ \
                                             </div>');

        } else if (html == 'message_short') {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Message</strong> must exceed 2 characters. \ \
                                             </div>');


                    } else {
                        $("#add_err2").html('<div class="alert alert-danger"> \
                                             <strong>Error</strong> processing request. Please try again. \ \
                                             </div>');
                    }
                },
                beforeSend: function () {
                    $("#add_err2").html("loading...");
                }
            });
            return false;
        });
    });
</script>
<body>

    <?php require_once 'nav.php';?>

    <div class="brand">The Coffee Shop</div>
    <div class="address-bar">3481 Balewadi Highstreet | Balewadi, 411033 | +91 1234567890</div>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>The Coffee Shop</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2248.726941292432!2d73.7695948879537!3d18.578868954635045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9364128099d%3A0x43892e901929965f!2sBalewadi%2C%20Pune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1590662263240!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>123.456.7890</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:name@thecoffeeshop.com">info@thecoffeeshop.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>Melrose Place
                            <br>Balewadi, Pune 411033</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <div id="add_err2"></div>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label>Name</label>
                                <input type="text" id="fname" name="fname" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="25" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" id="message" name="message" maxlength="100" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit"  id="contact" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <?php require_once 'footer.php';?>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
