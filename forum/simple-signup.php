<!doctype html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Responsive HTML5 Template">
    <meta name="author" content="author.com">
    <title>Responsive HTML5 Template</title>

    <!-- STYLESHEET -->
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- icon -->
    <link rel="stylesheet" href="fonts/icons/main/mainfont/style.css">
    <link rel="stylesheet" href="fonts/icons/font-awesome/css/font-awesome.min.css">

    <!-- Vendor -->
    <link rel="stylesheet" href="vendor/bootstrap/v3/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/v4/bootstrap-grid.css">
    <!-- Custom -->
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="signup">
        <!-- HEADER -->
        <header class="signup__header">
            <div class="container">
                <div class="signup__header-content">
                    <p><a href="#">Already have an account?</a></p>
                    <a href="#" class="btn">Sign In</a>
                </div>
            </div>
        </header>

        <!-- MAIN -->
        <main class="signup__main">
            <img class="signup__bg" src="images/signup-bg.png" alt="bg">

            <div class="container">
                <div class="signup__container">
                    <div class="signup__logo">
                        <a href="#"><img src="fonts/icons/main/Logo_Forum.svg" alt="logo">Unity</a>
                    </div>

                    <div class="signup__head">
                        <h3>Create a New Unity Account</h3>
                        <p>By singin up you can start posting, replaying to topics, earn badges, favorite, vote topics
                            and many more.</p>
                    </div>
                    <div class="signup__form">
                        <div class="row" data-visible="desktop">
                            <div class="col-md-6">
                                <div class="signup__section">
                                    <label class="signup__label" for="first-name">First Name</label>
                                    <input type="text" class="form-control" id="first-name" value="Jane">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="signup__section">
                                    <label class="signup__label" for="last-name">Last Name</label>
                                    <input type="text" class="form-control" id="last-name" value="Doe">
                                </div>
                            </div>
                        </div>
                        <div class="signup__section">
                            <label class="signup__label" for="username">Username</label>
                            <input type="text" class="form-control" id="username" value="Janeunity9">
                        </div>
                        <div class="signup__section">
                            <label class="signup__label" for="email">Emain Address</label>
                            <input type="text" class="form-control" id="email" value="Jane326@gmail.com">
                        </div>
                        <div class="signup__section">
                            <label class="signup__label" for="password">Password</label>
                            <div class="message-input">
                                <input type="password" class="form-control" id="password" value="*********">
                                <span class="message-input__strong">strong</span>
                            </div>
                        </div>
                        <div class="signup__checkbox">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="signup__box">
                                        <label class="custom-checkbox">
                                            <input type="checkbox" checked="checked">
                                            <i></i>
                                        </label>
                                        <span>I agree to the Terms & Conditions.</span>
                                    </label>
                                </div>
                                <div class="col-md-6" data-visible="desktop">
                                    <label class="signup__box">
                                        <label class="custom-checkbox">
                                            <input type="checkbox">
                                            <i></i>
                                        </label>
                                        <span>Subscribe to newsletter</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="signup__btn-create btn btn--type-02">Create New Account</a>
                    </div>
                </div>
            </div>
        </main>

        <!-- FOOTER -->
        <footer class="signup__footer">
            <div class="container">
                <div class="signup__footer-content">
                    <ul class="signup__footer-menu">
                        <li><a href="#">Teams</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Send Feedback</a></li>
                    </ul>
                    <ul class="signup__footer-social">
                        <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-cloud" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

    <!-- JAVA SCRIPT -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/velocity/velocity.min.js"></script>
    <script src="js/app.js"></script>

</body>

</html>