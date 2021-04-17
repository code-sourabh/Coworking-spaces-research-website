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
                            <h1><span>create an account</span></h1>
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
                            <li>register
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page_title_section end -->
    <!--register area start here-->
    <div class="register_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                    <div class="tb_work_txt_wrapper">
                        <div class="abt_txt_box heading_center">
                            <div class="tb_left_heading_wraper heading_center_line">

                                <h3>new customer register here</h3>

                            </div>
                            <p>Register got your account with city office.</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="register_wrapper_box">
                        <div class="register_left_form">

                            <div class="jp_regiter_top_heading">
                                <p>Fields with * are mandetory </p>
                            </div>
                            <div class="row clearfix">
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="username" value="" placeholder="Username*">
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="email" value="" placeholder="Email*">
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                    <input type="password" name="password" value="" placeholder="password*">
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                    <input type="password" name="field-name" value="" placeholder="re-enter password*">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                    <input type="text" name="fname" value="" placeholder="Fist Name">
                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                    <input type="text" name="lname" value="" placeholder="Last Name">

                                </div>

                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                    <input type="text" name="phone" value="" placeholder="Phone">

                                </div>
                                <!--Form Group-->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">

                                    <input type="text" name="address" value="" placeholder="Address">
                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="check-box text-center">
                                        <input type="checkbox" name="shipping-option" id="account-option_2"> &ensp;
                                        <label for="account-option_2" class="label_2">I agreed to the <a href="#" class="check_box_anchr">Terms and Conditions</a> governing the use of weapon store</label>
                                    </div>
                                </div>
                            </div>

                            <div class="login_btn_wrapper register_btn_wrapper login_wrapper register_wrapper_btn">
                                <a href="login.php?username=$username&&password=$password&&fname=$fname&&lname=$lname&&email=$email&&pnone=$phone&&address=$address" class="btn btn-primary login_btn"> register </a>
                            </div>
                            <div class="login_message">
                                <p>Already a member? <a href="login.php"> Login Here </a> </p>
                            </div>

                        </div>

                    </div>
                    <p class="btm_txt_register_form">In case you are using a public/shared computer we recommend that you logout to prevent any un-authorized access to your account</p>
                </div>
            </div>
        </div>
    </div>
    <!--register area start end-->
    <!-- enquiry wrapper start -->
    <?php include 'includes/footer.php'; ?>
