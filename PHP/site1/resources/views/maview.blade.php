<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ma view</h1>
    <p><a href="/">Home</a></p>
    <p><a href="{{ route('home2', ['param1', 'param2']) }}">Home 2</a></p>  <!-- ['param1', 'param2'] => tableau -->
</body>
</html>