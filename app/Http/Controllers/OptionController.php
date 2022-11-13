<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Resources\OptionCollection;

class OptionController extends Controller
{
    public function subOption($id){
        // $sub_options = Option::where('value_id', $id)->where('parent_id', "!=" ,  0)->with('values')->get();
        // return new OptionCollection($sub_options);

        $response = Http::get("https://staging.mazaady.com/api/get-options-child/${id}");
        return response()->json($response->json());
    }
}
