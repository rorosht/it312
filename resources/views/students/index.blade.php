<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Data</title>
</head>
<body>
    @session('success')
        <p> {{$value}} </p>
    @endsession
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Student ID</td>
            <td>Name</td>
            <td>Course</td>
            <td>Year Level</td>
            <td>Actions</td>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->student_id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->course }}</td>
                <td>{{ $student->year_level }}</td>
                <td>
                    <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                    <a href="{{ route('students.destroy', $student->id) }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>

    <a href="{{ route('students.create') }}">Add Student</a>
</body>
</html>