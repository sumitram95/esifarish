@extends('frontend.auth.layout.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="myRightCtn">
                <div class="box">

                    <!-- <header></header> -->
                    <img src="{{ asset('images/logo/nepal.png') }}"
                        style="display: block;margin-left: auto; margin-right: auto;width: 50%;margin-bottom:10px;"
                        class="" alt="">
                    <p style="color: #fff; text-align:center;font-size:26px;">तिलोत्तमा
                        नगरपालिका<br>रूपन्देही, लुम्बिनी प्रदेश </p>
                    <p style="color:#fff;text-align:center;font-size:18px;">सिफारिस तथा प्रमाणित प्रकृया
                        व्यवस्थापन प्रणाली <br>(Recommendation and Certification Process Management
                        System)</p>
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <div class="myLeftCtn login-right" style="">
                <div class="text-center">
                    <header> Verification </header>
                    <form method="POST" action="{{ route('verification.check') }}" accept-charset="UTF-8"
                        data-parsley-validate class="myForm" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <i class="fas fa-user"></i>
                            <input type="number" class="myInput" id="username" placeholder="Verification Code"
                                data-parsley-required-message="Verification code अनिवार्य छ ।" name="verification_code"
                                required>
                        </div>

                        <button type="submit" class="buttonsubmit ml-4">Submit
                        </button>
                        <br>

                    </form>
                    <div class="mt-4 reset">
                        <div class="text-center">
                            <a href="{{ route('verification.resend_code') }}" style="font-size: 14px;">
                                <i class="fa fa-long-arrow-left" style="text-decoration: underline;"> Resend Verification
                                    Code </i></a>
                        </div>
                    </div>
                    <div class="mt-4 reset">
                        <div class="text-center">
                            <a href="{{ route('login') }}" style="font-size: 14px;">
                                <i class="fa fa-long-arrow-left" style="text-decoration: underline;"> लग
                                    - इन मा फर्किनुहोस </i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
