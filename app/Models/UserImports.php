<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserImports extends Model
{
    protected $table = 'user_imports';
    protected $fillable = [
        'user_id',
        'filepath',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
