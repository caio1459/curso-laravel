<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Suporte;
use Illuminate\Http\Request;

class SuporteController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    // Carrega todos os suportes com categoria relacionada
    $suportes = Suporte::with('category')->get();
    return view('admin.suporte.index', [
      'suportes' => $suportes
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $categories = Category::all();
    return view('admin.suporte.create', [
      'categories' => $categories
    ]);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(string $id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(string $id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, string $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(string $id)
  {
    //
  }
}
