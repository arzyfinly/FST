<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'content_id',
        'title',
        'image_content',
        'content',
    ];

    protected $nullable = [
        'image_content',
    ];
    protected $with = ['contentAkademik'];

    public function contentAkademik()
    {
        return $this->belongsTo(ContentAcademic::class);
    }
}
