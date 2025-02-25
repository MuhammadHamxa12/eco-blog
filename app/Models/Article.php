<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Define fillable fields
    protected $fillable = [
        'title',
        'content',
        'author',
        'user_id',
    ];

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
