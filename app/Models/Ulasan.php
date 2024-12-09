<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ulasan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ulasan',
        'vegetables_id'

    ];

    public function ulasans(): BelongsTo
    {
        return $this->belongsTo(Ulasans::class);
    }

}
