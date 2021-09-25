<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserContacts extends Model
{
    protected $table = 'user_contacts';
    protected $fillable = [
        'user_id',
        'name',
        'birth_date',
        'phone',
        'address',
        'credit_card',
        'credit_card_ending',
        'franchise',
        'email'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
