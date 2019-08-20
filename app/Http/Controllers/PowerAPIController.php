<?php

namespace App\Http\Controllers;

use App\Power;
use App\Http\Resources\PowerCollection;
use App\Http\Resources\PowerResource;
 
class PowerAPIController extends Controller
{
    public function index()
    {
        return new PowerCollection(Power::paginate());
    }
 
    public function show(Power $power)
    {
        return new PowerResource($power->load([]));
    }

    public function store(Request $request)
    {
        return new PowerResource(Power::create($request->all()));
    }

    public function update(Request $request, Power $power)
    {
        $power->update($request->all());

        return new PowerResource($power);
    }

    public function destroy(Request $request, Power $power)
    {
        $power->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}