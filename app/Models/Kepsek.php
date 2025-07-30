<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kepsek extends Model
{
    protected $table = 'kepsek';

    protected $fillable = [
        'user_id',
        'nama',
        'nip',
        'alamat',
        'jenis_kelamin',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
