<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\CategoryCollection;

class CategoryController extends Controller
{
    public function mainCategory(){
        $main_categories = Category::mainCategories();
        return new CategoryCollection($main_categories);
    }


    public function subCategory($id){
        $sub_categories = Category::where('parent_id', $id)
                                  ->with("options", "options.values")->get();
        return new CategoryCollection($sub_categories);
    }
}
