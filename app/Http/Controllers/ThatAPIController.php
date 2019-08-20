<?php

namespace App\Http\Controllers;

use App\That;
use App\Http\Resources\ThatCollection;
use App\Http\Resources\ThatResource;
 
class ThatAPIController extends Controller
{
    public function index()
    {
        return new ThatCollection(That::paginate());
    }
 
    public function show(That $that)
    {
        return new ThatResource($that->load([]));
    }

    public function store(Request $request)
    {
        return new ThatResource(That::create($request->all()));
    }

    public function update(Request $request, That $that)
    {
        $that->update($request->all());

        return new ThatResource($that);
    }

    public function destroy(Request $request, That $that)
    {
        $that->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}