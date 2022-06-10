<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $dados = $request->except('_token');

        $insumo = Item::create($dados);

        return response()->json($insumo);
    }
}
