<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'text', 'category_id', 'user_id'];

    // Relación: Un post pertenece a una categoría
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // Relación: Un post pertenece a un usuario
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);   
    }

     // Relación: Un post pertenece a un usuario
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relación: Un post puede tener muchos comentarios
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
