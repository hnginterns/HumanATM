
<html lang="en">
@extends('layouts.app')

@section('title')
<title> Invite Friends | HumanATM</title>
@endsection
@section('content')
<body>
	<div class="container-fluid daily-margin">
		
		<div class="row profile-rower">
			<div class="col-md-8 col-md-offset-2 profile-borderColor">
				<div class="row">
					<div class="col-md-12 text-right profile-boxColour">
						<h4>Invite Friends</h4>
					</div>
				</div>
				<div class="row ">
					<div class="col-md-12 text-center invite-margin">
						<h3><b>MAKE YOUR TRANSACTIONS FUN</b></h3>
						<h5><b>Earn 5% of what we charge you at the end of the month</b></h5>
					</div>
				</div>
				<div class="row userpage-margin invite-color text-center">
					<div class="col-md-12">
						<h4><b>FIND OUT MORE</b></h4>
					</div>
				</div>
				<div class="row userpage-margin invite-color">
					<div class="col-md-8 col-md-offset-2  text-right">
						<p><b>Referral Code</b></p>

					</div>
					<div class="col-md-8 col-md-offset-2 text-center invite-form">
						<form action="#" method="post">
							<input type="text" name="referralcode" class="invite-input" id="referral" placeholder="Chykeofficial"><br><br><br>
							<input type="submit" value="SUBMIT" class=" invite-submit">
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>

</body>
@endsection
