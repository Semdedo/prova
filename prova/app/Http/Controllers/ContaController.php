<?php

namespace App\Http\Controllers;

use App\conta;
use Illuminate\Http\Request;


class ContaController extends Controller
{
    public function index()
    {
        return conta::all();
    }
    public function store(Request $request)
    {
        return conta::create($request->all());
    }
    public function show($id)
    {
        return conta::find($id);
    }
    
    public function destroy(Conta $conta)
    {
        $conta->delete();
        return response()->json(null, 204);
    }
}
