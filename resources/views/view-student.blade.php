<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    <style>
        .students-head-col{
            text-align: center;
            font-weight: bold;
            background-color: #f2f2f2;
            padding: 8px; 
        }
        .students-col{
            padding: 5px;
        }
    </style>
</head>
<body>
    <table border="1" style="margin-bottom: 10px;">
        <thead>
            <tr>
                <td class="students-head-col">ID</td>
                <td class="students-head-col">Lastname</td>
                <td class="students-head-col">Firstname</td>
                <td class="students-head-col">Middlename</td>
            </tr>
        </thead>
        <tbody>
            @if ($student)
                <tr>
                    <td class="students-col">{{ $student->id }}</td>
                    <td class="students-col">{{ $student->lastname }}</td>
                    <td class="students-col">{{ $student->firstname }}</td>
                    <td class="students-col">{{ $student->middlename }}</td>
                </tr>
            @else
                <tr>
                    <td class="students-col" colspan="3">No student found with that ID.</td>
                </tr>
            @endif
        </tbody>
    </table>
    <a href="/" style="text-decoration: none; background-color: rgb(0, 90, 207); color: white; padding: 5px; border-radius: 5px;">Back</a>
</body>
</html>