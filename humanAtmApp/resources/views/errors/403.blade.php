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
					<h2 class="page404-header"><b>ERROR 403</b></h2>
					<img src="img/Group.png" class="img-responsive " height="150px">
					<p class="page404-paragraph"> Oops!! You think you're smart? You're forbidden from accessing this page </p>

						<div class="page404-navigate">
							<a class="page404-bg-blue" href="/login">Go back to Login Page</a><br><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	@endsection
