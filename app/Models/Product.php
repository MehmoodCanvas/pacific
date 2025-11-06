<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
class Product extends Model
{
        use HasSlug;

        protected $table = 'product';
        protected $primaryKey = 'product_id';
        protected $fillable = [
            'product_name',
            'product_slug',
            'product_price',
            'product_description',
            'product_image',
            'product_category',
            'product_quantity',
            'product_status'
        ];
        public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('product_name')
            ->saveSlugsTo('product_slug');
    }

}
