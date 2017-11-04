@extends('layouts.app')

@section('title')
<title> Error 404 | HumanATM</title>
@endsection

@section('content')
<!-- header -->
@include('header')
<body>
	<div class="container-fluid blue-fall">
		
		<div class="row">
			<div class="col-sm-offset-3 col-sm-6  page404-margin" >
				<div class="page404-main text-center">
				
					<img src="{{asset('images/Group.png')}}" class="img-responsive image404 " height="150px">
					<h4 class="page404-paragraph"> Oops!! <br>i think you're on the wrong track to meeting the Human Atm 
						<br>of your choice, you can go to the homepage to restart your journey. </h4>

						<div class="page404-navigate">
							<a class="page404-bg-blue" href="#">Go back to Homepage</a><br><br>
						</div>
					</div>
				</div>
			</div>
		</div>

		@include('footer')
	</body>
	@endsection
