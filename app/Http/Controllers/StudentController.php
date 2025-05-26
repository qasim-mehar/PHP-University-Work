<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        
        $students = Student::all();
        return view('students.index', compact('students'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Student::create([
            'name' => $request->name,
        ]);

        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }
   
public function destroy($id)
{
    Student::findOrFail($id)->delete();
    return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
}
   public function edit($id)
{
    $student = Student::findOrFail($id);
    return view('students.edit', compact('student'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $student = Student::findOrFail($id);
    $student->update(['name' => $request->name]);

    return redirect()->route('students.index')->with('success', 'Student updated successfully!');
}
 
}
