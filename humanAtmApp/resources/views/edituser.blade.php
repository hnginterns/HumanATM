
@extends('layouts.app')

@section('title')
<title> Edit User | HumanATM</title>
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
                            </div>


                           
                <div class="row">
                    <div class="col-md-4 col-md-push-4  text-center ">
                        <form id="upload-image-form" action="" method="post" enctype="multipart/form-data">
                            <div id="image-preview-div" style="display: none">
                              <label for="exampleInputFile">Selected image:</label>
                              <br>
                              <img id="preview-img" class="text-center" src="noimage" width="150px" height="150px">
                            </div>
                            <div class="form-group">
                              <input type="file" class="text-center" name="image_url" id="file" required>
                            </div>
                            <button class="btn btn-lg btn-primary" id="upload-button" type="submit" disabled>Upload image</button>
                        </form>  
                    </div>     
                </div>


                    <div class="col-md-10  col-md-offset-1">
                        <form action="">
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2 form-group">
                                        <label class="control-label text-muted" for="firstname">First Name*</label>
                                        <input type="text" name="firstname" placeholder="First Name" class="form-control edituserpage-form " required>
                                    </div>

                                    <div class="col-md-8 col-md-offset-2 form-group">
                                        <label class="control-label text-muted" for="lastname">Last Name*</label>
                                        <input type="text" name="lastname" placeholder="Last Name" class="form-control edituserpage-form" required>
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
                                        <input type="text" name="accout_name" placeholder="Account Name" class="form-control edituserpage-form" required>
                                    </div>  
                        
                                    <div class="col-md-8 col-md-offset-2 form-group">
                                        <label class="control-label text-muted" for="lastname">Account Number*</label>
                                        <input type="number" name="account_number" placeholder="Account Name" class="form-control edituserpage-form" required>
                                   
                                        <select class="withdraw-expand form-control"  name="bank_id">
                                        <option value="" selected="selected">Select Bank</option>
                                        
                                        <option value=""></option>
                                        
                                    </select>
                                    </div>  

                                   

                                    <div class="col-md-8 col-md-offset-2 form-group">
                                        <label for="MobileNumber" class="text-muted control-label">Mobile Number*</label><br/>
                                        <input type="tel" name="phone_number" placeholder="+2348112345678" class="form-control edituserpage-form" required>
                                    </div>
                                    
                                    <div class="col-md-8 col-md-offset-2 form-group">
                                        <label for="EmailAddress" class="text-muted control-label">Email Address*</label><br/>
                                        <input type="email" name="email" placeholder="user@humanatm.com" class="form-control edituserpage-form" required>
                                    </div>

                                    <div class="col-md-8 col-md-offset-2 form-group">
                                        <label class="control-label text-muted" for="location">Location</label>
                                        <input type="text" name="location" placeholder="Location" class="form-control edituserpage-form" >
                                    </div>  
                                    <br/>
                                    
                                    <div class="col-md-8 col-md-offset-2 form-group">
                                        <label for="Password" class="text-muted control-label"> OldPassword*</label><br/>
                                        <input type="password" name="password" placeholder="***********" class="form-control edituserpage-form" required>
                                    </div>  

                                    <div class="col-md-8 col-md-offset-2 form-group">
                                        <label for="Password" class="text-muted control-label">Password*</label><br/>
                                        <input type="password" name="password" placeholder="***********" class="form-control edituserpage-form" required>
                                    </div>                                         
                                    <div class="col-md-8 col-md-offset-2 form-group">
                                        <label for="Password" class="text-muted control-label">Re-enter Password*</label><br/>
                                        <input type="password" name="password" placeholder="***********" class="form-control edituserpage-form" required>
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
    </div>
@include('footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="{{asset('js/upload-image.js')}}"></script>
</body>
@endsection
