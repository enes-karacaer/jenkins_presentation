html<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="">asd</a>
<form action="/calc" method="post" >
    {{ csrf_field() }}
    <input placeholder="A" value="{{ $a }}" name="a" />
    <select name="action">
        <option @if ($action == '+') selected="selected" @endif>+</option>
        <option @if ($action == '-') selected="selected" @endif>-</option>
        <option @if ($action == '*') selected="selected" @endif>*</option>
        <option @if ($action == '/') selected="selected" @endif>/</option>
    </select>
    <input placeholder="B" value="{{ $b  }}" name="b" />
    @if (isset($result))
        <strong>= {{ $result }}</strong>
    @endif
    <button>Execute</button>
</form>
</body>
</html>
