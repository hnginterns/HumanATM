
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title> Dashboard | HumanATM</title>
</head>
<body>
 <div class="container-fluid">
    <!-- header -->
    @include('header')
    <div class="row profile-rower">
        <div class="col-md-8 col-md-offset-2 userpage-shadow">
            <div class="row userpage-margin">
                <div class="col-md-7 col-md-offset-1 text-center">
                    <img src="{{asset('images/3.png')}}" class="userpage-image" alt="userPicture">
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-md-2 col-md-offset-1 text-center  daily-inactive">
                    <h5><a href="#"><b>Edit Profile</b></a></h5>
                </div>
            </div>

            <div class="row userpage-margin userpage-mar">
                <div class="col-xs-6 col-md-3 col-md-offset-2 ">
                    <h3><span style="color:#828282"> Name: </span></h3>
                </div>
                <div class="col-xs-6 col-md-4 col-md-offset-1">
                    <h3><b>{{$user->name}}</b></h3>
                </div>
            </div>
            <div class="row userpage-mar">
                <div class="col-xs-6 col-md-3 col-md-offset-2">
                    <h3><span style="color:#828282"> Gender: </span></h3>
                </div>
                <div class="col-xs-6 col-md-4 col-md-offset-1">
                    <h3><b>Female</b></h3>
                </div>

            </div>
            <div class="row userpage-mar">
                <div class="col-xs-6 col-md-3 col-md-offset-2">
                    <h3><span style="color:#828282"> Wallet ID: </span></h3>
                </div>
                <div class="col-xs-6 col-md-4 col-md-offset-1">
                    <h3><b>{{$user->wallet_id}}</b></h3>
                </div>
            </div>
            <div class="row userpage-mar">
                <div class="col-xs-6 col-md-3 col-md-offset-2">
                    <h3><span style="color:#828282"> Email Address: </span></h3>
                </div>
                <div class="col-xs-4 col-md-4 col-md-offset-1">
                    <h3><b>{{$user->email}}</b></h3>
                </div>
            </div>
            <div class="row userpage-mar">
                <div class="col-xs-6 col-md-3 col-md-offset-2">
                    <h3><span style="color:#828282"> Mobile Number </span></h3>
                </div>
                <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
                    <h3><b>+234 811 234 5678</b></h3>
                </div>
            </div>

        </div>
    </div>
</div> 
</body>
</html>