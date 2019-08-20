<?php

namespace App\Http\Controllers;

use App\Grouped;
use App\Http\Resources\GroupedCollection;
use App\Http\Resources\GroupedResource;
 
class GroupedAPIController extends Controller
{
    public function index()
    {
        return new GroupedCollection(Grouped::paginate());
    }
 
    public function show(Grouped $grouped)
    {
        return new GroupedResource($grouped->load([]));
    }

    public function store(Request $request)
    {
        return new GroupedResource(Grouped::create($request->all()));
    }

    public function update(Request $request, Grouped $grouped)
    {
        $grouped->update($request->all());

        return new GroupedResource($grouped);
    }

    public function destroy(Request $request, Grouped $grouped)
    {
        $grouped->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}