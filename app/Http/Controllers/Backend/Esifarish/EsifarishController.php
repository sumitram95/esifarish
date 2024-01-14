<?php

namespace App\Http\Controllers\Backend\Esifarish;

use App\Http\Controllers\Controller;
use App\Jobs\SendMailQueue;
use App\Models\EsifarishCitizenTaxPayer;
use App\Models\EsifarishCitizenUser;
use App\Models\EsifarishCitizenUserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait EsifarishController
{
    public function isTaxpayerStore($validated)
    {
        $minor = $this->commonDataStore($validated);

        $taxPayer = new EsifarishCitizenTaxPayer();

        if (isset($validated['is_taxpayer']) && $validated['is_taxpayer'] === 'on') {
            $taxPayer->taxpayer_no = $validated['taxpayer_code'] ?? null;
            $taxPayer->internal_taxpayer_no = $validated['new_iid'] ?? null;
        }

        $taxPayer->citizen_no = $validated['citizenship_number'];
        $taxPayer->en_citizenship_issued_date = $validated['citizenship_issued_date_ad'];
        $taxPayer->np_citizenship_issued_date = $validated['citizenship_issued_date_bs'];
        $taxPayer->citizenship_issued_district_id = $validated['citizenship_issued_district'];

        $minor->esifarishUserInfo()->save($taxPayer);

        // return redirect()->route('verification.page')->with('success', 'Sent Verification Code Your Email');
        return redirect()->route('login')->with('error', 'SuccessFully Registerd.');

    }

    public function isMinorStore($validated)
    {
        $this->commonDataStore($validated);

        // return redirect()->route('verification.page')->with('success', 'Sent Verification Code Your Email');
        return redirect()->route('login')->with('error', 'SuccessFully Registerd.');
    }

    // ***************** isMinorStore and isTaxpayerStore common data  *******************************/
    public function commonDataStore($validated)
    {
        $verification_code = random_int(10000, 99999);

        $minor = new EsifarishCitizenUser();
        $minor->email = $validated['email'];
        $minor->mobile_no = $validated['mobile_number'];
        $minor->verification_code = $verification_code;
        $minor->password = bcrypt($validated['password']);
        $minor->save();

        // dispatch(new SendMailQueue($validated['email'], $validated['first_name_np'], $verification_code));


        $userInfo = new EsifarishCitizenUserInfo();

        if (isset($validated['is_taxpayer']) && $validated['is_taxpayer'] === 'on') {
            $userInfo->is_taxpayer = 1;
        } elseif (isset($validated['is_minor']) && $validated['is_minor'] === 'on') {
            $userInfo->is_minor = 1;
        } else {
            $userInfo->is_esifarish = 1;
        }

        $userInfo->en_first_name = $validated['first_name_en'];
        $userInfo->en_middle_name = $validated['middle_name_en'];
        $userInfo->en_last_name = $validated['last_name_en'];
        $userInfo->np_first_name = $validated['first_name_np'];
        $userInfo->np_middle_name = $validated['middle_name_np'];
        $userInfo->np_last_name = $validated['last_name_np'];
        $userInfo->user_name = $validated['user_name'];
        // $userInfo->mobile_no = $validated['mobile_number'];
        $userInfo->dob_registration_no = $validated['birth_registration_no'];

        $minor->esifarishUserInfo()->save($userInfo);

        return $minor;
    }
}
