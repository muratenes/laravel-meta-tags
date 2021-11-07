<?php

namespace MuratEnes\LaravelMetaTags\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MuratEnes\LaravelMetaTags\Models\Getters\MetaTagGetter;

class MetaTag extends Model
{
    use HasFactory;
    use MetaTagGetter;


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
