<?php

namespace App\Http\Controllers;

use App\With;
use App\Http\Resources\WithCollection;
use App\Http\Resources\WithResource;
 
class WithAPIController extends Controller
{
    public function index()
    {
        return new WithCollection(With::paginate());
    }
 
    public function show(With $with)
    {
        return new WithResource($with->load([]));
    }

    public function store(Request $request)
    {
        return new WithResource(With::create($request->all()));
    }

    public function update(Request $request, With $with)
    {
        $with->update($request->all());

        return new WithResource($with);
    }

    public function destroy(Request $request, With $with)
    {
        $with->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}