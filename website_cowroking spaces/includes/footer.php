<div class="dreams-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
                <div class="dreams-title">
                    <h2>
                        do you have any questions , contact us?</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-xs-12 col-sm-12">
                <div class="abt_btn enquiry_btn">

                    <ul>

                        <li>
                            <a href="#">
                                contact us
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- enquiry wrapper start -->
<!--footer wrapper start-->
<div class="footer_wrapper">
    <div class="section3_wrapper_second">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-12 col-sm-6">
                    <div class="wrapper_second_contact">
                        <h4>get in touch</h4>
                        <ul>
                            
                            <li><i class="fa fa-phone"></i>
                                <p>+91 9996485127</p>
                            
                            <li><i class="fa fa-envelope"></i><a href="#">sourabhmishra1262@gmail.com</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section3_bottom_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="foter_right">
                    <div class="section3_copyright">
                        <a href="#"> city office </a>
                        
                    </div>
                    <div class="top_wrapper">
                        <a href="javascript:" id="return-to-top"><i class="fa fa-arrow-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="close_wrapper">
</div>
<!-- section-3 end -->

<!--footer wrapper end-->


<!--main js files-->
<script src="js/jquery_min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jqu_menu.js"></script>
<script src="js/jqu_slickmenu.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="venobox/js/venobox.min.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/testimonial.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/camera.min.js"></script>
<script src="js/Chart.bundle.js"></script>
<script src="js/datepicker.js"></script>
<script src="js/custom.js"></script>
<!--js code-->
<script>
$("#range-price").slider({
    range: true,
    min: 0,
    max: 9000,
    values: [100, 9000],
    slide: function(event, ui) {
        $("#price").val("sq" + ui.values[0] + " - " + " sq" + ui.values[1]);
    }
});

$("#price").val("sq" + $("#range-price").slider("values", 0) +
    " - " + " sq" + $("#range-price").slider("values", 1));
</script>
<script>
$("#range-price_2").slider({
    range: true,
    min: 0,
    max: 2000,
    values: [100, 2000],
    slide: function(event, ui) {
        $("#price_2").val("$" + ui.values[0] + " - " + " $" + ui.values[1]);
    }
});

$("#price_2").val("$" + $("#range-price_2").slider("values", 0) +
    " - " + " $" + $("#range-price_2").slider("values", 1));
</script>
<script>
$("#range-price_5").slider({
    range: true,
    min: 0,
    max: 9000,
    values: [100, 9000],
    slide: function(event, ui) {
        $("#price_5").val("sq" + ui.values[0] + " - " + " sq" + ui.values[1]);
    }
});

$("#price_5").val("sq" + $("#range-price_5").slider("values", 0) +
    " - " + " sq" + $("#range-price_5").slider("values", 1));
</script>
<script>
$("#range-price_6").slider({
    range: true,
    min: 0,
    max: 2000,
    values: [100, 2000],
    slide: function(event, ui) {
        $("#price_6").val("$" + ui.values[0] + " - " + " $" + ui.values[1]);
    }
});

$("#price_6").val("$" + $("#range-price_6").slider("values", 0) +
    " - " + " $" + $("#range-price_6").slider("values", 1));
</script>
<script>
var ctx = document.getElementById("logloss").getContext("2d");
// Global Options:
Chart.defaults.global.defaultFontColor = 'darkgrey';
Chart.defaults.global.defaultFontSize = 12;

// Data with datasets options

//'indigo purple crimson tomato khaki teal'
var data = {
    labels: [112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129],
    datasets: [

        {
            steppedLine: false,
            label: "elizabeth",
            fill: true,
            // borderColor: 'rgba(139,155,90,1)',
            borderColor: "#b7b7b7",
            borderWidth: 1,
            pointStyle: 'circle',
            pointRadius: 4,
            pointBorderColor: '#b7b7b7',
            pointBackgroundColor: '#b7b7b7',
            data: [0.692317, 0.693087, 0.692808, 0.693024, 0.69354, 0.692314, 0.693095, 0.692827, 0.693513,
                0.692313, 0.694447, 0.69375, 0.695148, 0.695035, 0.693672, 0.694544, 0.693816, 0.695199,
                0.6926
            ]
        }, {
            steppedLine: false,
            label: "ken",
            fill: true,
            // borderColor: 'rgba(139,155,90,1)',
            borderColor: "#29abff",
            borderWidth: 1,
            pointStyle: 'circle',
            pointRadius: 4,
            pointBorderColor: '#29abff',
            pointBackgroundColor: '#29abff',
            data: [0.69503, 0.694704, 0.693785, 0.694081, 0.693271, 0.693703, 0.693931, 0.691942, 0.692283,
                0.69303, 0.693626, 0.692787, 0.693439, 0.69341, 0.693436, 0.693006, 0.691057, 0.690571
            ]
        }
    ]
};

var chart = new Chart(ctx, {
    type: 'line',
    data: data,

    options: {
        title: {
            fontSize: 20,
            display: false,
            text: ''
        },
        elements: {
            line: {
                tension: 0.000001
            }
        },
        legend: {
            display: false
        },
        //   tooltips: {
        //     callbacks: {
        //        label: function(tooltipItem) {
        //               return tooltipItem.xLabel;
        //        }
        //     }
        // },
        annotation: {
            annotations: [{
                type: 'line',
                mode: 'horizontal',
                scaleID: 'y-axis-0',
                value: 0.693,
                borderColor: 'rgba(255, 255, 255, 1)',
                borderWidth: 1
            }]
        }
    }
})
</script>
</body>

</html>