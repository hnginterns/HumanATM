<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Withdraw | HumanATM</title>
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
    <body class="signup-body">
        <section>
            <?php include('header.php') ?>
        </section>
        <section class="container">
            <div class="profile-container">
                    <div class="withdraw-content">
                            <div class="profile-request">
                                <p>MAKE A REQUEST</p>
                            </div>
                        <div class="profile-supermenu">
                            <div class ="profile-menu" id="">
                                <button type="button">PROFILE</button>
                                <button type="button" class="active">WITHDRAW</button>
                                <button type="button">PAYMENT</button>
                            </div>
                        </div>
                            
                        <div class="withdraw-info">
                            <form action="" class="profile-innerform">
                                <div class="form-group">
                                    <label for="phone number">PHONE NUMBER</label>
                                    <input type="text" name="payment-number" class="withdraw-data" id="" placeholder="08022343254">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="amount">AMOUNT</label>
                                    <input type="text" name="payment-amount" class="withdraw-data" id="" placeholder="N45000">
                                <p class="withdraw-label">MAX. AMOUNT  N50,000</p>
                                </div>
                                <div class="form-group">
                                    <label for="acct number">ACCOUNT NUMBER</label>
                                    <input type="text" name="payment-acct" class="withdraw-data" id="" placeholder="6160883639">
                                    <p class="withdraw-label">OLIBIE CHIDERA</p>
                                </div>
                                <div class="form-group">
                                    <label for="location">LOCATION</label>
                                    <input type="text" name="payment-location" id="" class="withdraw-data" placeholder="NO 3 BARREL STRT YABA">
                                </div>
                                <div class="form-group" style="font-weight:bold">
                                    <p>DELIVERY TIME</p>                                    
                                    <p class="withdraw-data" id="">15 minutes</p>
                                </div>
                                <div class="">              
                                    <p id='withdraw-delivery'>
                                        <input type="checkbox" name="payment-delivery" id="withdraw-span">HOME-DELIVERY
                                        <span id="withdraw-span1">N150</span>
                                    </p>
                                    <input type="submit" class="withdraw-data withdraw-submit" id="withdraw-submit"value="WITHDRAW">
                                    <input type="submit" class="withdraw-data withdraw-submit" id="withdraw-submit1"value="FUND WALLET">
                                </div>  
                            </form>
                        </div>
                    </div>
    
            </div>       
            
        </section>
        
    </body>
    </html>