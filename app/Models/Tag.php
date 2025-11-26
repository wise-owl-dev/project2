<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;
    protected $fillable = ['name'];

    // Relación: Un tag puede pertenecer a muchos posts
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }

}
