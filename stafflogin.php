<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <!--favicon-->
    <link rel="icon" type="image/x-icon" href="image/favicon.ico">
    <!-- bootstrap Library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- External css -->
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<header>
        <div class="header-bar">
            <div class="branding">
                <a class href="">
                    <img class="preload-me" src="https://amcas.in/wp-content/uploads/2019/10/logo.png" width="343px"
                        height="80px" sizes="450px" alt="AMCAS">
                </a>
                <div class="mini-widgets"></div>
                <div class="top-right">
                    <div class="helpline topaction">
                        <span>Admission Helpline</span>
                        <a href="tel:+9176316656">+91 91763 16656</a>
                    </div>
                    <a href="tel:+9176316656">
                        <div class="yearslogo topaction"><img
                                src="https://amcas.in/wp-content/themes/dt-the7/images/yearslogo.png"></div>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class="form_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
    
                    <form class="form_horizontal" action="staffloginprocess.php" method="post">
                        <div class="form_icon"><i class="fa fa-user-circle"></i></div>
                        <h3 class="title">login form</h3>
                        <div class="form-group">
                            <span class="input-icon"><i class="fa fa-user"></i></span>
                            <input class="form-control" type="username" name="username" placeholder="enter value">
                         </div>
                         <div class="form-group">
                            <span class="input-icon"><i class="fa fa-lock"></i></span>
                            <input class="form-control" type="password" name="password" placeholder="password">
                         </div>
                         
                         <button class="btn signin" onclick="myFunction()">log in</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
</html>
