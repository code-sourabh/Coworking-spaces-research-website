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
                            <h1><span>city office add listing</span></h1>
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
                            <li>add listing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page_title_section end -->
    <!--add listing section start-->
    <div class="add_listing_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="submit-page">
                        <!-- Section -->
                        <div class="tb_left_heading_wraper add_listing_head">

                            <h3>basic information</h3>

                        </div>
                        <div class="submit-section checkout-form">

                            <!-- Title -->

                            <!-- Row -->
                            <div class="row with-forms">
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">property name</div>
                                    <input type="text" name="field-name" value="" placeholder="">
                                </div>

                                <!-- Price -->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">price($)</div>
                                    <input type="text" name="field-name" value="" placeholder="please enter price..">
                                </div>

                                <!-- Type -->
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <div class="field-label">type</div>

                                    <select>

                                        <option>appartment</option>
                                        <option>house</option>
                                        <option>commercial</option>
                                        <option>garage</option>
                                    </select>
                                </div>

                            </div>
                            <!-- Row / End -->

                            <!-- Row -->
                            <div class="row with-forms">
                        </div>
                        <!-- Section / End -->

                        <!-- Section -->
                        <div class="tb_left_heading_wraper add_listing_head">

                            <h3>gallery</h3>

                        </div>
                        <div class="submit-section">
                            <div class="galerypost">
                                <div class="custom-input">
                                    <span><i class="fa fa-upload"></i> &nbsp;Upload photo</span>
                                    <input type="file" name="resume" id="resume" />
                                </div>
                            </div>
                        </div>
                        <!-- Section / End -->

                        <!-- Section -->
                        <div class="tb_left_heading_wraper add_listing_head">

                            <h3>location</h3>

                        </div>
                        <div class="submit-section checkout-form">

                            <!-- Row -->
                            <div class="row with-forms">

                                <!-- Address -->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">address</div>
                                    <input type="text" name="field-name" value="" placeholder="enter address..">
                                </div>

                                <!-- City -->

                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">city</div>
                                    <input type="text" name="field-name" value="" placeholder="enter city..">
                                </div>

                                <!-- City -->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">state</div>
                                    <input type="text" name="field-name" value="" placeholder="enter state..">
                                </div>

                                <!-- Zip-Code -->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">zip-code</div>
                                    <input type="text" name="field-name" value="" placeholder="enter zipcode..">
                                </div>

                            </div>
                            <!-- Row / End -->

                        </div>

                        <div class="tb_left_heading_wraper add_listing_head">

                            <h3>contact details</h3>

                        </div>
                        <div class="submit-section checkout-form">

                            <!-- Row -->
                            <div class="row with-forms">

                                <!-- Name -->
                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    <div class="field-label">name</div>
                                    <input type="text" name="field-name" value="" placeholder=" your name..">
                                </div>

                                <!-- Email -->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">email</div>
                                    <input type="text" name="field-name" value="" placeholder=" your email..">
                                </div>

                                <!-- Name -->
                                <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                    <div class="field-label">phone</div>
                                    <input type="text" name="field-name" value="" placeholder=" your no..">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="shop_btn_wrapper chackout_login_btn">
                                        <ul>
                                            <li><a href="#">add property</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Row / End -->

                        </div>
                        <!-- Section / End -->

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--add listing section end-->
    <!-- enquiry wrapper start -->
    <?php include 'includes/footer.php'; ?>