<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\Person;

class PersonController extends Controller
{
    public function index()
    {
        return Person::all();
    }

    public function store(PersonRequest $request)
    {
        return Person::create($request->validated());
    }

    public function show(Person $person)
    {
        return $person;
    }

    public function update(PersonRequest $request, Person $person)
    {
        $person->update($request->validated());

        return $person;
    }

    public function destroy(Person $person)
    {
        $person->delete();

        return response()->json();
    }
}
