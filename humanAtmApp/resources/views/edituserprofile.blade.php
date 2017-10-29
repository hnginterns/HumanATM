@extends('layouts.app')

    @section('title')
        <title> Edit User Profile | HumanATM</title>
    @endsection

    @section('content')
    <div class="container-fluid">
        <div class="row profile-rower">
            <div class="col-xs-8 col-xs-offset-2 edituserpage-shadow">
                <div class="row edituserpage-margin1">             
                    <div class="col-md-7 col-md-offset-1">
                        <p class="editusertext-blue">Edit Profile</p><hr/>&nbsp;
                    </div>
                </div>
                <div class="row edituserpage-margin"> 
                    <div class="col-md-3 col-md-push-8">
                        <img src="https://github.com/matilbella/edituser/blob/master/img/3.png?raw=true" class="edituser-image" alt="userPicture">
                    </div>                                      
                    <div class="col-md-7 col-md-pull-3 col-md-offset-1">
                        <form action="" class="form-inline">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label class="control-label" for="firstname">First Name*</label>
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
                                    <br/>
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    <div class="col-sm-12 form-group">
                                        <label for="MobileNumber" class="text-muted control-label">Mobile Number*</label><br/>
                                        <input type="tel" name="phoneno" placeholder="+2348112345678" class="form-control edituserpage-form" required>
                                    </div>
                                    <br/>
                                    <div class="col-sm-12 form-group">
                                        <label for="EmailAddress" class="text-muted control-label">Email Address*</label><br/>
                                        <input type="email" name="email" placeholder="dikethelmak@gmail.com" class="form-control edituserpage-form" required>
                                    </div>
                                    <br/>
                                    <div class="col-sm-12 form-group">
                                        <label for="Password" class="text-muted control-label">Password*</label><br/>
                                        <input type="password" name="password" placeholder="***********" class="form-control edituserpage-form" required>
                                    </div>                                         
                                    <div class="col-xs-3">
                                        <button type="submit" class="btn btn-primary edituserpage-btn white">CANCEL</button>
                                    </div>
                                    <div class="col-xs-3">
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
@endsection