<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/mainstyle.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
        <title>ReWild</title>
    </head>
    <header>
        <div class="container">
            <image src="https://i.pinimg.com/originals/38/57/a5/3857a53a7e4de401993f84b9203bf680.png" alt="Logo image." class="logo"/>
        </div>
    </header>
    <body>
        <div class="container">
            <section class="main row">
                <article class="col-xs-12 col-sm-6 col-md-5 col-lg-4">
                    <h1>ReWild</h1>
                    <p>The E-Book Library</p>
                </article>

                <form class="col-xs-12 col-sm-6 col-md-7 col-lg-8 form-horizontal" action="index.php" method="POST">
                    <section class="has-feedback" name="nameInput">
                        <i class="glyphicon glyphicon-user form-control-feedback"></i>
                        <input class="form-control" type="text" name="name" id="name" placeholder="UserName">
                    </section>
                    <section class="has-feedback" name="mailInput">
                        <i class="glyphicon glyphicon-envelope form-control-feedback"></i>
                        <input class="form-control" type="email" name="mail" id="mail" placeholder="example1999@some.com">
                    </section>
                    <section class="has-feedback" name="passInput">
                        <i class="glyphicon glyphicon-lock form-control-feedback"></i>
                        <input class="form-control" type="password" name="pass" id="pass" placeholder="Password">
                    </section>
                    <section class="has-feedback" name="passConfInput">
                        <i class="glyphicon glyphicon-lock form-control-feedback"></i>
                        <input class="form-control" type="password" name="passConfirm" id="passConfirm" placeholder="Confirm Password">
                    </section>
                </form>
              
            </section>
        </div>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.js"></script>
    </body>
    <footer>
    </footer>
</html>