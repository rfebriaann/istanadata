<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OpdResource;
use App\Models\Opd;
use Illuminate\Http\Request;

class OpdController extends Controller
{
    public function index(){
        $data = Opd::latest()->get();
        return response()->json([OpdResource::collection($data), "fetch"]);
    }
}
