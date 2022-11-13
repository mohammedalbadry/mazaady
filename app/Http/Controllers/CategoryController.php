<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Resources\CategoryCollection;

class CategoryController extends Controller
{
    public function mainCategory(){
        // $main_categories = Category::mainCategories();
        // return new CategoryCollection($main_categories);

        $response = Http::get('https://staging.mazaady.com/api/get_all_cats');
        return response()->json($response->json());
    }


    public function subCategory($id){
        // $sub_categories = Category::where('parent_id', $id)
        //                           ->with("options", "options.values")->get();
        // return new CategoryCollection($sub_categories);

        $response = Http::get("https://staging.mazaady.com/api/properties?cat=${id}");
        return response()->json($response->json());
    }
}
