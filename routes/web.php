<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Students;

Route::get('/', function () {
    $students = Students::all();
    return view('students', compact('students'));
});

Route::get('/add', function() {
    return view('add');
});

Route::post('/save', function(Request $request){
    if(Students::create($request->all())){
        return redirect('/');
    }
});

Route::get('/edit/{id}', function($id) {
    $student = Students::findOrFail($id);
    return view('edit-student', compact('student'));
});

Route::post('/update/{id}', function(Request $request, $id) {
    $student = Students::findOrFail($id);

    $student->lastname = $request->lastname;
    $student->firstname = $request->firstname;
    $student->middlename = $request->middlename;
    $student->save();

    return redirect('/');
});

Route::get('/delete/{id}', function($id) {
    Students::where('id', $id)->delete();

    return redirect('/');
});

Route::get('/view', function() {
    return view('search-student-id');
});

Route::post('/search-student', function(Request $request) {
    $student = Students::where('id', $request->id)->first();
    
    return view('view-student', compact('student'));
});