
<html lang="en">
@extends('layouts.app')

@section('title')
<title> Edit User | HumanATM</title>
@endsection
@section('content')
<body>
<div class="container-fluid">
        <div class="row profile-rower">
            <div class="col-xs-8 col-xs-offset-2 edituserpage-shadow">
                <div class="row edituserpage-margin1">             
                    <div class="col-md-7 col-md-offset-1">
                        <p class="editusertext-blue">Edit Profile</p><hr/>&nbsp;
                    </div>
                </div>
                <div class="row edituserpage-margin"> 
                    <div class="col-md-3 col-md-push-8 text-center">
                        <form id="upload-image-form" action="" method="post" enctype="multipart/form-data">
                            <div id="image-preview-div" style="display: none">
                              <label for="exampleInputFile">Selected image:</label>
                              <br>
                              <img id="preview-img" class="text-center" src="noimage">
                            </div>
                            <div class="form-group">
                              <input type="file" class="text-center" name="file" id="file" required>
                            </div>
                            <button class="btn btn-lg btn-primary" id="upload-button" type="submit" disabled>Upload image</button>
                          </form>
                          
                    </div>     

                    <div class="col-md-7 col-md-pull-3 col-md-offset-1">
                        <form action="" class="form-inline">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label class="control-label text-muted" for="firstname">First Name*</label>
                                        <input type="text" name="firstname" placeholder="John" class="form-control edituserpage-form " required>
                                    </div>

                                    <div class="col-sm-6 form-group">
                                        <label class="control-label text-muted" for="lastname">Last Name*</label>
                                        <input type="text" name="lastname" placeholder="Doe" class="form-control edituserpage-form" required>
                                    </div>  
                                &nbsp;

                                    <div class="radio col-sm-12">
                                        <label class="text-muted">Gender</label><br>
                                        <label><input type="radio" name="sports"> Male</label>
                                        <label><input type="radio" name="sports"> Female</label>
                                    </div>
                                    <br>
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    <br><div class="col-sm-6 col-md-6 form-group">
                                        <label for="MobileNumber" class="text-muted control-label">Mobile Number*</label><br/>
                                        <input type="tel" name="phoneno" placeholder="+2348112345678" class="form-control edituserpage-form" required>
                                    </div>
                                    
                                    <div class="col-sm-6  form-group">
                                        <label for="EmailAddress" class="text-muted control-label">Email Address*</label><br/>
                                        <input type="email" name="email" placeholder="dikethelmak@gmail.com" class="form-control edituserpage-form" required>
                                    </div>
                                    <br/>
                                    
                                    <div class="col-sm-12  form-group">
                                        <label for="Password" class="text-muted control-label"> OldPassword*</label><br/>
                                        <input type="password" name="password" placeholder="***********" class="form-control edituserpage-form" required>
                                    </div>  

                                    <div class="col-sm-6 form-group">
                                        <label for="Password" class="text-muted control-label">Password*</label><br/>
                                        <input type="password" name="password" placeholder="***********" class="form-control edituserpage-form" required>
                                    </div>                                         
                                    <div class="col-sm-6 form-group">
                                        <label for="Password" class="text-muted control-label">Re-enter Password*</label><br/>
                                        <input type="password" name="password" placeholder="***********" class="form-control edituserpage-form" required>
                                    </div>  
                                    <br>
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;                                     
                                    <br>  
                                    <div class="col-xs-3 text-center">
                                        <button type="submit" class="btn btn-primary edituserpage-btn white">CANCEL</button>
                                    </div>
                                    <div class="col-xs-3 text-center">
                                        <button type="submit" class="btn btn-primary edituserpage-btn blue">SAVE</button>
                                    </div>
                                    
                                </div>                                    
                            </fieldset>                            
                        </form>                                   
                    </div>                                                           
                </div>           
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="{{asset('js/upload-image.js')}}"></script>
</body>
@endsection
