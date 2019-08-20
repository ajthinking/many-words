<?php

namespace App\Http\Controllers;

use App\Muscles;
use App\Http\Resources\MusclesCollection;
use App\Http\Resources\MusclesResource;
 
class MusclesAPIController extends Controller
{
    public function index()
    {
        return new MusclesCollection(Muscles::paginate());
    }
 
    public function show(Muscles $muscles)
    {
        return new MusclesResource($muscles->load([]));
    }

    public function store(Request $request)
    {
        return new MusclesResource(Muscles::create($request->all()));
    }

    public function update(Request $request, Muscles $muscles)
    {
        $muscles->update($request->all());

        return new MusclesResource($muscles);
    }

    public function destroy(Request $request, Muscles $muscles)
    {
        $muscles->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}