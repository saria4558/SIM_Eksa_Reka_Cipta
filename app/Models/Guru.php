<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guru extends Model
{
    protected $table = 'gurus';

    protected $fillable = [
        'user_id',
        'nama',
        'nip',
        'jk',
        'mapel',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
        'no_hp'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function mapels()
    {
        return $this->hasMany(Mapel::class);
    }
}
