<?php

namespace App\Models;

use App\Support\Media;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'category',
        'description',
        'image',
        'embed_url',
        'pdf_file',
        'github_url',
        'website_url',
        'figma_url',
    ];

    protected function imageUrl(): Attribute
    {
        return Attribute::get(fn () => Media::url($this->image));
    }

    protected function pdfUrl(): Attribute
    {
        return Attribute::get(fn () => Media::url($this->pdf_file));
    }
}
