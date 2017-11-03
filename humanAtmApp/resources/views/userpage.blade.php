
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
                    <h5><a href="/updateuser/{{$user->id}}"><b>Update Profile</b></a></h5>
                </div>
            </div>
               @if (session()->has('status'))
            <div class="alert alert-info alert-info fade in">
                <a href="/dashboard" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('status')}}
            </div>
            @endif
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

            {{-- show pending withdrawal --}}
            @if ($pendingWithdrawal)
            <p class="col-xs-6 col-md-3 col-md-offset-2 "><h3  style="text-align: center"><span style="color:#828282; "> PENDING WITHDRAWAL </span></h3> 
               <hr>
           </p> 
           <div class="row userpage-margin userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2 ">
                <h3><span style="color:#828282"> Human ATM Name: </span></h3>
            </div>
             @isset (($my_payer))
            <div class="col-xs-6 col-md-4 col-md-offset-1">
                <h3><b>{{$my_payer->name}}</b></h3>
            </div>
            @endisset
        </div>
        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282"> Amount </span></h3>
            </div>
            <div class="col-xs-6 col-md-4 col-md-offset-1">
                <h3><b>NGN{{(int)$pendingWithdrawal->amount}}</b></h3>
            </div>

        </div>
        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282"> Human ATM Wallet ID: </span></h3>
            </div>
            @isset ($my_payer)
            <div class="col-xs-6 col-md-4 col-md-offset-1">
                <h3><b>{{$my_payer->wallet_id}}</b></h3>
            </div>

        </div>
        @isset ($my_payer->profile)
        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282"> Human ATM Phone Number: </span></h3>
            </div>
            <div class="col-xs-4 col-md-4 col-md-offset-1">
                <h3><b>{{$my_payer->profile->phone_number}}</b></h3>
            </div>
        </div>
        @endisset
        @endisset

        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282">Human ATM Email Address </span></h3>
            </div>
            <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
                <h3><b>{{ $my_payer->email}}</b></h3>
            </div>
        </div>
        @if ($my_payer->profile)
        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282">Human ATM Location </span></h3>
            </div>
            <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
                <h3><b>{{ $my_payer->profile->location}}</b></h3>
            </div>
        </div>
        @endif
        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282">Status</span></h3>
            </div>
            <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
                <h3><b>{{ $pendingWithdrawal->status}}</b></h3>
            </div>
        </div>

         <div class="col-xs-6 col-md-4 col-md-offset-4">
            <a href="/withdraw/confirm/receipt/{{$pendingWithdrawal->id}}" class="btn btn-primary"> I Have Recieved This</a>
        </div>
        @endif
        {{-- End show pending withdrawal--}}


         {{-- show pending payment --}}
            @if ($pendingPayment)
            <p class="col-xs-6 col-md-3 col-md-offset-2 "><h3  style="text-align: center; margin-top: 100px"><span style="color:#828282; "> PENDING PAYMENT </span></h3> 
               <hr>
           </p> 
           <div class="row userpage-margin userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2 ">
                <h3><span style="color:#828282"> Reciever Name: </span></h3>
            </div>
            <div class="col-xs-6 col-md-4 col-md-offset-1">
                <h3><b>{{$reciever->name}}</b></h3>
            </div>
        </div>
        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282"> Amount </span></h3>
            </div>
            <div class="col-xs-6 col-md-4 col-md-offset-1">
                <h3><b>NGN{{(int)$pendingPayment->amount}}</b></h3>
            </div>

        </div>
        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282"> Reciever Wallet ID: </span></h3>
            </div>
            <div class="col-xs-6 col-md-4 col-md-offset-1">
                <h3><b>{{$reciever->wallet_id}}</b></h3>
            </div>
        </div>
        @if ($reciever->profile)
        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282"> Reciever Phone Number: </span></h3>
            </div>
            <div class="col-xs-4 col-md-4 col-md-offset-1">
                <h3><b>{{$reciever->profile->phone_number}}</b></h3>
            </div>
        </div>
        @endif

        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282">Reciever Email Address </span></h3>
            </div>
            <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
                <h3><b>{{ $reciever->email}}</b></h3>
            </div>
        </div>
        @if ($reciever->profile)
        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282">Reciever Location </span></h3>
            </div>
            <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
                <h3><b>{{ $reciever->profile->location}}</b></h3>
            </div>
        </div>
        @endif
        <div class="row userpage-mar">
            <div class="col-xs-6 col-md-3 col-md-offset-2">
                <h3><span style="color:#828282">Status</span></h3>
            </div>
            <div class="col-xs-6 col-md-4 col-md-offset-1 userpage-bottom">
                <h3><b>{{ $pendingPayment->status}}</b></h3>
            </div>
        </div>

         <div class="col-xs-6 col-md-4 col-md-offset-4" style="margin-bottom: 50px">
            <a href="/reject/payment/{{$pendingPayment->id}}" class="btn btn-primary"> I Can't pay this</a>
        </div>
        @endif
        {{-- End show pending payment--}}
        
    </div>
</div>
</div> 
</body>
</html>