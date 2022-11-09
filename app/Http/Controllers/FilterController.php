<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\FilterService;

class FilterController extends Controller
{
    public function filter(Request $request, FilterService $service){
        $data = $service->handelFilter($request->filters);
        return response()->json([
            'data' => $data,
        ]);
        
    }
}
