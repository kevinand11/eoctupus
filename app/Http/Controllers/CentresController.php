<?php

namespace App\Http\Controllers;

use App\Http\Requests\CentreUpdateRequest;
use App\Http\Requests\CentreCreateRequest;
use App\Centre;

class CentresController extends Controller
{
    public function index()
    {
        return Centre::all();
    }

    public function store(CentreCreateRequest $request)
    {
        return Centre::create($request->all());
    }

    public function show(Centre $centre)
    {
        return $centre;
    }

    public function update(CentreUpdateRequest $request, Centre $centre)
    {
        return $centre->update($request->all());
    }

    public function destroy(Centre $centre)
    {
        return $centre->delete();
    }
}
