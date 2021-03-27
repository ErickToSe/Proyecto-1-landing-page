<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/mainStyles.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <title>ReWild</title>
    </head>
    <header>
        <div class="container row">
            <div class="col-xs-4 col-sm-3 col-md-3 col-lg-2">
                <image src="https://cdn.iconscout.com/icon/free/png-512/online-library-12-1130552.png" alt="Logo image: A book" class="logo"/>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                <h1>ReWild</h1>
            </div>
        </div>
    </header>
    <body>
        <div class="container">
            <section class="main row">
                <article class="col-xs-12 col-sm-12 col-md-9 col-lg-8">
                    <br>
                    <p id="titleList">The E-Book Library</p>
                    <br>
                    <ul class="features">
                        <li><span class="glyphicon glyphicon-check"></span>Up to 10,000 books</li>
                        <li><span class="glyphicon glyphicon-check"></span>Download your favorite books for offline reading</li>
                        <li><span class="glyphicon glyphicon-check"></span>Books of around the world</li>
                        <li><span class="glyphicon glyphicon-check"></span>All stories you love in one place</li>
                        <li><span class="glyphicon glyphicon-check"></span>Easy to use</li>
                        <li><span class="glyphicon glyphicon-check"></span>Pleasant Interface</li>
                        <li><span class="glyphicon glyphicon-check"></span>Available since $10 per month</li>
                    </ul>
                    <br>
                </article>

                <br>
                <form class="col-xs-12 col-sm-12 col-md-3 col-lg-4 form-horizontal" action="index.php" method="POST">
                    <br>
                    <section class="has-feedback" name="nameInput">
                        <i class="glyphicon glyphicon-user form-control-feedback"></i>
                        <input class="form-control data" type="text" name="name" id="name" placeholder="UserName">
                    </section>
                    <section class="has-feedback" name="mailInput">
                        <i class="glyphicon glyphicon-envelope form-control-feedback"></i>
                        <input class="form-control data" type="email" name="mail" id="mail" placeholder="example1999@some.com">
                    </section>
                    <section class="has-feedback" name="passInput">
                        <i class="glyphicon glyphicon-lock form-control-feedback"></i>
                        <input class="form-control data" type="password" name="pass" id="pass" placeholder="Password">
                    </section>
                    <section class="has-feedback" name="passConfInput">
                        <i class="glyphicon glyphicon-lock form-control-feedback"></i>
                        <input class="form-control data" type="password" name="passConfirm" id="passConfirm" placeholder="Confirm Password">
                    </section>
                    <br>
                    <section class="submission">
                        <input type="submit" value="Register Now!" class="submission btn btn-lg btn-dark">
                    </section>
                </form>
              
            </section>
        </div>
    </body>
    <footer>
        <div class="container">
            <div class="row">
                <p class="col-xs-12 col-sm-12 col-md-12 col-lg-12">Questions? Call xxx-xxx-xxxx</p>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <p class="info">FAQ</p>
                    <p class="info">Terms of Use</p>
                    <p class="info">Legal Notices</p>
                    <p class="info">Corporate Information</p>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <p class="info">Help Center</p>
                    <p class="info">Privacy</p>
                    <p class="info">Contact Us</p>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4"> 
                    <p class="info">Account</p>
                    <p class="info">Jobs</p>
                    <p class="info">Cookie Preferences</p>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright
        </div>
    </footer>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
</html>