<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class EsifarishCitizenUser extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'email',
        'password',
        'mobile_no',
        'verification_code',
        'email_verified_at',

    ];


    public function esifarishUserInfo(): HasOne
    {
        return $this->hasOne(EsifarishCitizenUserInfo::class, 'user_id', 'id');
    }

    public function esifarishtaxPayer(): HasOne
    {
        return $this->hasOne(EsifarishCitizenTaxPayer::class, 'user_id', 'id');
    }
}
