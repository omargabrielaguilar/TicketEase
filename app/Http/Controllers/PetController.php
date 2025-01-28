<?php

namespace App\Http\Controllers;

use App\Http\Requests\PetRequest;
use App\Models\Pet;

class PetController extends Controller
{
    public function index()
    {
        return Pet::all();
    }

    public function store(PetRequest $request)
    {
        return Pet::create($request->validated());
    }

    public function show(Pet $pet)
    {
        return $pet;
    }

    public function update(PetRequest $request, Pet $pet)
    {
        $pet->update($request->validated());

        return $pet;
    }

    public function destroy(Pet $pet)
    {
        $pet->delete();

        return response()->json();
    }
}
