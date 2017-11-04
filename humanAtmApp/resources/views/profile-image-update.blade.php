
@extends('layouts.app')

@section('title')
<title> Profile Update| HumanATM</title>
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
            <h3>UPDATE YOUR PROFILE IMAGE</h3><hr>

          </div>
        </div>



        <div class="row">
          <div class="col-md-4 col-md-push-4  text-center ">
             @if (session()->has('status'))
             <div class="alert alert-info alert-info fade in">
              <a href="/dashboard" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              {{ session('status')}}
            </div>
            @endif

            @if (session()->has('failed'))
            <div class="alert alert-info alert-danger fade in">
              <a href="/profile/image/{{$user_id}}" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              {{ session('failed')}}
            </div>
            @endif
            <form id="upload-image-form" action="/profile/image/{{$user_id}}" method="post" enctype="multipart/form-data">
             {{csrf_field()}}

            <div class="form-group {{ $errors->has('phote')? ' has-error' : ''}}">
              <input type="file" class="text-center" name="photo" id="file">
              @if ($errors->has('photo'))
              <span class="help-block">
                <strong>{{ $errors->first('photo') }}</strong>
              </span>
              @endif
            </div>
            &nbsp;
            &nbsp;
            &nbsp;                                     


            <div class="col-xs-4 col-xs-offset-4 text-center ">
              <button type="submit" class="btn btn-success edit-btn">SAVE</button>
            </div>

          </div>  
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@include('footer')
</body>
@endsection