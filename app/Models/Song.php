<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Song extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'artist', 'genre'];

    public function speeders(): HasMany
    {
        return $this->hasMany(Speeder::class);
    }
}
