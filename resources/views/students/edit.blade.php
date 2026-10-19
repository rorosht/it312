<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student Information</title>
</head>
<body>
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('students.update', $student->id) }}">
        @csrf

        <label for="student_id">Student ID: </label>
        <input type="text" id="student_id" name="student_id" value="{{ old('student_id', $student->student_id) }}">
        <br>
        <label for="name">Name: </label>
        <input type="text" id="name" name="name" value="{{ old('name', $student->name) }}">
        <br>
        <label for="course">Course: </label>
        <input type="text" id="course" name="course" value="{{ old('course', $student->course) }}">
        <br>
        <label for="year_level">Year Level: </label>
        <input type="number" id="year_level" name="year_level" value="{{ old('year_level', $student->year_level) }}">
        <br>
        <button type="submit">Save</button>
    </form>

    <a href="{{ route('students.index') }}">Back</a>
</body>
</html>