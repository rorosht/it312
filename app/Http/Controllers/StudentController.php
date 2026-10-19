<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Validation\Rule;


class StudentController extends Controller
{
    private function rules($id = null)
    {
        return [
            'student_id' => [
                'required',
                'string',
                Rule::unique('students', 'student_id')->ignore($id),
            ],
            'name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'year_level' => 'required|integer|min:1',
        ];
    }

    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);

        return view('students.edit', compact('student'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->rules());
        Student::create($validated);

        return redirect()
                ->route('students.index')
                ->with('success', 'Student Created Successfully');
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $validated = $request->validate($this->rules($id));
        $student->update($validated);

        return redirect()
                ->route('students.index', $id)
                ->with('success', 'Student Updated Successfully');
    }

    public function destroy($id)
    {
        Student::findOrFail($id)->delete();

        return redirect()
                ->route('students.index')
                ->with('success', 'Student Deleted Successfully');
    }


}
