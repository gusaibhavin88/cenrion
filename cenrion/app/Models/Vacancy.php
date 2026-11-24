<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $table = 'vacancies';

    protected $fillable = [
        'custom_id',
        'title',
        'department',
        'type',
        'description',
        'tech_stack',
        'apply_url',
        'status',
        'order',
    ];

    protected $casts = [
        'tech_stack' => 'array',
        'order' => 'integer',
    ];

    /**
     * Scope query to active vacancies.
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active')->orderBy('order', 'asc');
    }
}
