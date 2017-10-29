{{-- <!DOCTYPE html>
<html>
<head>
	<title>OTP Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet"  href="css/main.css">

</head> --}}
 @extends('layouts.app')

       @section('title')
        <title> OTP Page | HumanATM</title>
       @endsection

       @section('content')
<body>
        <div class="container-fluid daily-margin">
                <!-- header -->
                @include('header')
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

                    <button type="submit" class="otp-button btn">SEND</button>
                </form>
                <div class="otp-resend">
                    <P class="">OTP not sent?</P>
                    <button type="button" class="btn btn-default btn-lg">RESEND</button>
                </div>




            </div>
        </div>
    </div>
</body>
@endsection




