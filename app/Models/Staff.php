<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Staff extends Model
{
    protected $table = 'staffs';

    protected $fillable = [
        'user_id',
        'nama',
        'nip',
        'tempat_lahir',
        'tanggal_lahir',
        'jk',
        'agama',
        'jabatan',
        'status',
        'alamat',
        'no_hp',
        'email_kantor',
        'pendidikan_terakhir',
        'foto',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
