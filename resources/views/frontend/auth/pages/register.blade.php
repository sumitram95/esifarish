<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>सिफारिस तथा प्रमाणित प्रकृया व्यवस्थापन प्रणाल</title>
    @include('frontend.auth.css.register-css')
</head>

<body class='login' style="font-family:kalimati;">
    <div id="app">

        <main class="">
            <div class="regform">
                <div class="myCard">
                    <div class="row">
                        <!-- <div class="col-md-12"> -->
                        <div class="col-md-3 ">
                            <div class="myRightCtn" style="background-image: none;">
                                <div class=" register-left ">
                                    <img src="{{ asset('images/logo/nepal.png') }}" alt="" />
                                    <div style="clear:both;"></div>
                                    <p style="width: 100%;font-size:13px;">तिलोत्तमा नगरपालिका, रूपन्देही<br> लुम्बिनी
                                        प्रदेश </p>
                                    <a href="{{ route('login') }}" value="लग-इन">
                                        <button class="btn btn-primary buttonsubmit login">
                                            <i class="fa fa-unlock"></i> लग -इन
                                        </button></a><br />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9  ">
                            <div class="myLeftCtn register-right" style="">
                                <h6 class="register-heading" style="">नयाँ प्रयोगकर्ता दर्ता गर्नुहोस</h6>
                                @if (session()->has('success'))
                                    <h4 class="text text-success">{{ session()->get('success') }}</h4>
                                @endif
                                @if ($errors->any())
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <form method="POST" action="{{ route('all.data.store') }}" class="needs-validation"
                                    id="regform" role="form" novalidate data-toggle="validator">
                                    @csrf

                                    <input type="hidden" name="applicant_id" id="applicantId">
                                    <input type="hidden" name="is_verified" id="verify" value='f'>
                                    <div class="d-flex flex-row">
                                        <div class="form-check form-switch">
                                            <input type="checkbox" id="is_taxpayer" name="is_taxpayer">
                                            <label class="form-check-label" for="TaxCode">करदाता हो?</label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input type="checkbox" id="is_minor" name="is_minor">
                                            <label class="form-check-label" for="Minor">नाबालिग ?</label>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row pb-3" id="TaxInfo" style="display: none;">
                                        <div class="col-md-4 mb-3">
                                            <div class="form-outline">
                                                <input class="form-control" value="{{ old('taxpayer_code') }}"
                                                    type="text" id="codeTax" name="taxpayer_code">
                                                <label class="form-label" for="करदाता संकेत नं" style="padding-top:0">
                                                    करदाता संकेत नं:</label>
                                                <div class="invalid-feedback">करदाता संकेत नं. अनिवार्य छ |</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="form-outline">
                                                <input class="form-control" value="{{ old('new_iid') }}" type="text"
                                                    id="new_iid" name="new_iid">
                                                <label class="form-label" for="नयाँ आन्तरिक संकेत नं"
                                                    style="padding-top:0"> नयाँ आन्तरिक संकेत नं:</label>
                                                <div class="invalid-feedback">नयाँ आन्तरिक संकेत नं. अनिवार्य छ |</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-2 ">
                                        <div class="col-md-3 mb-3">
                                            <div class="form-outline">
                                                <input type="text" name="first_name_np" class="form-control type_np"
                                                    value="{{ old('first_name_np') }}" id="firstNamenp" autofocus
                                                    required>
                                                <label class="form-label" for="पहिलो नाम" style="padding-top:0">
                                                    पहिलो नाम:</label>
                                                <div class="invalid-feedback">पहिलो नाम अनिवार्य छ |</div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <div class="form-outline">
                                                <input type="text" name="middle_name_np" class="form-control type_np"
                                                    value="{{ old('middle_name_np') }}" id="middleNamenp" autofocus>
                                                <label class="form-label" for="बीचको नाम" style="padding-top:0">
                                                    बीचको नाम:</label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <div class="form-outline">
                                                <input type="text" name="last_name_np"
                                                    class="form-control type_np" value="{{ old('last_name_np') }}"
                                                    id="lastNamenp" autofocus required>
                                                <label class="form-label" for="थर" style="padding-top:0">
                                                    थर:</label>
                                                <div class="invalid-feedback">थर अनिवार्य छ |</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <div class="form-outline">
                                                <input type="email" name="email" class="form-control  eng_text"
                                                    value="{{ old('email') }}" id="email" autofocus required>
                                                <label class="form-label" for="Email" style="padding-top:0">
                                                    Email:</label>
                                                <div class="invalid-feedback">Email अनिवार्य छ |</div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-2">
                                        <div class="col-md-3 mb-4">
                                            <div class="form-outline">
                                                <input type="text" name="first_name_en" class="form-control "
                                                    value="{{ old('first_name_en') }}" id="firstNameen" autofocus
                                                    required>
                                                <label class="form-label" for="First Name" style="padding-top:0">
                                                    First Name:</label>
                                                <div class="invalid-feedback">First Name अनिवार्य छ |</div>

                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <div class="form-outline">
                                                <input type="text" name="middle_name_en" class="form-control "
                                                    value="{{ old('middle_name_en') }}" id="middleNameen" autofocus>
                                                <label class="form-label" for="Middle Name" style="padding-top:0">
                                                    Middle Name:</label>

                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <div class="form-outline">
                                                <input type="text" name="last_name_en" class="form-control "
                                                    value="{{ old('v') }}" id="lastNameen" autofocus required>
                                                <label class="form-label" for="Surname" style="padding-top:0">
                                                    Surname:</label>
                                                <div class="invalid-feedback">Last Name अनिवार्य छ |</div>

                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <div class="form-outline">
                                                <input type="text" name="mobile_number"
                                                    class="arial_text form-control eng_text "
                                                    value="{{ old('mobile_number') }}" id="mobiles" autofocus
                                                    required
                                                    @error('mobile_number')
                                                        style="color: red"
                                                    @enderror>
                                                <label class="form-label" for="Mobile Number"
                                                    style="padding-top:0"><i class="fa fa-mobile"></i> Mobile
                                                    Number:</label>
                                                <div class="invalid-feedback">Mobile Number अनिवार्य छ |</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-2" id="ctzn_info">
                                        <div class="col-md-3 mb-4">
                                            <div class="form-outline">
                                                <input type="text" name="citizenship_number"
                                                    class=" form-control eng_text" id="citizenship" autofocus required
                                                    value="{{ old('citizenship_number') }}"
                                                    @error('citizenship_number')
                                                    style="color: red"
                                                @enderror>
                                                <label class="form-label" for="Citizenship Number"
                                                    style="padding-top:0"> नागरिकता नं.:</label>
                                                <div class="invalid-feedback">नागरिकता नं. अनिवार्य छ |</div>


                                            </div>
                                        </div>

                                        <div class="col-md-3 mb-4">
                                            <div class="form-outline">
                                                <input type="text" name="citizenship_issued_date_bs"
                                                    class="nepaliDatePicker form-control"
                                                    value="{{ old('citizenship_issued_date_bs') }}"
                                                    @error('citizenship_issued_date_bs')
                                                    style="color: red"
                                                @enderror
                                                    id="citizenship_issued_date_bs" autofocus required>
                                                <label class="form-label" for="Citizenship Issued Date (B.S)"
                                                    style="padding-top:0"> नागरिकता जारी मिति(वि.सं.):</label>
                                                <div class="invalid-feedback">जारी मिति(वि.सं.) अनिवार्य छ |</div>

                                            </div>
                                        </div>
                                        <div class="col-md-3 pb-4">
                                            <div class="form-outline">
                                                <input type="text" name="citizenship_issued_date_ad"
                                                    class="input_date form-control  arial_text"
                                                    value="{{ old('citizenship_issued_date_ad') }}"
                                                    @error('citizenship_issued_date_ad')
                                                    style="color: red"
                                                @enderror
                                                    id="citizenship_issued_date_ad" autofocus required>
                                                <label class="form-label" for="Citizenship Issued Date (A.D)"
                                                    style="padding-top:0"> नागरिकता जारी मिति(ई.सं.):</label>
                                                <div class="invalid-feedback">जारी मिति (ई.सं.) अनिवार्य छ |</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <div class="form-outline">
                                                <select class="form-control active" name="citizenship_issued_district"
                                                    id="citizenship_issued_districtId" required>
                                                    <option value="" selected>नागरिकता प्राप्त गरेको जिल्ला
                                                        छान्नुहोस्
                                                    </option>
                                                    @foreach ($districs ?? [] as $distric)
                                                        <option value="{{ $distric?->id ?? '' }}">
                                                            {{ $distric?->district_name ?? '' }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                                <label class="form-label" for="Citizenship Issued District"
                                                    style="padding-top:0"> नागरिकता प्राप्त गरेको जिल्ला:</label>
                                                <div class="invalid-feedback">नागरिकता प्राप्त गरेको जिल्ला अनिवार्य छ
                                                    |</div>

                                                <div class="form-notch">
                                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                                    <div class="form-notch-middle" style="width: 144px;"></div>
                                                    <div class="form-notch-trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-2">
                                        <div class="col-md-3 mb-4" id="dob_reg_info" style="display: none;">
                                            <div class="form-outline">
                                                <input type="text" name="birth_registration_no"
                                                    class="form-control  active"
                                                    value="{{ old('birth_registration_no') }}"
                                                    @error('birth_registration_no')
                                                    style="color: red"
                                                @enderror
                                                    id="birth_reg" autofocus>
                                                <label class="form-label" for="Birth Registration Number"
                                                    style="padding-top:0"> जन्म दर्ता नं.:</label>
                                                <div class="invalid-feedback">जन्म दर्ता नं. अनिवार्य छ |</div>

                                                <div class="form-notch">
                                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                                    <div class="form-notch-middle" style="width: 61.6px;"></div>
                                                    <div class="form-notch-trailing"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3  mb-4">
                                            <div class="form-outline">
                                                <input type="text" name="user_name" class="form-control  eng_text"
                                                    value="{{ old('user_name') }}"
                                                    @error('user_name')
                                                style="color: red"
                                            @enderror
                                                    id="userName" autofocus required>
                                                <label class="form-label" for="Username" style="padding-top:0"><i
                                                        class="fa fa-user"></i> Username:</label>

                                                <div class="form-notch">
                                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                                    <div class="form-notch-middle" style="width: 61.6px;"></div>
                                                    <div class="form-notch-trailing"></div>
                                                </div>
                                                <div class="invalid-feedback">Username अनिवार्य छ |</div>

                                            </div>
                                        </div>
                                        <div class="col-md-3  mb-4">
                                            <div class="form-outline strength-meter" id ="strength-meter">
                                                {{-- <i class="fas fa-eye trailing toggle-passwordreg"></i> --}}
                                                <input type="password" name="password" class="form-control  eng_text"
                                                    @error('password')
                                                         style="color: red"
                                                      @enderror
                                                    id="password"
                                                    title="Passowrd must be 8 characters with at least 1 uppercase,1 lowercase,1 digit and 1 special character"
                                                    autofocus required>
                                                <label class="form-label" for="Password" style="padding-top:0">
                                                    <i class="fa fa-key"></i> Password: </label>

                                                <div class="form-notch">
                                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                                    <div class="form-notch-middle" style="width: 61.6px;"></div>
                                                    <div class="form-notch-trailing"></div>
                                                </div>
                                                <div class="invalid-feedback">Password अनिवार्य छ |</div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-4">
                                            <div class="form-outline">
                                                {{-- <i class="fas fa-eye trailing toggle-passwordcon"></i> --}}
                                                <input type="password" name="password_confirmation"
                                                    class="form-control  eng_text" value=""
                                                    id="password_confirmation" autofocus required>
                                                <label class="form-label" for="Confirm Password"
                                                    style="padding-top:0"><i class="fa fa-key"></i> Confirm
                                                    Password:</label>
                                                <div class="form-notch">
                                                    <div class="form-notch-leading" style="width: 9px;"></div>
                                                    <div class="form-notch-middle" style="width: 61.6px;"></div>
                                                    <div class="form-notch-trailing"></div>
                                                </div>
                                                <div class="invalid-feedback">ConfirmPassword अनिवार्य छ|</div>
                                            </div>
                                        </div>
                                        <br> <br>
                                        <div class="d-flex col-md-12 regUserBtn">
                                            <button type="submit" name="button"
                                                class="btn btn-primary buttonsubmit" id="registerUser"><i
                                                    class="fa-solid fa-circle-play"></i> दर्ता गर्नुहोस्</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    @include('frontend.auth.js.regiter-script')
    <!-- Scripts -->
</body>

</html>
