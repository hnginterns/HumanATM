@extends('layouts.app')

@section('title')
<title> Payment | HumanATM</title>
@endsection

@section('content')
<body>
	<div class="container-fluid">
		<!-- header -->
		@include('header')
		<div class="row">
			<div class="col-sm-offset-3 col-sm-6  page404-rectangle-box" >
				<div class="page404-main text-center">
					<h2 class="page404-header"><b>ERROR</b></h2>
					<img src="images/Group.png" class="img-responsive " height="150px">
					<p class="page404-paragraph"> Oops!! i think you're on the wrong track to meeting the Human Atm 
						<br>of your choice, you can go to the homepage to restart your journey. </p>

						<div class="page404-navigate">
							<a class="page404-bg-blue" href="#">Go back to Homepage</a><br><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	@endsection
