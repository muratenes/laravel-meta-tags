<?php

namespace MuratEnes\LaravelMetaTags\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaTag extends Model
{
    use HasFactory;

//    const META_FIELDS = [
//        'meta_title',
//        'meta_description',
//        'meta_keywords',
//        'og_title',
//        'og_url',
//        'og_type',
//        'og_image',
//        'twitter_title',
//        'twitter_card',
//        'twitter_image_src',
//    ];

    protected $guarded = [
        'id'
    ];

    /**
     * Get the owning imageable model.
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
