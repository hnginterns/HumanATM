
@extends('layouts.app')

@section('title')
<title> Profile Update | HumanATM</title>
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
                        <h3>UPDATE YOUR PROFILE</h3><hr>

                    </div>
                    </div



                    <div class="col-md-10  col-md-offset-1">
                        <form action="/profile/update/{{ $id }}" id="update-details-form" method="POST">
                         {{ csrf_field() }}
                         <fieldset>
                             @if (session()->has('status'))
                             <div class="alert alert-info alert-info fade in">
                                <a href="/dashboard" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                {{ session('status')}}
                            </div>
                            @endif

                            @if (session()->has('failed'))
                            <div class="alert alert-info alert-danger fade in">
                                <a href="/profile/{{$id}}/update" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                {{ session('failed')}}
                            </div>
                            @endif

                            <div class="col-md-8 col-md-offset-2 form-group {{ $errors->has('phone_number') ? ' has-error' : ''}}">
                                <label class="control-label text-muted" for="phone_number">Phone Number*</label>
                                <input type="text" name="phone_number" placeholder="08036765438" class="form-control edituserpage-form " value="{{ old('phone_number')}}" required>
                                @if ($errors->has('phone_number'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="col-md-8 col-md-offset-2 form-group{{ $errors->has('account_number') ? ' has-error' : ''}}">
                                <label class="control-label text-muted" for="account_number">Account Number*</label>
                                <input type="text" name="account_number" placeholder="Account Number" class="form-control edituserpage-form" value="{{ old('account_number')}}" required>
                                @if ($errors->has('account_number'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('account_number') }}</strong>
                                </span>
                                @endif
                            </div>  

                            <div class="col-md-8 col-md-offset-2 form-group{{ $errors->has('account_name') ? ' has-error' : ''}}">
                                <label class="control-label text-muted" for="account_name">Account Name*</label>
                                <input type="text" name="account_name" placeholder="Account Name" class="form-control edituserpage-form"  value="{{ old('account_name')}}" required>
                                @if ($errors->has('account_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('account_name') }}</strong>
                                </span>
                                @endif
                            </div>  

                            <div class="col-md-8 col-md-offset-2 form-group{{ $errors->has('bank_id') ? ' has-error' : '' }}">
                                <select class="withdraw-expand form-control"  name="bank_id">
                                    <option value="" selected="selected">Select Bank</option>
                                    @foreach ($banks as $bank)
                                    <option value="{{ $bank->id }}">{{ $bank->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('bank_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('bank_id') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="col-md-8 col-md-offset-2 form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                                <select class="withdraw-expand form-control"  name="sex">
                                    <option value="" selected="selected">Sex</option>
                                    <option value="Male" >Male</option>
                                    <option value="Female" >Female</option>
                                    <option value="Others" >Others</option>
                                </select>
                                @if ($errors->has('sex'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('sex') }}</strong>
                                </span>
                                @endif
                            </div> 

                            <div class="col-md-8 col-md-offset-2 form-group {{ $errors->has('location') ? 'has-error' : ''}}">
                                <label class="control-label text-muted" for="location">Location</label>
                                <input type="text" name="location" placeholder="3 Barrel Street, Yaba, Lagos" class="form-control edituserpage-form" value="{{ old('location')}}">
                                @if ($errors->has('location'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('location') }}</strong>
                                </span>
                                @endif
                            </div>  
                            <br>
                            &nbsp;
                            &nbsp;
                            &nbsp;                                     

                            <div class="col-xs-4 col-xs-offset-4 text-center">
                                <button type="submit" class="btn btn-success edit-btn">SAVE</button>
                            </div>

                        </div>                                                               
                    </form> 
                </fieldset>                                  
            </div>                                                           
        </div>           
    </div>
</div>
</body>
@endsection
