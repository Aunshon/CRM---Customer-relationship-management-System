<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class product extends Model
{

    // use SoftDeletes;

    protected $fillable = [
        'product_name',
        'product_price',
        'product_quantity',
        'product_category',
        'product_subcategory',
        'product_description',
        'brand',
        'activation',
        'photo',
        'child_photo_1',
        'child_photo_2',
        'child_photo_3',
        'form_checked',
    ];

    // relationBetweenCategory
    function relationBetweenCategory()
    {
      return $this->hasOne('App\Category','id','product_category');
    }

    // relationBetweensubcategory
    function relationBetweensubcategory()
    {
      return $this->hasOne('App\Subcategory','id','product_subcategory');
    }

    // END
}
