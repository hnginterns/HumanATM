
@extends('layouts.app')

    @section('title')
        <title> OTP | HumanATM</title>
    @endsection

    @section('content')
        <div class="container-fluid daily-margin">
        @include('header')
        <div class="row">
            <div class="col-sm-offset-3 col-sm-6 otp-rectangle-box" >
                <div class="otp-text">
                    <h4><b>ENTER OTP</b></h4>
                    <P class="otp-p">A One Time Password has been sent to your bank mobile phone number</P>
                </div>

                <form action="/otp" method="post">
                    {{ csrf_field()}}
                    <div class="form-group row">
                        <div class="col-sm-offset-1 col-sm-10">
                            <input type="text" class="form-control otp-textbox" name="otp">
                            <input type="hidden" class="form-control otp-textbox" name="ref" value="{{$transRef}}">
                        </div>
                    </div>

                    <button type="submit" class="otp-button btn">SEND</button>
                </form>
                <div class="otp-resend">
                    <P class="">OTP not sent?</P>
                    <button type="button" class="btn btn-default btn-lg">RESEND</button>
                </div>

                </div>
            </div>
        </div>
@endsection




