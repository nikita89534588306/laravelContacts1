<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Services\FormHendlers\NewContactFormHendler;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPersons = Person::query()
            ->select('id', 'name', 'surname')
            ->orderBy('name')
            ->get();
        
        $valueContact =  Person::query()->count();
            

        return view("contact.index")->with('dataPersons', $dataPersons)
                                    ->with('valueContact',$valueContact);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NewContactFormHendler $formHendler,Request $request)
    {
        $rowDataPerson = $request->collect();

        $dataContact = $formHendler->prepareContactData($rowDataPerson);

        Person::query()->create($dataContact['fullName'])
            ->phones()->createMany($dataContact['phones']);
            
        return redirect()->route('contact.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dataContact = Person::query()->select('id', 'name', 'surname')
                                      ->where('id', '=',$id)
                                      ->with('phones', fn($query)=>$query->select('person_id', 'number'))
                                      ->first();

        
                        
        return view('contact.show')->with('dataContact', $dataContact);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
