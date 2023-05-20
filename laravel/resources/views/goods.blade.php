<html>
<head>
</head>
<body>
@foreach ($goods as $good)
    <p>Напиток {{ $good->name }}</p>
@endforeach

</body>
</html>
