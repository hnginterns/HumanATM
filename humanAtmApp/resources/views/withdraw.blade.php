@extends('layouts.app')

@section('title')
<title> Withdraw | HumanATM</title>
@endsection

@section('content')
    <section>
     @include('header')
    </section>
<body >
 <div class="container-fluid blue-fall outerBox-margin">
 
      <div class="row box-margin">
              <div class="col-md-8 col-md-offset-2 box-border">
                  <div class="row">
                      <div class="col-md-12 text-center box-color">
                          <h3>REQUEST</h3><hr>
                          <h4>Withdraw</h4>
                      </div>
                  </div>
           
                    <div class ="profile-menu" >
                        <button type="button" class="btn btn-success "> <a href="/withdraw">WITHDRAW </a></button>
                        <button type="button" class="btn btn-success "> <a href="/payment">PAYMENT </a></button>

                           
                    </div>
                

            <div class="withdraw-info">
                @if (session()->has('status'))
                    <div class="alert alert-danger fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ session('status')}}
                    </div>
                @endif
                <form action="/withdraw" class="profile-innerform " method="POST">
                 {{ csrf_field() }}
                 <div class="form-group">
                    <label for="recipient_name" style="padding-left: 5px">Name</label>
                    <input type="text" name="recipient_name" class="form-control wallet-input" readonly="readonly" value="{{$recipient->name}}">
                    
                </div>

                <div class="form-group">
                    <label for="bank" style="padding-left: 5px">Bank</label>
                    <input type="text" name="bank" class="form-control wallet-input" readonly="readonly" value="{{$recipient->humanAtm->bank_name}}">
                    
                </div>

                <div class="form-group">
                    <label for="recipient_account" style="padding-left: 5px">Account Number</label>
                    <input type="text" name="recipient_account" class="form-control wallet-input" readonly="readonly" value="{{ $recipient->humanAtm->account_number}}">
                    
                </div>

                <div class="form-group">
                    <label for="amount" style="padding-left: 5px">Amount (NGN)</label>
                    <input type="text" name="amount" class="form-control wallet-input" readonly="readonly" value="{{$recipient->humanAtm->amount}}">
                    
                </div>

  
               

                <div class="withdraw col-sm-6" style="font-weight:bold">
                    <p class="text-center">DELIVERY TIME</p>                                    
                    <p class="text-center">15 minutes</p>
                </div>
                <div class="tweet">   
                <input type="checkbox" name="delivery" >           
                    <p > <b>HOME-DELIVERY N150 </b> </p>
                    <input type="submit" class="btn btn-success withdraw-submit" id="withdraw-submit"value="WITHDRAW">
                   
                </div>  
            </form>
        </div>
    </div>


</div>       

</section>
<!-- Footer -->
@include('footer')
<!-- End footer-->
</body>
@endsection

