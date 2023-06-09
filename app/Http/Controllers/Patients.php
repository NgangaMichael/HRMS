<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Gender;
use App\Models\Names;
use App\Models\Service;
use Illuminate\VIew\View;

class Patients extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $names = Names::all();
        return view('names.index')->with('names', $names);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('names.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Names::create($input);
        return redirect('names')->with('flash_messsage', 'Patient added');
    }

    /**
     * Saving service details.
     */
    public function saveservice(Request $request)
    {
        $input = $request->all();
        // Save the service details to the "service" table

        // echo('<pre>');
        // print_r($input);
        // exit;
        Service::create($input);
        // return redirect('names')->with('flash_message', 'Service added');
        return redirect()->route('names.show', $input['iddd'])->with('flash_message', 'Service added');

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $name = Names::find($id);

        // Retrieve services where the hospital number matches the patient's hospital number
        $services = Service::where('hospitalnumber', $name->hospitalnumber)->get();

        return view('names.show')->with('name', $name)->with('services', $services);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $name = Names::find($id);
        return view('names.edit')->with('name', $name);
    }

    /**
     * checking in a patient
     */
    public function service(string $id)
    {
        $name = Names::find($id);
        return view('names.service')->with('name', $name);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $name = Names::find($id);
        $input = $request->all();
        $name->update($input);
        return redirect('names')->with('flash_message', 'Patient updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Names::destroy($id);
        return redirect('names')->with('flash_message', 'Patient deleted');
    }
}
