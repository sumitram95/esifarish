

@extends('frontend.auth.layout.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="myRightCtn">
            <div class="box">
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
                <header>OTP रिसेट</header>
                <p style=" color: red; font-size: 14px;">नोट : OTP कोडको समय अवधि 10 मिनेट हुनेछ !
                </p>
                <form method="POST" action="https://esifarish.tilottamamun.gov.np/opt-reset"
                    accept-charset="UTF-8" class="myForm" autocomplete="off" data-parsley-validate>
                    <input name="_token" type="hidden"
                        value="hKPXFA51kJm7gN7LLiOIdISlMQQpRqnUsBatPwR6">
                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <input class="myInput eng_text" type="text" name="user_name"
                            placeholder="User Name राख्नुहोस" id="username"
                            data-parsley-required-message="प्रयोगकर्ता को User Name फिल्ड अनिवार्य छ ।"
                            required>
                    </div>
                    <!-- <div class="form-group">
            <input class="form-control" data-parsley-required-message="प्रयोगकर्ता को आईडी फिल्ड अनिवार्य छ ।" placeholder="User Name राख्नुहोस" required name="user_name" type="text">

        </div> -->
                    <button type="submit" class="buttonsubmit  ml-4">
                        नयाँ OTP कोड अनुरोध गर्नुहोस्
                    </button><br>
                    <!-- <button type="button" class="buttonsubmit  ml-4 mt-2"  onclick="window.location='https://esifarish.tilottamamun.gov.np/login'"><i class="fa fa-long-arrow-left"></i> लग - इन मा फर्किनुहोस</button> -->

                </form>
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

