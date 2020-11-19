<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ma View</h2>
    <p>
        <a href="/">Home</a>
        <a href="{{ route('home2', ['p1', 'p2']) }}">Home2</a>
    </p>
</body>
</html>