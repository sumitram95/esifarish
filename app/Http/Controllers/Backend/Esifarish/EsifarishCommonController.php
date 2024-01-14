<?php

namespace App\Http\Controllers\Backend\Esifarish;

use App\Http\Controllers\Controller;
use App\Http\Requests\Esifarish\EsifarishRequest;
use Illuminate\Http\Request;

class EsifarishCommonController extends Controller
{
    use EsifarishController;

    // public function commonMethod(Request $request)
    public function commonMethod(EsifarishRequest $request)
    {
        // return($request->all());
        $validated = $request->validated();

        switch (true) {
            case (array_key_exists('is_minor', $validated) && $validated['is_minor'] == 'on'):
                return $this->isMinorStore($validated);
                break;
            default:
                return $this->isTaxpayerStore($validated);
                break;
        }
    }
}
