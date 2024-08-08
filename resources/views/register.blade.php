<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/register" method="POST">
        @csrf
<label for="name">name</label><br>
<input type="text" name="name" id="name"><br>
<label for="pwd">password</label><br>
<input type="password" name="password" id="password"><br>
<label for="email">email</label><br>
<input type="email" id="email" name="email">
<input type="submit" name="submit">
<a href="/login">back</a>
    </form>

</body>
</html>
