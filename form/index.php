<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>SmitPRO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    <script src="assets/js/modernizr.min.js"></script>
</head>
<body>
<!-- Begin page -->
<div id="wrapper">
    <!--Content-->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">
                <!-- end row -->
                <!-- Basic Form Wizard -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">SmitPRO</h4>
                            <p class="text-muted m-b-30 font-13">
                                Gebruik dit formulier om een domeinnaam aan te vragen.
                            </p>
                            <form id="wizard-callbacks">

                                <fieldset title="1">
                                    <legend>Bedrijfsnaam</legend>
                                    <div class="row m-t-20">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="firstname2">Vul hier uw bedrijfsnaam in.</label>
                                                <input type="text" class="form-control" id="firstname2" placeholder="">
                                                <div id="results">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset title="2">
                                    <legend>Persoonsgegevens</legend>
                                    <div class="row m-t-20">
                                        <div class="col-sm-11">
                                            <div class="form-group">
                                            <h2>Persoonsgegevens</h2>
                                                <label>Voorvoegsel</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-account"></i></span>
                                                    <select id="voorvoegsel" name="voorvoegsel">
                                                    <option value="Dhr">Dhr.</option>
                                                    <option value="Mvr">Mvr.</option>
                                                    </select>
                                                </div>
                                            </div>
                                           <div class="form-group">
                                                <label>Voornaam</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-account"></i></span>
                                                    <input type="text" class="form-control"
                                                           placeholder="Voornaam">
                                                </div>
                                            </div>
                                        
                                        </div>
                                        <div class="col-sm-11">
                                            <div class="form-group">
                                                <label>Tussenvoegsel</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-account"></i></span>
                                                    <input type="text" class="form-control"
                                                           placeholder="Tussenvoegsel">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Achternaam</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-account"></i></span>
                                                    <input type="text" class="form-control"
                                                           placeholder="Achternaam">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <h2>Contactgegevens</h2>
                                                <label>Telefoon</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-phone"></i></span>
                                                    <input type="text" class="form-control"
                                                           placeholder="Telefoon">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Mobiel</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-cellphone-iphone"></i></span>
                                                    <input type="text" class="form-control"
                                                           placeholder="Mobiel">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-email"></i></span>
                                                    <input type="email" class="form-control"
                                                           placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <h2>Adresgegevens</h2>
                                                <label>Postcode</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-home"></i></span>
                                                    <input type="text" class="form-control"
                                                           placeholder="Postcode">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Huisnummer</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-home"></i></span>
                                                    <input type="text" class="form-control"
                                                           placeholder="Huisnumer">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Toev.</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-home"></i></span>
                                                    <input type="text" class="form-control"
                                                           placeholder="Toevoeging">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Straatnaam</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-home"></i></span>
                                                    <input type="text" class="form-control"
                                                           placeholder="Straatnaam">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Plaatsnaam</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-home"></i></span>
                                                    <input type="text" class="form-control"
                                                           placeholder="Plaatsnaam">
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                                class="mdi mdi-home"></i></span>
                                                    <select id="Landid" name="Land">
                                                    <option value="NL">Nederland</option>
                                                    <option value="DE">Duitsland</option>
                                                    <option value="BE">Belgie</option>
                                                    </select>
                                                </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset title="3">
                                    <legend>Email</legend>
                                    <div class="row m-t-20">

                                </fieldset>

                                <button type="submit" class="btn btn-primary stepy-finish">Submit</button>

                            </form>


                        </div>

                    </div>

                </div>

                <!-- End row -->


            </div> <!-- container -->


        </div> <!-- content -->


        <footer class="footer text-right">

            2020 © SmitPRO - SmitPRO.nl

        </footer>


    </div>


    <!-- ============================================================== -->

    <!-- End Right content here -->

    <!-- ============================================================== -->


</div>

<!-- END wrapper -->


<!-- jQuery  -->

<script src="assets/js/jquery.min.js"></script>

<script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/metisMenu.min.js"></script>

<script src="assets/js/waves.js"></script>

<script src="assets/js/jquery.slimscroll.js"></script>


<!--Form Wizard-->

<script src="plugins/jquery.stepy/jquery.stepy.min.js" type="text/javascript"></script>

<!--wizard initialization-->

<script src="assets/pages/jquery.wizard-init.js" type="text/javascript"></script>


<!-- App js -->

<script src="assets/js/jquery.core.js"></script>

<script src="assets/js/jquery.app.js"></script>


</body>

</html>