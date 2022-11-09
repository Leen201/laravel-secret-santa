<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class User
{
    use HasFactory;

    protected $table = 'users';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
