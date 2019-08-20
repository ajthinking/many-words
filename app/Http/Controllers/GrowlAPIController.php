<?php

namespace App\Http\Controllers;

use App\Growl;
use App\Http\Resources\GrowlCollection;
use App\Http\Resources\GrowlResource;
 
class GrowlAPIController extends Controller
{
    public function index()
    {
        return new GrowlCollection(Growl::paginate());
    }
 
    public function show(Growl $growl)
    {
        return new GrowlResource($growl->load([]));
    }

    public function store(Request $request)
    {
        return new GrowlResource(Growl::create($request->all()));
    }

    public function update(Request $request, Growl $growl)
    {
        $growl->update($request->all());

        return new GrowlResource($growl);
    }

    public function destroy(Request $request, Growl $growl)
    {
        $growl->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}