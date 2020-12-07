<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Alex NGOMBOL,Steve NGANSO">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="MMAC"/>
        <meta name="keywords" content="MMAC"/>

        <meta name="robots" content="noindex">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="base-url" content="https://etp-admin.moyo-industry.com/">
        <meta name="locale" content="fr">

        <title>Admin MMAC</title>

        <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
<!--        <link rel="manifest" href="img/favicon/manifest.json">-->
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <meta name="apple-mobile-web-app-title" content="Alex NGOMBOL,Steve NGANSO">
        <meta name="application-name" content="Alex NGOMBOL,Steve NGANSO">

        <meta property="og:title" content="Alex NGOMBOL,Steve NGANSO" />
        <meta property="og:type" content="website" />
        <meta property="og:locale" content="fr"/>
        <meta property="og:ttl" content="0" />

        <meta property="og:description" content="MMAC">
        <meta property="og:url" content="https://etp-admin.moyo-industry.com/" />
        <meta property="og:image" content="img/logo.png" />
        <meta property="twitter:image" content="img/logo.png" />

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    </head>

    <body class="snow-bg">

        <canvas id="snow"></canvas>

        <div class="page-loader"><div class="loader-img"></div></div>


        <!-- Main Content Area -->
        <div class="main">
            <!-- Header area -->
            <header class="page-header">
                <!-- Container -->
                <div class="container-fluid">
                    <div class="row">

                        <!-- Left Section -->
                        <div class="col-md-5 col-sm-12 mt-30">

                            <!-- Logo -->
                            <div class="page-logo col-sm-12">
                                <img src="images/logo.png" alt="logo" class="logo">
                            </div>
                            <!-- /Logo -->

                            <!-- Title and Short Description -->
                            <div class="countdown-content countdown-text col-sm-12">
                                <!-- Title -->
                                <h1>We are <span>coming</span> soon...</h1>

                                <!-- Short Description -->
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                            </div>
                            <!-- /Title and Short Description -->

                        </div>
                        <!-- /Left Section -->

                        <!-- Right Section -->
                        <div class="countdown col-md-7 col-sm-12">
                            <!-- Countdown Timer -->
                            <div class="time">
                                <div id="count">
                                    <div id="dayTimer">
                                        <span class="days"></span>
                                        <div class="count-title" id="day_title"></div>
                                    </div>
                                    <div id="hourTimer">
                                        <span class="hours"></span>
                                        <div class="count-title" id="hour_title"></div>
                                    </div>
                                    <div id="minuteTimer">
                                        <span class="minutes"></span>
                                        <div class="count-title" id="minute_title"></div>
                                    </div>
                                    <div id="secondTimer">
                                        <span class="seconds"></span>
                                        <div class="count-title" id="second_title"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Countdown Timer -->

                            <!-- More Info & Contact Buttons -->
                            <div class="buttons col-sm-12">
                                <button class="custom-btn toggle-more" type="button" data-toggle="modal" data-target="#moreModal">More information</button>
                                <button class="custom-btn" type="button" data-toggle="modal" data-target="#contactModal">Contact</button>
                            </div>
                            <!-- /More Info & Contact Buttons -->

                            <!-- Social Media Links -->
                            <div class="social-media col-sm-12">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-google-plus"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                            <!-- /Social Media Links -->
                        </div>
                        <!-- /Right Section -->

                    </div>
                </div>
                <!-- /Container -->
            </header>
            <!-- /Header area -->
        </div>
        <!-- /Main Content Area -->

        <!-- More Information Modal area -->
        <div id="moreModal" class="modal fade" data-backdrop="static">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="container-fluid">
                        <div class="row">

                            <!-- Close Button -->
                            <button type="button" class="close toggle-more" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="far fa-window-close"></i></span>
                            </button>
                            <!-- /Close Button -->

                            <!-- Header and Brand Description -->
                            <div class="modal-top col-sm-12">
                                <h2>More About Brand</h2>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</p>
                            </div>
                            <!-- /Header and Brand Description -->

                        </div>

                        <!-- Phone, Email and Address Details -->
                        <div class="row">

                            <!-- Phone and Mobile -->
                            <div class="info-item col-sm-4">
                                <h3><i class="fas fa-phone"></i>Phone</h3>
                                <p>Phone: (000) 123 4567
                                    <br>
                                    Mobile: (000) 123 4567
                                </p>
                            </div>
                            <!-- /Phone and Mobile -->

                            <!-- Email -->
                            <div class="info-item col-sm-4">
                                <h3><i class="fas fa-envelope"></i>Email</h3>
                                <p>Domain@example.com
                                    <br>
                                    Domain@example.com
                                </p>
                            </div>
                            <!-- /Email -->

                            <!-- Address -->
                            <div class="info-item col-sm-4">
                                <h3><i class="fas fa-map-marker-alt"></i>Address</h3>
                                <p>654 Your Street, Your City, DB 12345
                                </p>
                            </div>
                            <!-- /Address -->

                        </div>
                        <!-- /Phone, Email and Address Details -->

                    </div>
                </div>
            </div>
        </div>
        <!-- /More Information Modal Area -->

        <!-- Contact Modal Area -->
        <div id="contactModal" class="modal fade">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="container-fluid">

                        <!-- Model Header + Close Button -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true"><i class="far fa-window-close"></i></span>
                            </button>
                            <h5 class="modal-title">Contact Us</h5>
                        </div>
                        <!-- /Model Header + Close Button -->

                        <!-- Contact Form -->
                        <form id="contactform" action="contact.php" method="post">
                            <div class="row">

                                <!-- Name Input Field -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name*" required />
                                    </div>
                                </div>
                                <!-- /Name Input Field -->

                                <!-- Email Input Field -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email*" required />
                                    </div>
                                </div>
                                <!-- /Email Input Field -->

                                <!-- Message Textarea Box -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" id="message" placeholder="Message*" rows="5" required ></textarea>
                                    </div>
                                    <div class="btn-contain">
                                        <button type="submit" class="contact-btn">Send message</button>
                                    </div>
                                </div>
                                <!-- /Message Textarea Box -->

                                <!-- Error Message After Form Submit -->
                                <div class="col-md-12">
                                    <p class="success" style="display:none;">Thank you! We will be in touch with you soon.</p>
                                    <p class="error" style="display:none;">Oops! Something went wrong, please try again.</p>
                                </div>
                                <!-- /Error Message After Form Submit -->

                            </div>
                        </form>
                        <!-- /Contact Form -->

                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="js/fontawesome-all.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/snow.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
