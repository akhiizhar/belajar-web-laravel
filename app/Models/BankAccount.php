<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    // protected $table = 'bank_accounts';
    protected $fillable = [
        'user_id',
        'bank_name',
        'account_number',
        'status',
    ];

    // 17 April
    // relasikan table bankAccount dengan table user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
