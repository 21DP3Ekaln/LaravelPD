<?php

namespace App\Http\Controllers;

use App\Models\kurss;
use Illuminate\Http\Request;

class kurssController extends Controller
{
public function store(Request $request)
{
$validatedData = $request->validate([
'nosaukums' => 'required|string|max:255',
'apraksts' => 'required|string',
'banera_adrese' => 'nullable|url',
'cilveku_skaits' => 'required|integer|min:0',
]);

$kurss = kurss::create($validatedData);

return response()->json($kurss, 201);
}

public function index()
{
$kursi = kurss::all();

return response()->json($kursi);
}
}