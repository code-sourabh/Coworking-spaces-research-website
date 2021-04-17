
<?php
if (isset($_POST['login'])>0)
{
    $mysqli = new mysqli("localhost","root","","coworkingspace");

    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sqlid = "SELECT name FROM users WHERE username = '$username' AND password = '$password'";
    $sql = mysqli_fetch_array($mysqli -> query($sqlid))[0];

    //$sql = "SELECT name FROM user_data WHERE user_id = '$id'";
    $name = mysqli_fetch_array($mysqli -> query($sql))[0];

    //echo "Hello ".$name;

    $mysqli -> close();
}
?>

<?php include 'includes/header.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>

    <div class="slider_wrapper">
        <div class="slider_overlay"></div>
        <div id="theme-main-banner">
            <div data-src="images/slider_img.jpg">
                <div class="camera_caption">
                    <div class="container">
                    </div>
                     <!-- /.container -->
                </div>
                <!-- /.camera_caption -->
            </div>
            <div data-src="images/slider_img.jpg">
                <div class="camera_caption">
                    <!-- /.container -->
                </div>
                <!-- /.camera_caption -->
            </div>
        </div>
        <!-- /#theme-main-banner -->
        <div class="slider_botm_box"></div>
    </div>
    <!--Slider area end here---------------------------------------------------------------------------------------------->
    <!--deals wrapper start----------------------------------------------------------------------------------------------->
    <!--deals wrapper end----------------------------------------------------------------------------------------------------------------->
    <!--latest property wrapper start-------------------------------------------------------------------------------------------------->
    <div class="latest_prop_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                    <div class="tb_work_txt_wrapper">
                        <div class="abt_txt_box heading_center">
                            <div class="tb_left_heading_wraper heading_center_line">

                                <h3>Workspaces in your city</h3>

                            </div>
                            <p>“Coworking gives you an excuse to play and mingle whilst getting your work done whether you are working for yourself, as a part of a team or an independent freelancer.”
</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6 hidden-sm hidden-xs">
                                        <div class="lp_cntnt">
                                            <div class="project-inner project-head">

                                                <div class="homes">
                                                    <!-- homes img -->
                                                    <a href="#" class="homes-img">
                                                        <div class="homes-tag button alt featured">owner</div>
                                                        <div class="home-tag-price">
                                                            Rs 2500
                                                        </div>
                                                        <div class="homes-tag button alt sale">sell</div>

                                                    </a>

                                                </div>
                                                <div class="homes_img_wrapper">
                                                    <img src="images/lp3.jpg" alt="home" class="img-responsive">
                                                </div>
                                            </div>
                                            <!-- homes content -->
                                            <div class="homes-content">
                                                <!-- homes address -->
                                                <div class="homes_cntnt_box">
                                                    <div class="homes_cntnt_left">
                                                        <img src="images/lp_img_1.png" alt="home"
                                                            class="img-responsive">
                                                    </div>
                                                    <div class="homes_cntnt_right">
                                                        <h3><a href="#">Indore</a></h3>
                                                        <p class="homes-address mb-3">
                                                            <a href="#">
                                                                M.P,India
                                                            </a>
                                                        </p>
                                                    </div>

                                                </div>
                                                <!-- homes hover -->

                                                <!-- homes List -->
                                                <div class="home_wrapper_list">
                                                    <ul class="homes-list clearfix">
                                                        <li>
                                                            type
                                                            <span>workspace</span>
                                                        </li>
                                                        <li>
                                                            area
                                                            <span>100 square feet</span>
                                                        </li>
                                                        <li>
                                                            rooms
                                                            <span>13</span>
                                                        </li>

                                                    </ul>
                                                </div>

                                                <div class="footer">
                                                    <h3>view map</h3>
                                                    <div class="lp_deals_icon">
                                                        <ul>
                                                            <li><a href="#"><i class="flaticon-shower"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-fan"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-television"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-garage"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-policeman"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-cctv"></i></a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6">
                                        <div class="lp_cntnt">
                                            <div class="project-inner project-head">

                                                <div class="homes">
                                                    <!-- homes img -->
                                                    <a href="#" class="homes-img">
                                                        <div class="homes-tag button featured agent">agent</div>
                                                        <div class="home-tag-price">
                                                            Rs 2700
                                                        </div>
                                                        <div class="homes-tag button alt sale">sell</div>

                                                    </a>

                                                </div>
                                                <div class="homes_img_wrapper">
                                                    <img src="images/lp2.jpg" alt="home" class="img-responsive">
                                                </div>
                                            </div>
                                            <!-- homes content -->
                                            <div class="homes-content">
                                                <!-- homes address -->
                                                <div class="homes_cntnt_box">
                                                    <div class="homes_cntnt_left">
                                                        <img src="images/lp_img_2.png" alt="home"
                                                            class="img-responsive">
                                                    </div>
                                                    <div class="homes_cntnt_right">
                                                        <h3><a href="#">Bhopal</a></h3>
                                                        <p class="homes-address mb-3">
                                                            <a href="#">
                                                                M.P, India
                                                            </a>
                                                        </p>
                                                    </div>

                                                </div>
                                                <!-- homes hover -->

                                                <!-- homes List -->
                                                <div class="home_wrapper_list">
                                                    <ul class="homes-list clearfix">
                                                        <li>
                                                            type
                                                            <span>workspace</span>
                                                        </li>
                                                        <li>
                                                            area
                                                            <span>150 square feet</span>
                                                        </li>
                                                        <li>
                                                            rooms
                                                            <span>11</span>
                                                        </li>

                                                    </ul>
                                                </div>

                                                <div class="footer">
                                                    <h3>view map</h3>
                                                    <div class="lp_deals_icon">
                                                        <ul>
                                                            <li><a href="#"><i class="flaticon-shower"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-fan"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-television"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-garage"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-policeman"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-cctv"></i></a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-6 hidden-xs">
                                        <div class="lp_cntnt">
                                            <div class="project-inner project-head">

                                                <div class="homes">
                                                    <!-- homes img -->
                                                    <a href="#" class="homes-img">
                                                        <div class="homes-tag button featured offer">offer</div>
                                                        <div class="home-tag-price">
                                                            Rs 2900
                                                        </div>
                                                        <div class="homes-tag button sale" id="sale_second_tr">sell
                                                        </div>

                                                    </a>

                                                </div>
                                                <div class="homes_img_wrapper">
                                                    <img src="images/lp3.jpg" alt="home" class="img-responsive">
                                                </div>
                                            </div>
                                            <!-- homes content -->
                                            <div class="homes-content">
                                                <!-- homes address -->
                                                <div class="homes_cntnt_box">
                                                    <div class="homes_cntnt_left">
                                                        <img src="images/lp_img_1.png" alt="home"
                                                            class="img-responsive">
                                                    </div>
                                                    <div class="homes_cntnt_right">
                                                        <h3><a href="#">Ujjain</a></h3>
                                                        <p class="homes-address mb-3">
                                                            <a href="#">
                                                                M.P, India
                                                            </a>
                                                        </p>
                                                    </div>

                                                </div>
                                                <!-- homes hover -->

                                                <!-- homes List -->
                                                <div class="home_wrapper_list">
                                                    <ul class="homes-list clearfix">
                                                        <li>
                                                            type
                                                            <span>workspace</span>
                                                        </li>
                                                        <li>
                                                            area
                                                            <span>200 square feet</span>
                                                        </li>
                                                        <li>
                                                            rooms
                                                            <span>8</span>
                                                        </li>

                                                    </ul>
                                                </div>

                                                <div class="footer">
                                                    <h3>view map</h3>
                                                    <div class="lp_deals_icon">
                                                        <ul>
                                                            <li><a href="#"><i class="flaticon-shower"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-fan"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-television"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-garage"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-policeman"></i></a></li>
                                                            <li><a href="#"><i class="flaticon-cctv"></i></a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">                           
                        </div>              
                </div>
            </div>
        </div>
    </div>
    <!--latest property wrapper end------------------------------------------------------------------------------------------------->
    <!--about us wrapper start------------------------------------------------------------------------------------>
    <div class="about_us_main_wrapper">
        <div class="about_left_wrapper">
            <div class="tb_work_txt_wrapper">
                <div class="abt_txt_box heading_white_wrapper">
                    <div class="tb_left_heading_wraper">

                        <h3>what do you know about us</h3>

                    </div>
                    <p>City office is a website where you can search, find, and in some cases, reserve shared work space rentals near you in many different countries all around the world. Coworking spaces list their shared office rental options on City Office and outline what features and amenities their space can offer.
Remote professionals and companies can then research and compare all of the different coworking spaces to find the one that will benefit their needs the most.
Coworking is not just about the sharing of infrastructure and cost, it is about belonging to a community, accessibility and sustainability. Coworking is the new way of working and sharing. Coworking spaces are designed to provide a productive and collaborative environment for their dynamic inhabitants, and created without corporate constraints on what is perceived to be an “office” environment offering flexible memberships to suit most needs.
</p>
                    <div class="abt_checkbox">                   
                    </div>
                    <div class="abt_btn">
                    </div>
                </div>

            </div>
        </div>
        <div class="about_right_wrapper"></div>
    </div>
    <!--about us wrapper end-->
    <!--services wrapper start-->
    <div class="service_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                    <div class="tb_work_txt_wrapper">
                        <div class="abt_txt_box heading_center">
                            <div class="tb_left_heading_wraper heading_center_line">

                                <h3>our services</h3>

                            </div>
                            <p></p>
                        </div>

                    </div>
                </div>
                <div class="vk_service_inner_setionn">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="ci_icon_wrapper_list ci_icon_wrapper_list_2">
                            <div class="ci_icon_img_effect">
                                <div class="ci_icon_img_list ci_icon_img_list_2">
                                    <i class="flaticon-funds"></i>
                                    <div class="btc_step_overlay"></div>
                                </div>
                            </div>
                            <div class="ci_icon_content_left ci_icon_content_left_2">
                                <h2><a href="#">services</a></h2>
                                <p>There’s just an energy of productivity in the air when you’re in a room full of driven people. It’s nearly impossible to slack off. You will get a lot done.</p>
                                

                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="ci_icon_wrapper_list ci_icon_wrapper_list_2">
                            <div class="ci_icon_img_effect">
                                <div class="ci_icon_img_list ci_icon_img_list_2">
                                    <i class="flaticon-tools"></i>
                                    <div class="btc_step_overlay"></div>
                                </div>
                            </div>
                            <div class="ci_icon_content_left ci_icon_content_left_2">
                                <h2><a href="#">fully customize</a></h2>
                                <p>There’s a sense of community. In places with regulars and 						          familiar faces, it’s amazing how far above and beyond the community will go to help one another succeed. </p>                            
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="ci_icon_wrapper_list ci_icon_wrapper_list_2">
                            <div class="ci_icon_img_effect">
                                <div class="ci_icon_img_list ci_icon_img_list_2">
                                    <i class="flaticon-settings"></i>
                                    <div class="btc_step_overlay"></div>
                                </div>
                            </div>
                            <div class="ci_icon_content_left ci_icon_content_left_2">
                                <h2><a href="#">market analysis</a></h2>
                                <p>Working from home is great, but it’s easy to fall into a rut, too. Being around other people is good for your spirits, it can keep you sharp and is great for creativity. .</p>                               
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--services wrapper end-->
    <!--newest property wrapper start-->
    <div class="newest_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12 col-sm-12 col-lg-offset-3">
                    <div class="tb_work_txt_wrapper">
                        <div class="abt_txt_box heading_center">
                            <div class="tb_left_heading_wraper heading_center_line">

                                <h3>newest offices</h3>

                            </div>
                            <p>When you have so many people with so much in common, it’s only a matter of time until you start to network and new opportunities start to flow organically.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 landscapes sale">
                    <div class="lp_cntnt lp_cntnt_2">
                        <div class="project-inner project-head">
                            <div class="homes">
                                <!-- homes img -->
                                <a href="#" class="homes-img bd_home">

                                    <div class="home-tag-price bd_price">
                                        $ 2500,00
                                    </div>
                                    <div class="homes-tag button alt sale">rent</div>

                                </a>

                            </div>
                            <div class="homes_img_wrapper">
                                <img src="images/bd_img_1.jpg" alt="home" class="img-responsive">
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <div class="homes_cntnt_box">
                                <div class="homes_cntnt_left">
                                    <img src="images/lp_img_2.png" alt="home" class="img-responsive">
                                </div>
                                <div class="homes_cntnt_right">
                                    <h3><a href="#">308/9 Degraves Street</a></h3>
                                    <p class="homes-address mb-3">

                                        New Mexico, United States

                                    </p>
                                </div>

                            </div>
                            <!-- homes hover -->

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 people rent">
                    <div class="lp_cntnt lp_cntnt_2">
                        <div class="project-inner project-head">

                            <div class="homes">
                                <!-- homes img -->
                                <a href="#" class="homes-img bd_home">

                                    <div class="home-tag-price bd_price">
                                        $ 2700,00
                                    </div>
                                    <div class="homes-tag button alt sale" id="sale_second_ss">sell</div>

                                </a>

                            </div>
                            <div class="homes_img_wrapper">
                                <img src="images/bd_img_2.jpg" alt="home" class="img-responsive">
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <div class="homes_cntnt_box">
                                <div class="homes_cntnt_left">
                                    <img src="images/lp_img_3.png" alt="home" class="img-responsive">
                                </div>
                                <div class="homes_cntnt_right">
                                    <h3><a href="#">308/955 st kilda road</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="#">
                                            new south wales,USA
                                        </a>
                                    </p>
                                </div>

                            </div>
                            <!-- homes hover -->

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                    <div class="lp_cntnt lp_cntnt_2">
                        <div class="project-inner project-head">

                            <div class="homes">
                                <!-- homes img -->
                                <a href="#" class="homes-img bd_home">

                                    <div class="home-tag-price bd_price">
                                        $ 2900,00
                                    </div>
                                    <div class="homes-tag button sale" id="sale_second_tt">sell</div>

                                </a>

                            </div>
                            <div class="homes_img_wrapper">
                                <img src="images/bd_img_3.jpg" alt="home" class="img-responsive">
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <div class="homes_cntnt_box">
                                <div class="homes_cntnt_left">
                                    <img src="images/lp_img_1.png" alt="home" class="img-responsive">
                                </div>
                                <div class="homes_cntnt_right">
                                    <h3><a href="#">101/9 oliva Street</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="#">
                                            victoria,austraila
                                        </a>
                                    </p>
                                </div>

                            </div>
                            <!-- homes hover -->

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 landscapes sale">
                    <div class="lp_cntnt lp_cntnt_2">
                        <div class="project-inner project-head">

                            <div class="homes">
                                <!-- homes img -->
                                <a href="#" class="homes-img bd_home">

                                    <div class="home-tag-price bd_price">
                                        $ 2500,00
                                    </div>
                                    <div class="homes-tag button alt sale" id="sale_second_rr">sell</div>

                                </a>

                            </div>
                            <div class="homes_img_wrapper">
                                <img src="images/bd_img_4.jpg" alt="home" class="img-responsive">
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <div class="homes_cntnt_box">
                                <div class="homes_cntnt_left">
                                    <img src="images/lp_img_2.png" alt="home" class="img-responsive">
                                </div>
                                <div class="homes_cntnt_right">
                                    <h3><a href="#">308/9 Degraves Street</a></h3>
                                    <p class="homes-address mb-3">

                                        New Mexico, United States

                                    </p>
                                </div>

                            </div>
                            <!-- homes hover -->

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 landscapes sale">
                    <div class="lp_cntnt lp_cntnt_2">
                        <div class="project-inner project-head">

                            <div class="homes">
                                <!-- homes img -->
                                <a href="#" class="homes-img bd_home">

                                    <div class="home-tag-price bd_price">
                                        $ 2500,00
                                    </div>
                                    <div class="homes-tag button alt sale">rent</div>

                                </a>

                            </div>
                            <div class="homes_img_wrapper">
                                <img src="images/bd_img_5.jpg" alt="home" class="img-responsive">
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <div class="homes_cntnt_box">
                                <div class="homes_cntnt_left">
                                    <img src="images/lp_img_3.png" alt="home" class="img-responsive">
                                </div>
                                <div class="homes_cntnt_right">
                                    <h3><a href="#">10/6 Coromandel Place</a></h3>
                                    <p class="homes-address mb-3">

                                        New Mexico, United States

                                    </p>
                                </div>

                            </div>
                            <!-- homes hover -->

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12 landscapes sale">
                    <div class="lp_cntnt lp_cntnt_2">
                        <div class="project-inner project-head">

                            <div class="homes">
                                <!-- homes img -->
                                <a href="#" class="homes-img bd_home">

                                    <div class="home-tag-price bd_price">
                                        $ 2500,00
                                    </div>
                                    <div class="homes-tag button alt sale">rent</div>

                                </a>

                            </div>
                            <div class="homes_img_wrapper">
                                <img src="images/bd_img_6.jpg" alt="home" class="img-responsive">
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <div class="homes_cntnt_box">
                                <div class="homes_cntnt_left">
                                    <img src="images/lp_img_1.png" alt="home" class="img-responsive">
                                </div>
                                <div class="homes_cntnt_right">
                                    <h3><a href="#">181 A'Beckett Street</a></h3>
                                    <p class="homes-address mb-3">

                                        New Mexico, United States

                                    </p>
                                </div>

                            </div>
                            <!-- homes hover -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>