<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InApplication; // Update the model name to match the correct one
use App\Http\Requests\StoreInApplicationRequest;
use App\Http\Requests\UpdateInApplicationRequest;

class InApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function create()
    {
        return view('applyIncentive');
    }

    public function store(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'applicant_name' => 'required',
            'ic_num' => 'required',
            'birthdate' => 'required|date',
            'age' => 'required|integer',
            'birthplace' => 'required',
            'nationality' => 'required',
            'passport_num' => 'required',
            'telephone_num' => 'required',
            'bank_name' => 'required',
            'bank_account' => 'required',
            'current_address' => 'required',
        ]);

        // Create a new InApplication instance and save it to the database
        $inapplication = new InApplication();
        $inapplication->applicant_name = $request->input('applicant_name');
        $inapplication->ic_num = $request->input('ic_num');
        $inapplication->birthdate = $request->input('birthdate');
        $inapplication->age = $request->input('age');
        $inapplication->birthplace = $request->input('birthplace');
        $inapplication->nationality = $request->input('nationality');
        $inapplication->passport_num = $request->input('passport_num');
        $inapplication->telephone_num = $request->input('telephone_num');
        $inapplication->bank_name = $request->input('bank_name');
        $inapplication->bank_account = $request->input('bank_account');
        $inapplication->current_address = $request->input('current_address');
        // Set more attributes as needed

        $inapplication->save();

        // Redirect or perform additional actions
        return redirect()->back()->with('success', 'Application submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(InApplication $inApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InApplication $inApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInApplicationRequest $request, InApplication $inApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InApplication $inApplication)
    {
        //
    }
}

