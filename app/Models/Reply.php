<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reply extends Model
{
    use HasFactory;

    const XP = 2;

    protected $fillable = ['user_id', 'text'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
