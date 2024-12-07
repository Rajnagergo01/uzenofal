<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello, {{auth()->user()->name}}</h1>

    @if ($role === 'Admin')
    <button>Admin button</button>
    @elseif ($role === 'User')
        <button>User Button</button>
    @endif
</body>
</html>