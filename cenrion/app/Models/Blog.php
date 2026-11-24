<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'custom_id',
        'slug',
        'title',
        'category',
        'category_slug',
        'reading_time',
        'author',
        'date',
        'excerpt',
        'content',
        'status',
    ];

    /**
     * Scope query to published articles.
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }
}
