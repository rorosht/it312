<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Student</title>
</head>
<body>
    <form method="post" action="/update/{{ $student->id }}"
    style="display: flex; flex-direction: column; justify-content: center; align-items: start; max-width: 170px; border: 1px solid black; border-radius: 5px; padding: 20px;">

    @csrf    

    <h3 style="text-align: center; width: 100%;">Update</h3>

    Lastname:
    <input type="text" name="lastname" value="{{ $student->lastname }}"
        style="padding: 5px; border-radius: 5px;"><br>

    Firstname:
    <input type="text" name="firstname" value="{{ $student->firstname }}"
        style="padding: 5px; border-radius: 5px;"><br>

    Middlename:
    <input type="text" name="middlename" value="{{ $student->middlename }}"
        style="padding: 5px; border-radius: 5px;"><br>

    <button type="submit"
        style="background-color: green; color: white; border-radius: 5px;">
        Submit
    </button>
</form>
</body>
</html>