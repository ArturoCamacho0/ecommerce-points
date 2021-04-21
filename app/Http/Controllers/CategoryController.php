<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function store(Request $request)
    {
        return Category::create($request->all());
    }

    public function show(Category $category)
    {
        return $category;
    }

    public function update(Request $request, Category $category)
    {
        return response()->json($category->update($request->all()), 200);
    }

    public function destroy(Category $category)
    {
        return response()->json([
            'deleted' => $category->delete(),
            'message' => 'Se ha eliminado'
        ], 200);
    }
}
