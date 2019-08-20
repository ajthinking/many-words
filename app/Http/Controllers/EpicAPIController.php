<?php

namespace App\Http\Controllers;

use App\Epic;
use App\Http\Resources\EpicCollection;
use App\Http\Resources\EpicResource;
 
class EpicAPIController extends Controller
{
    public function index()
    {
        return new EpicCollection(Epic::paginate());
    }
 
    public function show(Epic $epic)
    {
        return new EpicResource($epic->load([]));
    }

    public function store(Request $request)
    {
        return new EpicResource(Epic::create($request->all()));
    }

    public function update(Request $request, Epic $epic)
    {
        $epic->update($request->all());

        return new EpicResource($epic);
    }

    public function destroy(Request $request, Epic $epic)
    {
        $epic->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}