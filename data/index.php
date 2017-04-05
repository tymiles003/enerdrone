<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Enerdrone</title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="assets/vendor/morris/morris.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="assets/vendor/modernizr/modernizr.js"></script>

    <script type="text/javascript">

        var values = [];

        function loaddata()
        {
                $.ajax({
                    type: 'post',
                    url: 'displayData.php',
                    data: {
                        data:"data",
                    },
                    success: function (response) {
                        // We get the element having id of display_info and put the response inside it
                        $('#dataContainer').html(response);
                    }
                });

            $.ajax({
                type: 'post',
                url: 'displayGraph.php',
                data: {
                    data:"data",
                },
                success: function (response) {
                    // We get the element having id of display_info and put the response inside it
                    $('#graphContainer').html(response);
                }
            });

            $.ajax({
                type: 'post',
                url: 'displayTable.php',
                data: {
                    data:"data",
                },
                success: function (response) {
                    // We get the element having id of display_info and put the response inside it
                    $('#tableContainer').html(response);
                }
            });
        }
    </script>
    </head>
    <body>
        <section class="body">
            <div class="inner-wrapper">
                <section role="main" class="content-body">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xl-12">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-6 col-xl-3">
                            <section class="panel">
                                <div class="panel-body bg-tertiary">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon" >
                                            <div class="summary-icon"  style="padding-top: 5px;">
                                                <i class="fa fa-flag-checkered" style=" line-height: 2;"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h5 class="title">Successful landing</h5>
                                                <div class="info">
                                                    <strong class="amount">Drone detected</strong>
                                                </div>
                                            </div>
                                            <div class="summary-footer">
                                                <p class="text-uppercase">(actual state)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="panel">
                                <header class="panel-heading">
                                    <h2 class="panel-title">Current chart</h2>
                                    <p class="panel-subtitle">Actual current waveform</p>
                                </header>
                                <div class="panel-body">
                                    <div class="chart chart-md" data-sales-rel="Enerdrone" id="flotDashSales1" class="chart-active"></div>
                                    <div id="graphContainer"><script>
                                            var flotDashSales1Data = [{
                                                data: [
                                                    ["14:15", 0.5],
                                                    ["14:16", 1.34],
                                                    ["14:17", 2.32],
                                                    ["14:18", 3.49],
                                                    ["14:19", 3.79],
                                                    ["14:20", 3.68],
                                                    ["14:21", 3.9],
                                                    ["14:22", 3.85]
                                                ],
                                                color: "#2BAAB1"
                                            }]; </script></div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-12 col-lg-6 col-xl-3" id="dataContainer">
                            <section class="panel">
                                <div class="panel-body bg-primary">
                                    <div class="widget-summary">
                                        <div class="widget-summary-col widget-summary-col-icon" >
                                            <div class="summary-icon"  style="padding-top: 5px;">
                                                <i class="fa fa-cloud-download" style=" line-height: 2;"></i>
                                            </div>
                                        </div>
                                        <div class="widget-summary-col">
                                            <div class="summary">
                                                <h5 class="title">Loading data...</h5>
                                                <div class="info">
                                                    <strong class="amount">Please wait</strong>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-12 col-lg-6">

                        </div>
                        <div class="col-md-12" id="tableContainer"></div>
                    </div>
                </section>
            </div>
        </section>

        <script type="text/javascript">
                setInterval(loaddata, 1000);
        </script>

        <!-- Vendor -->
        <script src="assets/vendor/jquery/jquery.js"></script>
        <script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
        <script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
        <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
        <script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

        <!-- Specific Page Vendor -->
        <script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
        <script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
        <script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
        <script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
        <script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
        <script src="assets/vendor/flot/jquery.flot.js"></script>
        <script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
        <script src="assets/vendor/flot/jquery.flot.pie.js"></script>
        <script src="assets/vendor/flot/jquery.flot.categories.js"></script>
        <script src="assets/vendor/flot/jquery.flot.resize.js"></script>
        <script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
        <script src="assets/vendor/raphael/raphael.js"></script>
        <script src="assets/vendor/morris/morris.js"></script>
        <script src="assets/vendor/gauge/gauge.js"></script>
        <script src="assets/vendor/snap-svg/snap.svg.js"></script>
        <script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
        <script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
        <script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
        <script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
        <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
        <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
        <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
        <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
        <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
        <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="assets/javascripts/theme.js"></script>

        <!-- Theme Custom -->
        <script src="assets/javascripts/theme.custom.js"></script>

        <!-- Theme Initialization Files -->
        <script src="assets/javascripts/theme.init.js"></script>

        <!-- Examples -->
        <script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
            <script src="assets/javascripts/ui-elements/examples.charts.js"></script>
            <script src="assets/javascripts/ui-elements/examples.widgets.js"></script>
    </body>
</html>
