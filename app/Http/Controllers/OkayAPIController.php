<?php

namespace App\Http\Controllers;

use App\Okay;
use App\Http\Resources\OkayCollection;
use App\Http\Resources\OkayResource;
 
class OkayAPIController extends Controller
{
    public function index()
    {
        return new OkayCollection(Okay::paginate());
    }
 
    public function show(Okay $okay)
    {
        return new OkayResource($okay->load([]));
    }

    public function store(Request $request)
    {
        return new OkayResource(Okay::create($request->all()));
    }

    public function update(Request $request, Okay $okay)
    {
        $okay->update($request->all());

        return new OkayResource($okay);
    }

    public function destroy(Request $request, Okay $okay)
    {
        $okay->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}