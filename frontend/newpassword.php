<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Password | HumanATM</title>
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
                            <input type="password" name="newpassword" id="" class="signup-data signup-password" placeholder="Enter a new password">
                            <p class='signup-eye' id="newpassword-eye"><i class="glyphicon glyphicon-eye-close"></i></p>
                            <input type="password" name="newpassword1" id="" class= "signup-data signup-password" placeholder="Confirm password">
                            <input type="submit" class="signup-data" id="newpassword-submit" value="SAVE">
                    </form>      
                </div>               
                
            </div>
            </div>
        </section> 
    
    <script src="js/togglepassword.js"></script>
    
</body>
</html>
