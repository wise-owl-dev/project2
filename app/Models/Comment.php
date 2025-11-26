<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    protected $fillable = ['text', 'post_id', 'user_id'];

    // Relación: Un comentario pertenece a un post
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    // Relación: Un comentario pertenece a un usuario
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
