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
                    <header>
                        लग - इन
                    </header>
                    @if (session()->has('error'))
                        <h2>{{ session()->get('error') }}</h2>
                    @endif
                    <form method="POST" action="{{ route('logged.in') }}" data-parsley-validate autocomplete="off"
                        class="myForm text-center">
                        @csrf
                        <div class="form-group">
                            <i class="fas fa-user"></i>
                            <input class="myInput eng_text" type="text" name="email" id="username"
                                data-parsley-required-message="प्रयोगकर्ता को Email अनिवार्य छ ।" placeholder="Email"
                                value="" required>
                        </div>
                        <div class="invalid-feedback">
                        </div>

                        <div class="form-group">
                            <i class="fas fa-key"></i>
                            <i class="fa fa-eye toggle-password"></i>
                            <input class="myInput eng_text" type="password" name="password" placeholder="Password"
                                id="password" data-parsley-required-message="पासवर्ड फिल्ड अनिवार्य छ ।" required>
                        </div>

                        <div class="form-group">
                            <div class="text-center" style="font-size: 14px;margin-bottom: 6px">
                                पासवर्ड बिर्सनुभयो ? <a href="{{ route('forget.password') }}"> यहाँ
                                    क्लिक गर्नुहोस्</a>
                            </div>
                        </div>

                        <button type="submit" class="buttonsubmit" value=""><i class="fa fa-unlock"></i> लग -
                            इन</button>
                        <!-- <input type="submit" class="buttonsubmit" value="लग - इन"> -->

                        <div class="mt-4">
                            <div class="text-center" style="font-size: 14px;margin-bottom: -6px">
                                नयाँ प्रयोगकर्ता ?<a href="{{ route('register') }}"> यहाँ दर्ता
                                    गर्नुस </a>
                            </div>
                            <div class="text-center mt-4" style="font-size: 14px;">
                                OTP रिसेट को लागि <a href="{{ route('otp') }}"> यहाँ क्लिक
                                    गर्नुहोस्</a>
                            </div>

                        </div>

                        <!-- </form> -->
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
