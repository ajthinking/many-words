<?php

namespace App\Http\Controllers;

use App\And;
use App\Http\Resources\AndCollection;
use App\Http\Resources\AndResource;
 
class AndAPIController extends Controller
{
    public function index()
    {
        return new AndCollection(And::paginate());
    }
 
    public function show(And $and)
    {
        return new AndResource($and->load([]));
    }

    public function store(Request $request)
    {
        return new AndResource(And::create($request->all()));
    }

    public function update(Request $request, And $and)
    {
        $and->update($request->all());

        return new AndResource($and);
    }

    public function destroy(Request $request, And $and)
    {
        $and->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}