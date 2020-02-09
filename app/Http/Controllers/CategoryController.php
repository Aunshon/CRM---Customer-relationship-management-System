<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use Carbon\Carbon;

class CategoryController extends Controller
{
    // create
    function cat_create(Request $request)
    {
        // echo $request;
        Category::insert([
            'category_name'         =>$request->category_name,
            'created_at'             =>Carbon::now(),
        ]);

        return back();
    }
    // sub_cat_create
    function sub_cat_create(Request $request)
    {
        // echo $request;
        Subcategory::insert([
            'subcategory_name'          =>$request->category_name,
            'category_id'               =>$request->category_id,
            'created_at'                =>Carbon::now(),
        ]);

        return back();
    }

    // get_subcategory

    function get_subcategory(Request $request)
    {
        $x = Subcategory::where('category_id',$request->main_category_id)->get();

        $dataSend ='';
        foreach ($x as $xs) {
          $dataSend .= "<option value='$xs->id'>$xs->subcategory_name</option>";
        }

        return $dataSend;
    }

    // END
}
