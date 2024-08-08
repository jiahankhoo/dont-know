<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('login') }}" method="POST">
    @csrf

    @if(session()->has('message'))
        {{ session('message') }}
    @endif
<label for="name">NAME</label><br>
<input type="text" name="name" id="name"><br>
<label for="pwd">PASSWORD</label><br>
<input type="password" name="password" id="password"><br>
<label for="email">email</label><br>
<input type="email" id="email" name="email">
<input type="submit" name="submit"><br>
<a href="/register">register</a><br>
</form>
</body>
</html>
