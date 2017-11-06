    <?php $__env->startSection('title'); ?>
        <title> Edit User Profile | HumanATM</title>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row profile-rower">
            <div class="col-xs-8 col-xs-offset-2 edituserpage-shadow">
                <div class="row edituserpage-margin1">             
                    <div class="col-md-7 col-md-offset-1">
                        <p class="editusertext-blue">Update Profile</p><hr/>&nbsp;
                    </div>
                </div>
                <div class="row edituserpage-margin"> 
                    <div class="col-md-3 col-md-push-8">
                        <img src="https://github.com/matilbella/edituser/blob/master/img/3.png?raw=true" class="edituser-image" alt="userPicture">
                    </div>                                      
                    <div class="col-md-7 col-md-pull-3 col-md-offset-1">
                        <form action="/updateuser"  method="put" class="form-inline">
                        <?php echo csrf_field(); ?>

                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label class="control-label" for="firstname">Name*</label>
                                        <input type="text" name="name" placeholder="John Doe" class="form-control edituserpage-form " required>
                                    </div>
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>