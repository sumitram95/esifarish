<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EsifarishCitizenTaxPayer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'taxpayer_no',
        'internal_taxpayer_no',
        'citizen_no',
        'en_citizenship_issued_date',
        'np_citizenship_issued_date',
        'citizenship_issued_district_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(EsifarishCitizenUser::class, 'user_id', 'id');
    }
}
