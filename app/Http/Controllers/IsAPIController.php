<?php

namespace App\Http\Controllers;

use App\Is;
use App\Http\Resources\IsCollection;
use App\Http\Resources\IsResource;
 
class IsAPIController extends Controller
{
    public function index()
    {
        return new IsCollection(Is::paginate());
    }
 
    public function show(Is $is)
    {
        return new IsResource($is->load([]));
    }

    public function store(Request $request)
    {
        return new IsResource(Is::create($request->all()));
    }

    public function update(Request $request, Is $is)
    {
        $is->update($request->all());

        return new IsResource($is);
    }

    public function destroy(Request $request, Is $is)
    {
        $is->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}