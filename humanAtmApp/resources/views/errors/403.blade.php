@extends('layouts.app')

@section('title')

<title> 403 Forbidden | HumanATM</title>

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
					<img src="{{asset('images/Group.png')}}" class="img-responsive " height="150px">
					<p class="page404-paragraph"> Oops!! You thiink you're smart? You're forbidden from accessing this page! </p>

						<div class="page404-navigate">
							<a class="page404-bg-blue" href="/dashboard">Go back to Dashboard or Login</a><br><br>

						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	@endsection
