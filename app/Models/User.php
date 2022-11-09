<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property int|null $receiver_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User|null $receiver
 * @property-read User|null $sender
 * @mixin Eloquent
 */
class User extends Model
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
        'receiver_id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function receiver(): HasOne
    {
        return $this->hasOne(User::class, 'receiver_id');
    }

    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}
