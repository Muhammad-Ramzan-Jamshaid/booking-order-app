<?php

namespace App\Http\Controllers;
use App\Models\Student; 
use Illuminate\Http\Request;

class sectioncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = student::all();
        return view('profile.studentlisting',compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('profile.studentstore');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'gender'=>'required'
        ]);

        $student = new student();
        $store = $student->create($request->all());
        return redirect()->route('section.index')->with('success', 'Record Stored successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        

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
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('section.index')->with('success', 'Record deleted successfully');
    }
}
