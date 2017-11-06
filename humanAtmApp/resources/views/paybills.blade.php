@extends('layouts.app')

    @section('title')
        <title> PayBills | HumanATM</title>
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
                              <h3>PAY BILLS</h3><hr>
                              
                          </div>
                      </div>

                            <div class="row paybills-margin">
                                <div class="col-sm-4 col-sm-offset-1 payshadow  text-center">
                                <img src="{{asset('images/ant.png')}}" class="bills-image" alt="userPicture">
                                <h4>Cable TV Subscription</h4>
                                </div>

                                <div class="col-sm-4 col-sm-offset-1 payshadow  text-center">
                                <img src="{{asset('images/uti.png')}}" class="bills-image" alt="userPicture">
                                <h4>Utility Bills</h4>
                                </div>
                                <div class="col-sm-4 col-sm-offset-1 payshadow text-center">
                                <img src="{{asset('images/data.png')}}" class="bills-image" alt="userPicture">
                                <h4>Data Subscription</h4>
                                </div>
                                <div class="col-sm-4 col-sm-offset-1 payshadow text-center">
                                <img src="{{asset('images/recharge.png')}}" class="bills-image" alt="userPicture">
                                <h4>Mobile Recharge</h4>
                                </div>




                            
                        </div>
                </div>
    
            </div>
</div>
            @include('footer')
</body>
@endsection
     
        