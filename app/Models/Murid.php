<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Murid extends Model
{
    protected $table = 'murids';

    protected $fillable = [
        'user_id',
        'nama',
        'nis',
        'kelas',
        'alamat',
        'jenis_kelamin',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
