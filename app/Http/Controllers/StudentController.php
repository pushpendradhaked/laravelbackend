<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student', compact('students'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Email' => 'required|email',
            'mobile' => 'required',
        ]);

        Student::create([
            'Name' => $request->Name,
            'Email' => $request->Email,
            'mobile' => $request->mobile,
        ]);

        return redirect()->back()->with('msg', 'Data submitted!');
    }

    public function edit($id)
    {
        $student = Student::find($id);                          // ✅ find karo
        return view('student-edit', compact('student'));        // ✅ $student - singular
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Name' => 'required',
            'Email' => 'required|email',
            'mobile' => 'required',
        ]);

        $student = Student::find($id);
        $student->update([
            'Name' => $request->Name,
            'Email' => $request->Email,
            'mobile' => $request->mobile,
        ]);

        return redirect('/student')->with('msg', 'Student updated!');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/student')->with('msg', 'Student deleted!');
    }
}