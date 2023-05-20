
    <html>
<head></head>
<body>
@foreach ($menus as $menu)
    <p>This is user {{ $menu->name }}</p>
@endforeach
</body>
</html>
