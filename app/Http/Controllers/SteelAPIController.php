<?php

namespace App\Http\Controllers;

use App\Steel;
use App\Http\Resources\SteelCollection;
use App\Http\Resources\SteelResource;
 
class SteelAPIController extends Controller
{
    public function index()
    {
        return new SteelCollection(Steel::paginate());
    }
 
    public function show(Steel $steel)
    {
        return new SteelResource($steel->load([]));
    }

    public function store(Request $request)
    {
        return new SteelResource(Steel::create($request->all()));
    }

    public function update(Request $request, Steel $steel)
    {
        $steel->update($request->all());

        return new SteelResource($steel);
    }

    public function destroy(Request $request, Steel $steel)
    {
        $steel->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}