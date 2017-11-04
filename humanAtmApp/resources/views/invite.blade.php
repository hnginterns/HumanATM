
<html lang="en">
@extends('layouts.app')

@section('title')
<title> Invite Friends | HumanATM</title>
@endsection
@section('content')
<!-- header -->
@include('header')
<body>
<div class="container-fluid blue-fall outerBox-margin">
  <div class="row box-margin">
		<div class="col-md-8 col-md-offset-2 box-border">

				<div class="row edit-bottom">
					<div class="col-md-12 text-center box-color">
						<h3>INVITE FRIENDS</h3><hr>
						
					</div>
				</div>


				<div class="row ">
					<div class="col-md-12 text-center">
						<h3><b>MAKE YOUR TRANSACTIONS FUN</b></h3>
						<h5><b>Earn 5% of what we charge you at the end of the month</b></h5>
					</div>
				</div>
				
				<div class="row userpage-margin">
					
					<div class="col-md-8 col-md-offset-2 text-center invite-form">
						<form action="{{url('/invite/send')}}" method="post">
						{{csrf_field()}}
							<input type="text" name="referralcode" class="invite-input" id="referral" placeholder="Enter Referal Code">
							@if(isset($error))
							{{$error}}
							@endif
							<br><br><br>
							<input type="submit" value="SUBMIT" class="btn btn-success invite-submit">
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>
@include('footer')
</body>
@endsection
