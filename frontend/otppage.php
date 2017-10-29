<!DOCTYPE html>
<html>
<head>
	<title>OTP Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet"  href="css/main.css">

</head>
<body>
        <div class="container-fluid daily-margin">
                <!-- header -->
                <?php include"header.php"; ?>
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6 otp-rectangle-box" >
                <div class="otp-text">
                    <h4><b>ENTER OTP</b></h4>
                    <P class="otp-p">A One Time Password has been sent to your bank mobile phone number</P>
                </div>

                <form action="" method="">
                    <div class="form-group row">
                        <div class="col-sm-offset-1 col-sm-10">
                            <input type="text" class="form-control otp-textbox" id="">
                        </div>
                    </div>

                    <button type="submit" class="otp-button ">SEND</button>
                </form>
                <div class="otp-resend">
                    <P class="">OTP not sent?</P>
                    <button type="button" class="btn btn-default ">RESEND</button>
                </div>




            </div>
        </div>
    </div>
</body>
</html>




