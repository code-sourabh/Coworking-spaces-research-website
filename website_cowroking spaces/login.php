
<?php
if(isset($_POST['register'])>0)
{
    session_start();

    $mysqli = new mysqli("localhost","root","","coworkingspace");

    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address  = $_POST['address'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    $sql = "INSERT INTO users (username,password,fname,lname,email,phone,address) VALUES ('$username','$password','$fname','$lname','$email','$phone','$address')";
    // Perform query
    $result = $mysqli -> query($sql); 
    $mysqli -> close();
}
?>

<?php include 'includes/header.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>

    <div class="page_title_section">
        <div class="page_title_overlay"></div>
        <div class="page_header text-center">
            <div class="container">
                <div class="row">
                    <!-- section_heading start -->
                    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                        <div class="page_header_line">
                            <h1><span>login to your account</span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="row">
                    <div class="page_header_bottom">
                        <ul class="sub_title">
                            <li><a href="head_scroll.php"> Home </a></li>
                            <li class="icon_breamcum"> > </li>
                            <li>login
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page_title_section end -->
    <!--login section start-->
    <div class="login_section">
        <!-- login_form_wrapper -->
        <div class="login_form_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                        <div class="tb_work_txt_wrapper">
                            <div class="abt_txt_box heading_center">
                                <div class="tb_left_heading_wraper heading_center_line">

                                    <h3>login to your account</h3>

                                </div>
                                <p>Please Login To Access Weapon Store Area.</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <!-- login_wrapper -->

                        <div class="login_wrapper">
                            <div class="row">
                            </div>
                            <h2>or</h2>
                            <div class="formsix-pos">
                                <div class="form-group i-email">
                                    <input type="email" class="form-control" required="" id="email2" placeholder="Username*">
                                </div>
                            </div>
                            <div class="formsix-e">
                                <div class="form-group i-password">
                                    <input type="password" class="form-control" required="" id="password2" placeholder="Password *">
                                </div>
                            </div>
                            <div class="login_remember_box">
                                <label class="control control--checkbox">Remember me
                                    <input type="checkbox">
                                    <span class="control__indicator"></span>
                                </label>
                                <a href="forgot_pass.php" class="forget_password">
									Forgot Password
								</a>
                            </div>
                            <div class="login_btn_wrapper">
                                <a href="head_scroll.php" class="btn btn-primary login_btn" name="login"> login </a>
                            </div>
                            <div class="login_message">
                                <p>Don’t have an account ? <a href="register.php"> Register Now </a> </p>
                            </div>
                        </div>
                        <p>In case you are using a public/shared computer we recommend that you logout to prevent any un-authorized access to your account</p>
                        <!-- /.login_wrapper-->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.login_form_wrapper-->
    </div>
    <!--login section end-->
    <!-- enquiry wrapper start -->
    <?php include 'includes/footer.php'; ?>