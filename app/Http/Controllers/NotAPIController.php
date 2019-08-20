<?php

namespace App\Http\Controllers;

use App\Not;
use App\Http\Resources\NotCollection;
use App\Http\Resources\NotResource;
 
class NotAPIController extends Controller
{
    public function index()
    {
        return new NotCollection(Not::paginate());
    }
 
    public function show(Not $not)
    {
        return new NotResource($not->load([]));
    }

    public function store(Request $request)
    {
        return new NotResource(Not::create($request->all()));
    }

    public function update(Request $request, Not $not)
    {
        $not->update($request->all());

        return new NotResource($not);
    }

    public function destroy(Request $request, Not $not)
    {
        $not->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}