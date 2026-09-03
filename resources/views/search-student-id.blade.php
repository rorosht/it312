<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/search-student" method="POST">
        @csrf
        Enter student id: <input type="text" name="id"> <br>
        <button type="submit" style="background-color: green; color: white; padding: 5px; border-radius: 5px;">search</button>
    </form>
</body>
</html>