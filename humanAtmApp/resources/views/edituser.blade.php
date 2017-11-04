
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

<<<<<<< HEAD
                    <div class="col-md-10  col-md-offset-1">
                        <form action="" id="update-details-form">
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 form-group">
                                        <label class="control-label text-muted" for="firstname">First Name*</label>
                                        <input type="text" name="firstname" placeholder="First Name" class="form-control edituserpage-form " >
                                    </div>

                                    <div class="col-md-8 col-md-offset-2 form-group">
                                        <label class="control-label text-muted" for="lastname">Last Name*</label>
                                        <input type="text" name="lastname" placeholder="Last Name" class="form-control edituserpage-form">
                                    </div>  
                                &nbsp;

                                    <div class="radio col-sm-4 text-center col-sm-offset-4">
                                        <label class="text-muted">Gender</label><br><br>
                                        <label><input type="radio" name="sports"> Male</label>
                                        <label><input type="radio" name="sports"> Female</label>
                                    </div>
                                    <br>
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    <br>
                                    <div class="col-md-8 col-md-offset-2 form-group">
                                        <label class="control-label text-muted" for="accountname">Account Name*</label>
                                        <input type="text" name="accout_name" placeholder="Account Name" class="form-control edituserpage-form" >
                                    </div>  
                        
                                    <div class="col-md-8 col-md-offset-2 form-group">
                                        <label class="control-label text-muted" for="lastname">Account Number*</label>
                                        <input type="number" name="account_number" placeholder="Account Name" class="form-control edituserpage-form" >
                                   
                                        <select class="withdraw-expand form-control"  name="bank_id">
                                        <option value="" selected="selected">Select Bank</option>
                                        
                                        <option value=""></option>
                                        
                                    </select>
                                    </div>  

                                   

                                    <div class="col-md-8 col-md-offset-2 form-group">
                                        <label for="MobileNumber" class="text-muted control-label">Mobile Number*</label><br/>
                                        <input type="tel" name="phone_number" placeholder="+2348112345678" class="form-control edituserpage-form" >
                                    </div>
                                    
                                    <div class="col-md-8 col-md-offset-2 form-group">
                                        <label for="EmailAddress" class="text-muted control-label">Email Address*</label><br/>
                                        <input type="email" name="email" placeholder="user@humanatm.com" class="form-control edituserpage-form" >
                                    </div>

                                    <div class="col-md-8 col-md-offset-2 form-group">
                                        <label class="control-label text-muted" for="location">Location</label>
                                        <input type="text" name="location" placeholder="Location" class="form-control edituserpage-form" >
                                    </div>  
                                    <br/>
                                    
                                    <div class="col-md-8 col-md-offset-2 form-group">
                                        <label for="Password" class="text-muted control-label"> OldPassword*</label><br/>
                                        <input type="password" name="password" placeholder="***********" class="form-control edituserpage-form" >
                                    </div>  

                                    <div class="col-md-8 col-md-offset-2 form-group">
                                        <label for="Password" class="text-muted control-label">Password*</label><br/>
                                        <input type="password" name="password" placeholder="***********" class="form-control edituserpage-form" >
                                    </div>                                         
                                    <div class="col-md-8 col-md-offset-2 form-group">
                                        <label for="Password" class="text-muted control-label">Re-enter Password*</label><br/>
                                        <input type="password" name="password" placeholder="***********" class="form-control edituserpage-form" >
                                    </div>  
                                    <br>
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;                                     
                                    <br>  
                                  
                                    <div class="col-xs-4 col-xs-offset-4 text-center">
                                        <button type="submit" class="btn btn-success edit-btn">SAVE</button>
                                    </div>
                                    
                                </div>                                    
                            </fieldset>                            
                        </form>                                   
                    </div>                                                           
                </div>           
            </div>
        </div>
=======

                            <div class="col-xs-4 col-xs-offset-4 text-center">
                                <button type="submit" class="btn btn-success edit-btn">SAVE</button>
                            </div>

                        </div>                                                               
                    </form> 
                </fieldset>                                  
            </div>                                                           
        </div>           
>>>>>>> 18418031c63ee62b96040875b77c18150ee90141
    </div>
</div>
</body>
@endsection
