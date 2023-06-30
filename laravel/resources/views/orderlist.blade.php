<html>
<head>
</head>
<body>
@foreach ($carts as $cart)
    <p>This is user's ID {{ $cart->userId }}</p>
    <p>This is price {{ $cart->price }}</p>
    
@endforeach
</body>
</html>
