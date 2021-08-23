<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'text',
        'to_user',
        'from_user',
        'created_at',
        'updated_at'
    ];

    public function user_to()
    {
        return $this->belongsTo(User::class, 'to_user', 'id');
    }
    public function user_from()
    {
        return $this->belongsTo(User::class, 'from_user', 'id');
    }
}
