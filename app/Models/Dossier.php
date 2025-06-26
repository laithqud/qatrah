<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_path',
        'title'
    ];

    /**
     * Get the full URL for the file
     */
    public function getFileUrlAttribute()
    {
        return asset('storage/' . $this->file_path);
    }
}