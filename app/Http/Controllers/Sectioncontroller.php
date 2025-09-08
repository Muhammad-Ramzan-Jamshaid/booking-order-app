<?php

namespace App\Http\Controllers;

use App\Models\Student;  // ✅ Capital S
use Illuminate\Http\Request;

// class SectionController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         $records = Student::all();  // ✅ Capital S
//         return view('profile.studentlisting', compact('records'));
//     }

//     // show only softDelete 
//     public function deletedStudents(){
//         $records = Student::onlyTrashed()->get();
//         return view('profile.deletinglistStudent' ,compact('records'));
//     }


// //storing a deleting student 

// public function restore($id)
// {
//    $student =  Student::withTrashed()->findorfail($id);
//    $student ->restore();
//    return redirect()->route('section.index')->with('success','Student restore successfully');
// }

// public function forceDelete($id){
//     $student = Student::withTrashed()->findorfail($id);
//     $student->forceDelete();
//     return redirect()->route('Student.delete')->with('Deleted','Student Deleted successfully');
// }



//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         return view('profile.studentstore');
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {


//         $student = new Student();
//         $student->name = $request->name;
//         $student->email = $request->email;
//         $student->password = $request->password; // test ke liye plain rakho
//         $student->gender = $request->gender;
//         $student->save();
        
//         return redirect()->route('section.index')->with('success', 'Record Stored successfully');
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(string $id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(string $id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, string $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(string $id)
//     {
//         $student = Student::findOrFail($id);  // ✅ Capital S
//         $student->delete();

//         return redirect()->route('section.index')->with('success', 'Record deleted successfully');
//     }
// }

class SectionController extends Controller
{
    public function index()
    {
        $records = Student::all();
        return view('profile.studentlisting', compact('records'));
    }

    // Deleted students list
    public function deleted()
    {
        $records = Student::onlyTrashed()->get();
        return view('profile.deleting', compact('records'));
    }

    public function restore($id)
    {
        $student = Student::withTrashed()->find($id);
        $student->restore();

        return redirect()->route('section.index')->with('success', 'Student restored successfully!');
    }

    public function forceDelete($id)
    {
        $student = Student::withTrashed()->find($id);
        $student->forceDelete();

        return redirect()->route('section.index')->with('Deleted', 'Student permanently deleted!');
    }

    public function create()
    {
        return view('profile.studentstore');
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->gender = $request->gender;
        $student->save();

        return redirect()->route('section.index')->with('success', 'Record stored successfully');
    }

    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('section.index')->with('success', 'Record deleted successfully');
    }

    public function show($id)
{
    $student = Student::findOrFail($id);
    return view('profile.showStudent', compact('student'));
}

}
