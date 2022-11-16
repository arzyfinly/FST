<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'keyword',
        'description',
        'content',
        'image_content',
        'image_header',
        'date',
        'category_profile_id',
        'publish',
    ];
    
    protected $nullable = [
        'image_content',
        'image_header',
    ];

    protected $with = ['categoryProfile'];

    public function categoryProfile()    
    {
        return $this->belongsTo(CategoryProfile::class);
    }
}
