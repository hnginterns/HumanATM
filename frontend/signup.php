<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up|HumanATM</title>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    </script>
    <![endif]-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Custom css styling -->
    <link rel="stylesheet" href="css/main.css" type="text/css">
</head>

<body class='signup-body'>
        <section>
                <?php include('header.php') ?>
        </section>
    <section class='container'>
        <div class="signup-container">
            <div class = "signup-content">
                <div class="signup-header">
                    <div class="signup-logo">                        
                        <img src="http://res.cloudinary.com/nedy123/image/upload/v1509134072/Human_ATM_logo_bzqjkz.png" alt="HumanATMlogo">
                    </div>
                <div class="signup-h1">
                    <p id='signup-head'>HumanATM</p>
                    <p id='signup-p'>FOR THE NEXT BILLION USERS</p>
                </div>                
            </div>
            <div class='signup-form'>
                <form action="" class="">
                    <input type="text" name="signup-fullName" class="signup-data"id="" placeholder="Full Name">
                    <input type="text" name="signup-walletID" class="signup-data"id="" placeholder="Wallet ID">
                    <input type="email" name="signup-email"  class="signup-data"id="" placeholder="Email Address">
                    <input type="password" name="signup-password" id="" class=
                    "signup-data signup-password" placeholder="Password">
                    <p class='signup-eye'><i class="glyphicon glyphicon-eye-close"></i></p>
                    <input type="password" name="signup-password" id="signup-password1" class=
                    "signup-data signup-password" placeholder="Confirm password">
                    <input type="submit" class="signup-data" id="signup-submit"value="CREATE ACCOUNT">
                    <p id='signup-signin'><a href="login.php" class="" ><span id="login-span1">Have an account?</span> 
                        <span id="login-span">Sign In</span></a></p>
                </form>
            </div>               
            
        </div>
        </div>
    </section>
    <section>
    </section>
    
    <script src="js/togglepassword.js">       
    </script>
    
</body>
</html>
