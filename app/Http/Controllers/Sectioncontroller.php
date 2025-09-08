<?php

namespace App\Http\Controllers;

use App\Models\Student;  // ✅ Capital S
use Illuminate\Http\Request;

class Sectioncontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = Student::all();  // ✅ Capital S
        return view('profile.studentlisting', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile.studentstore');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->password; // test ke liye plain rakho
        $student->gender = $request->gender;
        $student->save();
        // $validation = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'gender' => 'required',
        //        'password' => 'required|min:6'
        // ]);

        // $student = Student::create([
        //     'name'     => $request->name,
        //     'email'    => $request->email,
        //     'password' => $request->password,  // test ke liye plain rakho, baad me bcrypt
        //     'gender'   => $request->gender,
        // ]); 
        return redirect()->route('section.index')->with('success', 'Record Stored successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $student = Student::findOrFail($id);  // ✅ Capital S
        $student->delete();

        return redirect()->route('section.index')->with('success', 'Record deleted successfully');
    }
}
