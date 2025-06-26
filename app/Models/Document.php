<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_path',
        'file_path', 
        'page_count'
    ];

    // Accessors for full URLs
    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image_path);
    }

    public function getFileUrlAttribute()
    {
        return asset('storage/' . $this->file_path);
    }
}