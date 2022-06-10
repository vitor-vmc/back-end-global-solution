<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\JsonResponse;

class ConsultController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(
            Item::all()
        );
    }
}
