<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EsifarishCitizenUserInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'is_minor',
        'is_taxpayer',

        'en_first_name',
        'en_middle_name',
        'en_last_name',

        'np_first_name',
        'np_middle_name',
        'np_last_name',

        'user_name',

        'dob_registration_no',
    ];


    public function esifarishUser(): BelongsTo
    {
        return $this->belongsTo(EsifarishCitizenUser::class, 'user_id', 'id');
    }
}
