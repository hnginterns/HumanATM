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
				<div class=" text-center">
				
					<img src="{{asset('images/Group.png')}}" class="img-responsive image404 " height="150px">
					<h4 class="page404-paragraph"> <span style="font-size:3.4em; color:#0F3B75; font-weight:bold; padding-bottom:50px;">Oops!! </span> 
					<br><br>
					<span style="font-size:1.4em; color:rgb(90, 91, 94); line-height:1.8em">You just made a wrong turn!<br><b> <span style="font-size:1.3em; color: rgb(90, 91, 94);">WE CANT FIND WHAT YOU ARE LOOKING FOR!</span></b></span></h4>

						<div class="page404-navigate">
							<a class="page404-bg-blue btn btn-success" href="/">Go Home</a><br><br>
						</div>
					</div>
				</div>
			</div>
		</div>

		@include('footer')
	</body>
	@endsection
